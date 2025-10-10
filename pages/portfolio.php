<?php 
require_once '../config/config.php';
require_once '../includes/functions.php';
$page_title = "Portfolio - My Work";
$projects = getAllProjects();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $page_title; ?></title>
    <link rel="stylesheet" href="../assets/css/main.css">
    <link rel="stylesheet" href="../assets/css/responsive.css">
    <link rel="stylesheet" href="../assets/css/components.css">
</head>
<body>
    <?php include '../includes/header.php'; ?>
    
    <main class="main-content">
        <section class="portfolio-hero">
            <div class="container">
                <h1>My Portfolio</h1>
                <p class="lead">A showcase of my recent projects and development work</p>
            </div>
        </section>

        <section class="portfolio-filters">
            <div class="container">
                <div class="filter-buttons">
                    <button class="filter-btn active" data-filter="all">All Projects</button>
                    <button class="filter-btn" data-filter="shopify">Shopify</button>
                    <button class="filter-btn" data-filter="react">React.js</button>
                    <button class="filter-btn" data-filter="php">PHP</button>
                    <button class="filter-btn" data-filter="frontend">Frontend</button>
                </div>
            </div>
        </section>

        <section class="portfolio-grid-section">
            <div class="container">
                <div class="portfolio-grid" id="portfolio-grid">
                    <?php foreach($projects as $project): ?>
                        <div class="portfolio-item" data-category="<?php echo implode(' ', $project['categories'] ?? ['all']); ?>">
                            <div class="project-card">
                                <div class="project-image">
                                    <img src="../assets/images/projects/<?php echo $project['image']; ?>" alt="<?php echo $project['title']; ?>">
                                    <div class="project-overlay">
                                        <div class="project-buttons">
                                            <?php if(!empty($project['live_url'])): ?>
                                                <a href="<?php echo $project['live_url']; ?>" target="_blank" class="btn btn-sm">Live Demo</a>
                                            <?php endif; ?>
                                            <?php if(!empty($project['github_url'])): ?>
                                                <a href="<?php echo $project['github_url']; ?>" target="_blank" class="btn btn-sm btn-outline">GitHub</a>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="project-content">
                                    <h3 class="project-title"><?php echo $project['title']; ?></h3>
                                    <p class="project-description"><?php echo $project['description']; ?></p>
                                    <div class="project-technologies">
                                        <?php foreach($project['technologies'] as $tech): ?>
                                            <span class="tech-tag"><?php echo $tech; ?></span>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
    </main>

    <?php include '../includes/footer.php'; ?>
    <script src="../assets/js/main.js"></script>
    <script src="../assets/js/portfolio.js"></script>
</body>
</html>