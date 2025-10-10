<?php 
require_once '../config/config.php';
require_once '../includes/functions.php';
$page_title = "Skills & Expertise";
$skills = getAllSkills();
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
        <section class="skills-hero">
            <div class="container">
                <h1>Skills & Expertise</h1>
                <p class="lead">My technical skills and professional competencies</p>
            </div>
        </section>

        <section class="skills-content">
            <div class="container">
                <?php foreach($skills as $category => $skillList): ?>
                <div class="skill-category-section">
                    <h2 class="category-title"><?php echo ucfirst($category); ?></h2>
                    <div class="skills-grid">
                        <?php foreach($skillList as $skill): ?>
                        <div class="skill-item">
                            <div class="skill-header">
                                <h3 class="skill-name"><?php echo $skill['name']; ?></h3>
                                <span class="skill-percentage"><?php echo $skill['level']; ?>%</span>
                            </div>
                            <div class="skill-bar">
                                <div class="skill-progress" data-width="<?php echo $skill['level']; ?>%"></div>
                            </div>
                            <p class="skill-description"><?php echo $skill['description']; ?></p>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </section>
    </main>

    <?php include '../includes/footer.php'; ?>
    <script src="../assets/js/main.js"></script>
    <script>
        // Animate skill bars on page load
        document.addEventListener('DOMContentLoaded', function() {
            const skillBars = document.querySelectorAll('.skill-progress');
            skillBars.forEach(bar => {
                const width = bar.dataset.width;
                setTimeout(() => {
                    bar.style.width = width;
                }, 500);
            });
        });
    </script>
</body>
</html>