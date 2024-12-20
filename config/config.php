<?php
// interdir l'acces direct au fichier
defined('ALLOW_ACCESS') or die('Accès direct interdit');

// Configuration de la base de donnees
define('DB_HOST', 'localhost');
define('DB_NAME', 'avocat_connect');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_CHARSET', 'utf8mb4');

// Chemins de l'application
define('ROOT_PATH', dirname(__DIR__));
define('BASE_URL', 'http://localhost/avocatconnect');
define('ASSETS_URL', BASE_URL . '/assets');

// Structure MVC
define('CONTROLLERS_PATH', ROOT_PATH . '/controllers');
define('MODELS_PATH', ROOT_PATH . '/models');
define('VIEWS_PATH', ROOT_PATH . '/views');
define('UPLOADS_PATH', ROOT_PATH . '/uploads');

// Configuration de l'application
define('APP_NAME', 'AvocatConnect');
define('APP_VERSION', '1.0.0'); //espérant qu'un jour ce projet soit réel et nécessite d'autres versions ;)
define('DEFAULT_CONTROLLER', 'Home');
define('DEFAULT_ACTION', 'index');
define('DEBUG_MODE', true); // true parce que je suis en phase d'apprentissage, si non et l'application fonctionne bien et hébéergée je vais la rendre FALSE

// Parametres de sécurité
define('SECRET_KEY', bin2hex(random_bytes(32)));
define('SESSION_LIFETIME', 3600); // 1 heure
define('PASSWORD_HASH_COST', 12);

// Paramètres de pagination
define('ITEMS_PER_PAGE', 10);

// Fuseaux horaires
define('DEFAULT_TIMEZONE', 'Europe/Paris');
date_default_timezone_set(DEFAULT_TIMEZONE);

// Messages d'erreur
define('SHOW_ERRORS', true);

// Configuration des sessions
ini_set('session.gc_maxlifetime', SESSION_LIFETIME);
ini_set('session.cookie_lifetime', SESSION_LIFETIME);
session_set_cookie_params(SESSION_LIFETIME);

// Fonctions utilitaires de configuration
function getConfig($key, $default = null) {
    return defined($key) ? constant($key) : $default;
}

function isDebugMode() {
    return getConfig('DEBUG_MODE', false);
}

function getBaseUrl($path = '') {
    return rtrim(BASE_URL, '/') . '/' . ltrim($path, '/');
}