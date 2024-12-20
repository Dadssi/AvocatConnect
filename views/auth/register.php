<?php
// register.php

// Configuration de la base de données
$dsn = 'mysql:host=localhost;dbname=avocat_connect;charset=utf8';
$username = 'root';
$password = '';
$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
];

try {
    $pdo = new PDO($dsn, $username, $password, $options);
} catch (PDOException $e) {
    die('Erreur de connexion à la base de données : ' . $e->getMessage());
}

// Validation des données envoyées
$errors = [];
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $first_name = trim($_POST['first_name'] ?? '');
    $last_name = trim($_POST['last_name'] ?? '');
    $age = intval($_POST['age'] ?? 0);
    $email = trim($_POST['email'] ?? '');
    $confirmation_email = trim($_POST['confirmation_email'] ?? '');
    $password = $_POST['password'] ?? '';
    $confirmation_password = $_POST['confirmation_password'] ?? '';
    $role = $_POST['role'] ?? '';
    $specialties = $_POST['specialties'] ?? [];
    $experience_years = $_POST['experience_years'] ?? '';

    echo $experience_years;
    // Photo upload
    $photo = $_FILES['user_photo'] ?? null;
    $photo_path = '';

    // Vérifications
    if (empty($first_name)) $errors[] = "Le prénom est obligatoire.";
    if (empty($last_name)) $errors[] = "Le nom est obligatoire.";
    if ($age < 18) $errors[] = "Vous devez avoir au moins 18 ans.";
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) $errors[] = "L'adresse email est invalide.";
    if ($email !== $confirmation_email) $errors[] = "Les emails ne correspondent pas.";
    if (strlen($password) < 8) $errors[] = "Le mot de passe doit contenir au moins 8 caractères.";
    if ($password !== $confirmation_password) $errors[] = "Les mots de passe ne correspondent pas.";
    if (empty($role)) $errors[] = "Le rôle est obligatoire.";

    // Validation et enregistrement de la photo
    if ($photo && $photo['error'] === UPLOAD_ERR_OK) {
        $allowed_types = ['image/jpeg', 'image/png', 'image/gif'];
        if (!in_array($photo['type'], $allowed_types)) {
            $errors[] = "Le format de la photo est invalide.";
        } else {
            $upload_dir = 'uploads/';
            if (!is_dir($upload_dir)) {
                mkdir($upload_dir, 0755, true);
            }
            $photo_path = $upload_dir . uniqid() . '-' . basename($photo['name']);
            move_uploaded_file($photo['tmp_name'], $photo_path);
        }
    } else {
        $errors[] = "Une photo est obligatoire.";
    }

    // Insertion dans la base de données
    if (empty($errors)) {
        $hashed_password = password_hash($password, PASSWORD_ARGON2ID);
        $sql = "INSERT INTO users (first_name, last_name, age, email, password, registration_date, role, user_description, photo, experience_years) 
                VALUES (:first_name, :last_name, :age, :email, :password, NOW(), :role, :user_description, :photo, :experience_years)";

        $stmt = $pdo->prepare($sql);
        $stmt->execute([
            ':first_name' => $first_name,
            ':last_name' => $last_name,
            ':age' => $age,
            ':email' => $email,
            ':password' => $hashed_password,
            ':role' => $role,
            ':user_description' => ($role === 'lawyer') ? implode(', ', $specialties) : null,
            ':photo' => $photo_path,
            ':experience_years' => ($role === 'lawyer') ? $experience_years : null,
        ]);

        header('Location: login.php');
        exit;
    } else {
        foreach ($errors as $error) {
            echo "<p style='color:red;'>$error</p>";
        }
    }
}
?>
