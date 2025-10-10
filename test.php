<?php
// test.php - Put this file in your ROOT directory (same level as index.php)

echo "<h1>Navigation Test Page</h1>";
echo "<p>If you can see this page, your basic PHP is working.</p>";

echo "<h2>File Structure Check:</h2>";
echo "<p>Current file location: " . __FILE__ . "</p>";
echo "<p>Document root: " . $_SERVER['DOCUMENT_ROOT'] . "</p>";
echo "<p>Script name: " . $_SERVER['SCRIPT_NAME'] . "</p>";

echo "<h2>Test Navigation Links:</h2>";
echo '<ul>';
echo '<li><a href="index.php">Home (index.php)</a></li>';
echo '<li><a href="pages/about.php">About (pages/about.php)</a></li>';
echo '<li><a href="pages/portfolio.php">Portfolio (pages/portfolio.php)</a></li>';
echo '<li><a href="pages/contact.php">Contact (pages/contact.php)</a></li>';
echo '</ul>';

echo "<h2>Check if files exist:</h2>";
$files_to_check = [
    'index.php',
    'pages/about.php',
    'pages/portfolio.php',
    'pages/skills.php',
    'pages/services.php',
    'pages/contact.php',
    'config/config.php',
    'includes/header.php',
    'includes/footer.php'
];

foreach($files_to_check as $file) {
    $exists = file_exists($file) ? '✅ EXISTS' : '❌ MISSING';
    echo "<p>$file: $exists</p>";
}

echo "<h2>CSS and JS Check:</h2>";
$assets_to_check = [
    'assets/css/main.css',
    'assets/css/responsive.css',
    'assets/css/components.css',
    'assets/js/main.js'
];

foreach($assets_to_check as $asset) {
    $exists = file_exists($asset) ? '✅ EXISTS' : '❌ MISSING';
    echo "<p>$asset: $exists</p>";
}
?>