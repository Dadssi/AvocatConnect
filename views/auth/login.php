<?php
session_start();

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

$errors = [];
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = trim($_POST['email'] ?? '');
    $password = $_POST['password'] ?? '';
    $remember_me = isset($_POST['remember_me']);

    // Validation basique
    if (empty($email)) $errors[] = "L'email est obligatoire.";
    if (empty($password)) $errors[] = "Le mot de passe est obligatoire.";

    if (empty($errors)) {
        try {
            // Recherche de l'utilisateur dans la base de données
            $stmt = $pdo->prepare("SELECT * FROM users WHERE email = ?");
            $stmt->execute([$email]);
            $user = $stmt->fetch();

            if ($user && password_verify($password, $user['password'])) {
                // Création de la session
                $_SESSION['user_id'] = $user['id_user'];
                $_SESSION['user_role'] = $user['role'];
                $_SESSION['user_email'] = $user['email'];
                $_SESSION['user_name'] = $user['first_name'] . ' ' . $user['last_name'];

                // Si "Se souvenir de moi" est coché
                if ($remember_me) {
                    $token = bin2hex(random_bytes(32));
                    $expires = time() + (30 * 24 * 60 * 60); // 30 jours

                    // Stockage du token dans la base de données
                    $stmt = $pdo->prepare("UPDATE users SET remember_token = ? WHERE id_user = ?");
                    $stmt->execute([$token, $user['id_user']]);

                    // Création du cookie
                    setcookie('remember_token', $token, $expires, '/', '', true, true);
                }

                // Redirection selon le rôle
                if ($user['role'] === 'lawyer') {
                    header('Location: ../lawyer/dashboard-lawyer.php');
                } else {
                    header('Location: ../client/dashboard-client.php');
                }
                exit;
            } else {
                $errors[] = "Email ou mot de passe incorrect.";
            }
        } catch (PDOException $e) {
            $errors[] = "Erreur de base de données : " . $e->getMessage();
        }
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion - Avocat Connect</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="min-h-screen flex items-center justify-center">
        <div class="bg-white p-8 rounded-lg shadow-md w-96">
            <h2 class="text-2xl font-bold mb-6 text-center text-gray-800">Connexion</h2>
            
            <?php if (!empty($errors)): ?>
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
                    <?php foreach ($errors as $error): ?>
                        <p><?php echo htmlspecialchars($error); ?></p>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>

            <form method="POST" class="space-y-4">
                <div>
                    <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email</label>
                    <input type="email" id="email" name="email" required
                           class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:border-blue-500"
                           value="<?php echo htmlspecialchars($_POST['email'] ?? ''); ?>">
                </div>

                <div>
                    <label for="password" class="block text-gray-700 text-sm font-bold mb-2">Mot de passe</label>
                    <input type="password" id="password" name="password" required
                           class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:border-blue-500">
                </div>

                <div class="flex items-center">
                    <input type="checkbox" id="remember_me" name="remember_me" class="h-4 w-4 text-blue-600">
                    <label for="remember_me" class="ml-2 block text-gray-700 text-sm">Se souvenir de moi</label>
                </div>

                <button type="submit"
                        class="w-full bg-blue-500 text-white font-bold py-2 px-4 rounded hover:bg-blue-600 focus:outline-none focus:shadow-outline">
                    Se connecter
                </button>
            </form>

            <div class="mt-4 text-center">
                <a href="forgot-password.php" class="text-sm text-blue-500 hover:text-blue-700">Mot de passe oublié ?</a>
                <p class="mt-2 text-sm text-gray-600">
                    Pas encore de compte ? 
                    <a href="register.php" class="text-blue-500 hover:text-blue-700">S'inscrire</a>
                </p>
            </div>
        </div>
    </div>
</body>
</html>