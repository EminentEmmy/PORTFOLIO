<?php
// includes/functions.php - Fixed version without database requirement

// Only require database if you're actually using it
// require_once 'config/database.php'; // COMMENTED OUT - we'll use JSON files instead

function sanitizeInput($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

function validateEmail($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}

function getFeaturedProjects($limit = 3) {
    // Try to get projects from JSON file first
    $projects = getFeaturedProjectsFromJSON($limit);
    
    // If no projects in JSON, return sample data as fallback
    if (empty($projects)) {
        return [
            [
                'title' => 'E-commerce Fashion Store',
                'description' => 'Custom Shopify store with advanced features',
                'technologies' => ['Shopify', 'JavaScript', 'CSS3'],
                'image' => 'project1.jpg',
                'live_url' => '#',
                'github_url' => '#',
                'featured' => true
            ],
            [
                'title' => 'React Task Management',
                'description' => 'Full-stack task management application',
                'technologies' => ['React.js', 'PHP', 'MySQL'],
                'image' => 'project2.jpg',
                'live_url' => '#',
                'github_url' => '#',
                'featured' => true
            ],
            [
                'title' => 'Multi-vendor Marketplace',
                'description' => 'Shopify Plus multi-vendor platform',
                'technologies' => ['Shopify Plus', 'JavaScript'],
                'image' => 'project3.jpg',
                'live_url' => '#',
                'github_url' => '#',
                'featured' => true
            ]
        ];
    }
    
    return array_slice($projects, 0, $limit);
}

function getFeaturedProjectsFromJSON($limit = 3) {
    // Determine the correct path to data directory
    $basePath = getBasePath();
    $jsonFile = $basePath . 'data/projects.json';
    
    if (file_exists($jsonFile)) {
        $data = json_decode(file_get_contents($jsonFile), true);
        if (isset($data['projects'])) {
            $featured = array_filter($data['projects'], function($project) {
                return isset($project['featured']) && $project['featured'] === true;
            });
            return array_slice($featured, 0, $limit);
        }
    }
    return [];
}

function getAllProjects() {
    // Determine the correct path to data directory
    $basePath = getBasePath();
    $jsonFile = $basePath . 'data/projects.json';
    
    if (file_exists($jsonFile)) {
        $data = json_decode(file_get_contents($jsonFile), true);
        if (isset($data['projects'])) {
            return $data['projects'];
        }
    }
    return [];
}

function getAllSkills() {
    // Determine the correct path to data directory
    $basePath = getBasePath();
    $jsonFile = $basePath . 'data/skills.json';
    
    if (file_exists($jsonFile)) {
        $data = json_decode(file_get_contents($jsonFile), true);
        if (isset($data['skills'])) {
            return $data['skills'];
        }
    }
    return [];
}

function sendContactEmail($name, $email, $subject, $message) {
    $to = EMAIL_TO;
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
    
    $body = "
    <html>
    <body>
        <h2>New Contact Form Submission</h2>
        <p><strong>Name:</strong> $name</p>
        <p><strong>Email:</strong> $email</p>
        <p><strong>Subject:</strong> $subject</p>
        <p><strong>Message:</strong></p>
        <p>$message</p>
    </body>
    </html>
    ";
    
    return mail($to, "Portfolio Contact: $subject", $body, $headers);
}

function generateSlug($string) {
    return strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $string)));
}

// Helper function to get the correct base path for includes
?>                <a href="#contact" class="btn btn-primary">Get in Touch</a>
            </div>
            <div class="hero-image