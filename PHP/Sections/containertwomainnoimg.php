<section class="container two" id="pop-out" data-id="<?php echo htmlspecialchars($x['artID']); ?>">
    <div class="news-item">
        <section class="headline">
            <h2><?php echo htmlspecialchars(substr($x['artHeadline'], 0, 20)) . '...'; ?></h2>
        </section>
        <section class="main-news">
            <p>
                <?php echo htmlspecialchars(substr($x['artContent'], 0, 150)) . '...'; ?>
            </p>
        </section>
    </div>
</section>