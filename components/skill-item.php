<div class="skill-item">
    <div class="skill-header">
        <h3 class="skill-name"><?php echo htmlspecialchars($skill['name']); ?></h3>
        <span class="skill-percentage"><?php echo $skill['level']; ?>%</span>
    </div>
    <div class="skill-bar">
        <div class="skill-progress" data-width="<?php echo $skill['level']; ?>%"></div>
    </div>
    <?php if (!empty($skill['description'])): ?>
        <p class="skill-description"><?php echo htmlspecialchars($skill['description']); ?></p>
    <?php endif; ?>
</div>