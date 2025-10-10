<?php
// Get the base path for navigation
$basePath = getBasePath();
$currentPage = basename($_SERVER['SCRIPT_NAME'], '.php');
?>

<header class="main-header">
    <nav class="navbar">
        <div class="container">
            <div class="nav-brand">
                <a href="<?php echo $basePath; ?>index.php">
                    <h2><?php echo SITE_NAME; ?></h2>
                </a>
            </div>
            
            <div class="nav-menu" id="nav-menu">
                <ul class="nav-list">
                    <li>
                        <a href="<?php echo $basePath; ?>index.php" 
                           class="nav-link <?php echo ($currentPage == 'index') ? 'active' : ''; ?>">
                           Home
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo $basePath; ?>pages/about.php" 
                           class="nav-link <?php echo ($currentPage == 'about') ? 'active' : ''; ?>">
                           About
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo $basePath; ?>pages/portfolio.php" 
                           class="nav-link <?php echo ($currentPage == 'portfolio') ? 'active' : ''; ?>">
                           Portfolio
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo $basePath; ?>pages/skills.php" 
                           class="nav-link <?php echo ($currentPage == 'skills') ? 'active' : ''; ?>">
                           Skills
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo $basePath; ?>pages/services.php" 
                           class="nav-link <?php echo ($currentPage == 'services') ? 'active' : ''; ?>">
                           Services
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo $basePath; ?>pages/contact.php" 
                           class="nav-link <?php echo ($currentPage == 'contact') ? 'active' : ''; ?>">
                           Contact
                        </a>
                    </li>
                </ul>
            </div>
            
            <div class="hamburger" id="hamburger">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </nav>
</header>