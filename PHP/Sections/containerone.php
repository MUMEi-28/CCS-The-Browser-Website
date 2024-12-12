<?php
// Assuming $articles contains the fetched data

if (isset($articles) && is_array($articles) && isset($articles[0])): ?>
    <section class="container one" id="pop-out" data-id="<?php echo htmlspecialchars($articles[0]['artID']); ?>">
        <div class="news-item">
            <section class="headline">
                <h2><?php echo htmlspecialchars(substr($articles[0]['artHeadline'], 0, 200)); ?></h2>
            </section>
            <section class="main-news">
                <p>
                    <i><?php echo htmlspecialchars(substr($articles[0]['artDate'], 0, 50)); ?></i> <br><br>
                    <?php echo htmlspecialchars(substr($articles[0]['artContent'], 0, 500)) . "<span class='viewMore'>... View more</span>"; ?>
                </p>
            </section>
        </div>
        <!-- Display the image -->
        <img src="../Images/<?php echo htmlspecialchars($articles[0]['artImgHeader']); ?>" alt="UPLOADED IMAGE">
    </section>
<?php else: ?>
    <div class="errEmpty">
        <h2>No articles available.</h2>
    </div>
    <link rel="stylesheet" href="containerone.css">
<?php endif; ?>