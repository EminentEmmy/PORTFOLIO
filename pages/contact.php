<?php 
require_once '../config/config.php';
require_once '../includes/functions.php';
$page_title = "Contact Me";

// Handle form submission
$message = '';
$messageType = '';

if ($_POST) {
    $name = sanitizeInput($_POST['name'] ?? '');
    $email = sanitizeInput($_POST['email'] ?? '');
    $subject = sanitizeInput($_POST['subject'] ?? '');
    $messageText = sanitizeInput($_POST['message'] ?? '');
    
    if (empty($name) || empty($email) || empty($subject) || empty($messageText)) {
        $message = 'Please fill in all required fields.';
        $messageType = 'error';
    } elseif (!validateEmail($email)) {
        $message = 'Please enter a valid email address.';
        $messageType = 'error';
    } else {
        if (sendContactEmail($name, $email, $subject, $messageText)) {
            $message = 'Thank you! Your message has been sent successfully.';
            $messageType = 'success';
        } else {
            $message = 'Sorry, there was an error sending your message. Please try again.';
            $messageType = 'error';
        }
    }
}
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
        <section class="contact-hero">
            <div class="container">
                <h1>Contact Me</h1>
                <p class="lead">Let's discuss your next project</p>
            </div>
        </section>

        <section class="contact-content">
            <div class="container">
                <div class="contact-grid">
                    <div class="contact-info">
                        <h2>Get In Touch</h2>
                        <p>I'm always interested in new opportunities and exciting projects. Whether you need help with Shopify development, frontend work, or have questions about my services, feel free to reach out.</p>
                        
                        <div class="contact-details">
                            <div class="contact-item">
                                <h3>Email</h3>
                                <a href="mailto:<?php echo EMAIL_TO; ?>"><?php echo EMAIL_TO; ?></a>
                            </div>
                            
                            <div class="contact-item">
                                <h3>Phone</h3>
                                <a href="tel:<?php echo str_replace([' ', '-', '(', ')'], '', PHONE); ?>"><?php echo PHONE; ?></a>
                            </div>
                            
                            <div class="contact-item">
                                <h3>Location</h3>
                                <p><?php echo LOCATION; ?></p>
                            </div>
                        </div>
                        
                        <div class="social-links">
                            <a href="<?php echo GITHUB_URL; ?>" target="_blank">GitHub</a>
                            <a href="<?php echo LINKEDIN_URL; ?>" target="_blank">LinkedIn</a>
                            <a href="<?php echo TWITTER_URL; ?>" target="_blank">Twitter</a>
                        </div>
                    </div>
                    
                    <div class="contact-form-container">
                        <h2>Send Message</h2>
                        
                        <?php if ($message): ?>
                            <div class="message <?php echo $messageType; ?>">
                                <?php echo $message; ?>
                            </div>
                        <?php endif; ?>
                        
                        <form class="contact-form" method="POST" id="contact-form">
                            <div class="form-row">
                                <div class="form-group">
                                    <label for="name">Name *</label>
                                    <input type="text" id="name" name="name" required value="<?php echo $_POST['name'] ?? ''; ?>">
                                </div>
                                
                                <div class="form-group">
                                    <label for="email">Email *</label>
                                    <input type="email" id="email" name="email" required value="<?php echo $_POST['email'] ?? ''; ?>">
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label for="subject">Subject *</label>
                                <input type="text" id="subject" name="subject" required value="<?php echo $_POST['subject'] ?? ''; ?>">
                            </div>
                            
                            <div class="form-group">
                                <label for="message">Message *</label>
                                <textarea id="message" name="message" rows="6" required><?php echo $_POST['message'] ?? ''; ?></textarea>
                            </div>
                            
                            <button type="submit" class="btn btn-primary">Send Message</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php include '../includes/footer.php'; ?>
    <script src="../assets/js/main.js"></script>
    <script src="../assets/js/contact-form.js"></script>
</body>
</html>