<header>
    <a href="../index.php" class="user-Account">
        <i class="fa-regular fa-circle-user"></i>
    </a>

    <?php
    session_start();

    if (isset($_SESSION['id']) && in_array($_SESSION['id'], [1, 2, 3, 4, 5])): ?>
        <button class="PostNews-button">Post News</button>
    <?php endif; ?>


    <img src="../Assets/LOGO-AY-24-25/3-WHITE-HEADER-LOGO-BANNER-TYPE.png" alt="Banner" class="header-logo">
    <nav>
        <ul class="navBar">
            <input type="checkbox" id="check">

            <span class="menu">
                <li><a href="../../browser/PHP/Sections/News.php">News</a></li>
                <li><a href="../../browser/PHP/articlePage.php">Editorial</a></li>
                <li><a>Feature</a></li>
                <li><a>Sports</a></li>
                <li><a><span class="nowrap">TSU Marilag 2024</span></a></li>
                <li><a><span class="nowrap">CCS Sportsfest 2024</span></a></li>

                <label for="check" class="close-menu">
                    <i class="fas fa-times"></i>
                </label>
            </span>

            <label for="check" class="open-menu">
                <i class="fas fa-bars"></i>
            </label>
        </ul>
    </nav>
</header>