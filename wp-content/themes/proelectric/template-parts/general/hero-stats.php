<?php
    $stats = $args['stats'];
    if (empty($stats)) return;
?>

<div class="hero-stats">
    <div class="container">
        <div class="hero-stats-row d-flex justify-content-between">
            <?php foreach ($stats as $stat) : ?>
                <div class="hero-stat-item d-flex align-items-center gap-16"><div class="stat-num"><?= $stat['stat_num'] ?><span class="unit"><?= $stat['unit'] ?></span></div><div class="stat-label"><?= $stat['stat_label'] ?></div></div>
            <?php endforeach; ?>
        </div>
    </div>
</div>