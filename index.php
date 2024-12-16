<?php
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
switch($page) {
    case 'home':
        require_once 'views/shared/home.php';
        break;
    case 'login':
        require_once 'views/auth/login.php';
        break;
    // Autres routes...
    default:
        require_once 'views/shared/404.php';
}