<?php
// Set session security settings before starting the session
if (session_status() === PHP_SESSION_NONE) {
    ini_set('session.cookie_httponly', 1);
    ini_set('session.use_only_cookies', 1);
    session_start();
}

// ==================== SITE INFO & AUTO DETECT DOMAIN ====================
define('SITE_NAME', 'Trusty Travel Sri Lanka');
define('SITE_TITLE', 'Trusty Travel Sri Lanka With Sanjeewa');
define('OWNER_NAME', 'A. G. S. Sanjeewa Kumara');

// Auto-detect base URL
$isHttps = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off')
    || (isset($_SERVER['SERVER_PORT']) && $_SERVER['SERVER_PORT'] == 443)
    || (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && strtolower($_SERVER['HTTP_X_FORWARDED_PROTO']) === 'https')
    || (isset($_SERVER['HTTP_X_FORWARDED_SSL']) && strtolower($_SERVER['HTTP_X_FORWARDED_SSL']) === 'on');

$protocol = $isHttps ? 'https://' : 'http://';
$host = isset($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : 'localhost';
$scriptDir = rtrim(dirname($_SERVER['SCRIPT_NAME']), '/\\');

$autoUrl = $protocol . $host .
    ($scriptDir === '/' || $scriptDir === '.' || $scriptDir === '\\' ? '' : $scriptDir);

define('SITE_URL', $autoUrl);


// ==================== DATABASE CONFIGURATION ====================
// Copy this file to config.php and update these values
// according to your local/server database configuration.

define('DB_HOST', 'localhost');
define('DB_USER', 'YOUR_DATABASE_USERNAME');
define('DB_PASS', 'YOUR_DATABASE_PASSWORD');
define('DB_NAME', 'trusty_travel_db');


/**
 * PDO Database Connection Helper
 */
function getDBConnection() {
    static $pdo = null;

    if ($pdo === null) {
        try {
            $dsn = 'mysql:host=' . DB_HOST .
                   ';dbname=' . DB_NAME .
                   ';charset=utf8mb4';

            $options = [
                PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                PDO::ATTR_EMULATE_PREPARES   => false,
            ];

            $pdo = new PDO($dsn, DB_USER, DB_PASS, $options);

        } catch (PDOException $e) {
            error_log('Database Connection Error: ' . $e->getMessage());
            return null;
        }
    }

    return $pdo;
}


// ==================== CONTACT ====================
define('PHONE_1', 'YOUR_PHONE_NUMBER');
define('PHONE_2', 'YOUR_SECOND_PHONE_NUMBER');
define('WHATSAPP', 'YOUR_WHATSAPP_NUMBER');
define('EMAIL', 'YOUR_EMAIL_ADDRESS');


// ==================== SOCIAL MEDIA ====================
define('FACEBOOK', 'YOUR_FACEBOOK_URL');
define('YOUTUBE', 'YOUR_YOUTUBE_URL');
define('TRIPADVISOR', 'YOUR_TRIPADVISOR_URL');
define('GOOGLE_MAPS', 'YOUR_GOOGLE_MAPS_URL');
define('GOOGLE_BUSINESS', 'YOUR_GOOGLE_BUSINESS_URL');
define('GOOGLE_DRIVE', 'YOUR_GOOGLE_DRIVE_URL');


// ==================== ERROR HANDLING ====================
error_reporting(E_ALL);
ini_set('display_errors', 0);
ini_set('log_errors', 1);
ini_set('error_log', __DIR__ . '/error.log');


// ==================== FUNCTIONS ====================
require_once __DIR__ . '/includes/functions.php';


// ==================== PAGE ROUTING ====================
$page = isset($_GET['page']) ? cleanInput($_GET['page']) : 'home';

$allowed_pages = [
    'home',
    'packages',
    'safari',
    'day-tours',
    'transport',
    'gallery',
    'contact'
];

if (!in_array($page, $allowed_pages)) {
    $page = 'home';
}


$page_titles = [
    'home'      => 'Home',
    'packages'  => 'Packages',
    'safari'    => 'Safari Adventures',
    'day-tours' => 'Day Tours',
    'transport' => 'Transport Services',
    'gallery'   => 'Gallery',
    'contact'   => 'Contact Us'
];

$page_title = isset($page_titles[$page])
    ? $page_titles[$page]
    : 'Home';

$currentPage = $page;
?>