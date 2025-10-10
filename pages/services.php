<?php 
require_once '../config/config.php';
$page_title = "Services - What I Offer";
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
        <section class="services-hero">
            <div class="container">
                <h1>Services</h1>
                <p class="lead">Professional development services tailored to your needs</p>
            </div>
        </section>

        <section class="services-content">
            <div class="container">
                <div class="services-grid">
                    <div class="service-card">
                        <div class="service-icon">
                            <svg width="60" height="60" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                                <path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"/>
                            </svg>
                        </div>
                        <h3>Maintenance & Support</h3>
                        <p>Ongoing maintenance, troubleshooting, debugging, and technical support for existing projects and applications.</p>
                        <ul class="service-features">
                            <li>Bug fixes and troubleshooting</li>
                            <li>Performance optimization</li>
                            <li>Security updates</li>
                            <li>Feature enhancements</li>
                            <li>Technical consultation</li>
                        </ul>
                    </div>
                </div>

                <div class="services-cta">
                    <h2>Ready to Start Your Project?</h2>
                    <p>Let's discuss how I can help bring your ideas to life</p>
                    <a href="contact" class="btn btn-primary btn-large">Get In Touch</a>
                </div>
            </div>
        </section>
    </main>

    <?php include '../includes/footer.php'; ?>
    <script src="../assets/js/main.js"></script>
</body>
</html>