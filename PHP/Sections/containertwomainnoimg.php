<section class="container two" id="pop-out" data-id="<?php echo htmlspecialchars($x['artID']); ?>">
    <class="editorial-item">
        <div style="flex: 1;">
            <section class="headline">
                <h2><?php echo htmlspecialchars(substr($x['artHeadline'], 0, 100)); ?></h2>
            </section>
            <section class="main-news">
                <i><?php echo htmlspecialchars(substr($x['artDate'], 0, 50)); ?></i> <br><br>
                <?php echo htmlspecialchars(substr($x['artContent'], 0, 350)) . "<span class='viewMore'>... View more</span>"; ?>
            </section>
        </div>
        </class>
</section>