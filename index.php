<?php

define('ALLOW_ACCESS', true);
require_once 'config/config.php';

session_start();
require_once 'config/database.php';
require_once 'config/constants.php';

// Router simple
$page = isset($_GET['page']) ? $_GET['page'] : 'home';

// Vérification de l'authentification pour certaines pages
$protected_pages = ['dashboard', 'profile', 'reservations'];
if (in_array($page, $protected_pages) && !isset($_SESSION['user_id'])) {
    header('Location: ' . BASE_URL . '/login');
    exit;
}

// Inclusion des vues
// switch($page) {
//     case 'home':
//         require_once 'views/shared/home.php';
//         break;
//     case 'login':
//         require_once 'views/auth/login.php';
//         break;
//     // Autres routes...
//     default:
//         require_once 'views/shared/404.php';
// };
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <title>Cabinet d'Avocats - Accueil</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Roboto:wght@300;400;500&display=swap" rel="stylesheet">
    <!-- Icones FontAwesome -->
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="assets/css/style.css">
    
</head>
<body>

   


</body>
</html>