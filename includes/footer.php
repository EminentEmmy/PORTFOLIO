<footer class="main-footer">
    <div class="container">
        <div class="footer-content">
            <div class="footer-section">
                <h3>Get In Touch</h3>
                <p>Email: <a href="mailto:<?php echo EMAIL_TO; ?>"><?php echo EMAIL_TO; ?></a></p>
                <p>Phone: <?php echo PHONE; ?></p>
                <p>Location: <?php echo LOCATION; ?></p>
            </div>
            
            <div class="footer-section">
                <h3>Quick Links</h3>
                <ul>
                    <li><a href="<?php echo SITE_URL; ?>/about">About</a></li>
                    <li><a href="<?php echo SITE_URL; ?>/portfolio">Portfolio</a></li>
                    <li><a href="<?php echo SITE_URL; ?>/services">Services</a></li>
                    <li><a href="<?php echo SITE_URL; ?>/contact">Contact</a></li>
                </ul>
            </div>
            
            <div class="footer-section">
                <h3>Follow Me</h3>
                <div class="social-links">
                    <a href="<?php echo GITHUB_URL; ?>" target="_blank">GitHub</a>
                    <a href="<?php echo LINKEDIN_URL; ?>" target="_blank">LinkedIn</a>
                    <a href="<?php echo TWITTER_URL; ?>" target="_blank">Twitter</a>
                </div>
            </div>
        </div>
        
        <div class="footer-bottom">
            <p>&copy; <?php echo date('Y'); ?> <?php echo SITE_NAME; ?>. All rights reserved.</p>
        </div>
    </div>
</footer>