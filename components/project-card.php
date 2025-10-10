<div class="project-card">
    <div class="project-image">
        <img src="assets/images/projects/<?php echo $project['image']; ?>" alt="<?php echo $project['title']; ?>">
        <div class="project-overlay">
            <div class="project-buttons">
                <?php if (!empty($project['live_url'])): ?>
                    <a href="<?php echo $project['live_url']; ?>" target="_blank" class="btn btn-sm">Live Demo</a>
                <?php endif; ?>
                <?php if (!empty($project['github_url'])): ?>
                    <a href="<?php echo $project['github_url']; ?>" target="_blank" class="btn btn-sm btn-outline">GitHub</a>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <div class="project-content">
        <h3 class="project-title"><?php echo htmlspecialchars($project['title']); ?></h3>
        <p class="project-description"><?php echo htmlspecialchars($project['description']); ?></p>
        <div class="project-technologies">
            <?php foreach ($project['technologies'] as $tech): ?>
                <span class="tech-tag"><?php echo htmlspecialchars($tech); ?></span>
            <?php endforeach; ?>
        </div>
    </div>
</div>