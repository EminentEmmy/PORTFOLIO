<?php 
require_once '../config/config.php';
$page_title = "About Me - Portfolio";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $page_title; ?></title>
    <link rel="stylesheet" href="../assets/css/main.css">
    <link rel="stylesheet" href="../assets/css/responsive.css">
</head>
<body>
    <?php include '../includes/header.php'; ?>
    
    <main class="main-content">
        <section class="about-hero">
            <div class="container">
                <h1>About Me</h1>
                <p class="lead">Passionate developer with expertise in Shopify and modern web technologies</p>
            </div>
        </section>

        <section class="about-content">
            <div class="container">
                <div class="about-grid">
                    <div class="about-text">
                        <h2>My Journey</h2>
                        <p>
                            As a dedicated Shopify Expert and Full-Stack Developer, I bring a unique blend of 
                            technical expertise and creative problem-solving to every project. My journey began 
                            with a passion for creating seamless e-commerce experiences that drive business growth.
                        </p>
                        
                        <p>
                            With extensive experience in React.js, JavaScript, PHP, and modern web development 
                            tools, I specialize in building high-performance applications that users love. 
                            My expertise spans from troubleshooting complex Shopify stores to developing 
                            custom solutions that meet unique business requirements.
                        </p>

                        <h3>What I Do</h3>
                        <ul>
                            <li>Shopify store development and optimization</li>
                            <li>Custom theme development and troubleshooting</li>
                            <li>React.js application development</li>
                            <li>API integration and backend development</li>
                            <li>Performance optimization and debugging</li>
                            <li>Project planning and team collaboration</li>
                        </ul>

                        <h3>My Approach</h3>
                        <p>
                            I believe in writing clean, maintainable code and following best practices. 
                            Every project is approached with attention to detail, focusing on user experience, 
                            performance, and scalability. I'm committed to continuous learning and staying 
                            updated with the latest technologies and industry trends.
                        </p>
                    </div>
                    
                    <div class="about-sidebar">
                        <div class="about-image">
                            <img src="assets/images/ppp.jpg" alt="Profile Picture">
                        </div>
                        
                        <div class="about-stats">
                            <div class="stat-item">
                                <h4>50+</h4>
                                <p>Projects Completed</p>
                            </div>
                            <div class="stat-item">
                                <h4>3+</h4>
                                <p>Years Experience</p>
                            </div>
                            <div class="stat-item">
                                <h4>25+</h4>
                                <p>Happy Clients</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php include '../includes/footer.php'; ?>
    <script src="../assets/js/main.js"></script>
</body>
</html>