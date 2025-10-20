<?php
// config/config.php - Updated for your XAMPP setup

// Site Configuration - Based on your test results
define('SITE_URL', 'http://localhost/Newport'); // This matches your XAMPP folder
define('SITE_NAME', 'EMINENT PORTFOLIO'); // Update with your actual name
define('SITE_TAGLINE', 'Shopify Expert & Full-Stack Developer');

// Contact Information - Update with your real information
define('EMAIL_TO', 'eminentemmylery@gmail.com');
define('PHONE', '+234-905-9020-272'); // Update with your Nigerian number
define('LOCATION', 'Lagos, Nigeria');

// Social Media Links - Update with your actual profiles
define('GITHUB_URL', 'https://github.com/EminentEmmy');
define('LINKEDIN_URL', 'https://www.linkedin.com/in/emmanuel-olawale-b3a830231?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app');
define('TWITTER_URL', 'https://twitter.com/EminentEmmy6');

// Email Configuration for Contact Form
define('SMTP_HOST', 'smtp.gmail.com');
define('SMTP_PORT', 587);
define('SMTP_USERNAME', 'eminentemmylery@gmail.com');
define('SMTP_PASSWORD', 'your-app-password'); // Use App Password for Gmail

// Development Settings
define('DEBUG_MODE', true); // Set to false when you go live
define('ERROR_REPORTING', true);

// Fixed error reporting logic
if (ERROR_REPORTING === true) {
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
} else if (ERROR_REPORTING === false) {
    error_reporting(0);
    ini_set('display_errors', 0);
}

// Start session if not already started
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// Helper function to get the correct base path for includes
function getBasePath() {
    // Check if we're in a subdirectory (like pages/)
    $scriptDir = dirname($_SERVER['SCRIPT_NAME']);
    if (strpos($scriptDir, '/pages') !== false) {
        return '../'; // We're in pages directory
    }
    return './'; // We're in root directory
}

// Helper function for navigation URLs
function getNavUrl($page) {
    $basePath = getBasePath();
    if ($page === 'home' || $page === 'index') {
        return $basePath . 'index.php';
    }
    return $basePath . 'pages/' . $page . '.php';
}

// Helper function to check if current page is active
function isActivePage($page) {
    $currentScript = basename($_SERVER['SCRIPT_NAME'], '.php');
    return ($currentScript === $page) ? 'active' : '';
}

?>
