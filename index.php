<?php

require_once __DIR__ . '/resources/data.php';
require_once __DIR__ . '/header.php';
?>

<main>
    <h1>Some Teams</h1>
    <p>Discover the football teams participating in the competition.</p>

    <section class="teams">
        <?php foreach ($teams as $name => $team): ?>
            <article class="team">
                <h2><?= htmlspecialchars($name) ?></h2>
                <p>League: <?= htmlspecialchars($team['league']) ?></p>
                <p>City: <?= htmlspecialchars($team['city']) ?></p>

                <?php if (!empty($team['url'])): ?>
                    <p>
                        <a
                            href="<?= htmlspecialchars($team['url']) ?>"
                            target="_blank"
                            rel="noopener noreferrer"
                        >
                            Visit team website
                        </a>
                    </p>
                <?php endif; ?>
            </article>
        <?php endforeach; ?>
    </section>
</main>

</body>
</html>