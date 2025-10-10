<?php 
// IMPORTANT: Load config and functions FIRST before anything else
require_once 'config/config.php';
require_once 'includes/functions.php';

$page_title = "Home - Eminent Portfolio";
$page_description = "Shopify Expert & Full-Stack Developer Portfolio";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $page_title; ?></title>
    <meta name="description" content="<?php echo $page_description; ?>">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <link rel="stylesheet" href="assets/css/components.css">
</head>
<body>
    <?php include 'includes/header.php'; ?>
    
    <!-- Hero Section -->
    <section class="hero" id="home">
        <div class="container">
            <div class="hero-content">
                <h1 class="hero-title">Hi, I'm <span class="highlight">Eminent Ariyo</span></h1>
                <h2 class="hero-subtitle">Shopify Expert & Full-Stack Developer</h2>
                <p class="hero-description">
                    I specialize in building and maintaining high-performance Shopify stores, 
                    creating responsive web applications with React.js, and solving complex 
                    technical challenges.
                </p>
                <div class="hero-buttons">
                    <a href="pages/portfolio.php" class="btn btn-primary">View My Work</a>
                    <a href="pages/contact.php" class="btn btn-secondary">Get In Touch</a>
                </div>
            </div>
            <div class="hero-image">
                <img src="assets/images/ppp.jpg" alt="Profile Picture">
            </div>
        </div>
    </section>

    <!-- Skills Overview -->
    <section class="skills-overview" id="skills-preview">
        <div class="container">
            <h2 class="section-title">Technical Expertise</h2>
            <div class="skills-grid">
                <div class="skill-category">
                    <h3>E-commerce</h3>
                    <ul>
                        <li>Shopify Development</li>
                        <li>Store Optimization</li>
                        <li>Theme Customization</li>
                    </ul>
                </div>
                <div class="skill-category">
                    <h3>Frontend</h3>
                    <ul>
                        <li>React.js</li>
                        <li>JavaScript (ES6+)</li>
                        <li>HTML5 & CSS3</li>
                    </ul>
                </div>
                <div class="skill-category">
                    <h3>Backend</h3>
                    <ul>
                        <li>PHP</li>
                        <li>RESTful APIs</li>
                        <li>Database Design</li>
                    </ul>
                </div>
                <div class="skill-category">
                    <h3>Tools & More</h3>
                    <ul>
                        <li>Git & GitHub</li>
                        <li>Figma</li>
                        <li>Webpack</li>
                    </ul>
                </div>
            </div>
            <div class="text-center">
                <a href="pages/skills.php" class="btn btn-outline">View All Skills</a>
            </div>
        </div>
    </section>

    <!-- Featured Projects -->
    <section class="featured-projects" id="featured-work">
        <div class="container">
            <h2 class="section-title">Featured Projects</h2>
            <div class="projects-grid">
                <?php
                // Get featured projects - NOW this function will work
                $featuredProjects = getFeaturedProjects(3);
                
                // Check if we have projects
                if (!empty($featuredProjects)) {
                    foreach($featuredProjects as $project) {
                        // Include the project card component
                        include 'components/project-card.php';
                    }
                } else {
                    // Show a message if no projects found
                    echo '<p>No featured projects available at the moment.</p>';
                }
                ?>
            </div>
            <div class="text-center">
                <a href="pages/portfolio.php" class="btn btn-primary">View All Projects</a>
            </div>
        </div>
    </section>

    <?php include 'includes/footer.php'; ?>
    
    <script src="assets/js/main.js"></script>
</body>
</html>