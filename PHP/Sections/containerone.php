<section class="headliner">
<section class="container one" id="pop-out" data-id="<?php echo htmlspecialchars($articles[0]['artID']); ?>" ?>
        <div class="news-item">
            <section class="headline">
            <h2><?php echo htmlspecialchars(substr($articles[0]['artHeadline'], 0, 200)); ?></h2>
            </section>
            <section class="main-news">
                <p>
                <i><?php echo htmlspecialchars(substr($articles[0]['artDate'], 0, 50)); ?></i> <br><br>
                <?php echo htmlspecialchars(substr($articles[0]['artContent'], 0, 500)) . '...'; ?>
                </p>
            </section>
        </div>
        <img src="../Assets/testIMG-Landscape.jpg" alt="Main News Image">
    </section>
</section>