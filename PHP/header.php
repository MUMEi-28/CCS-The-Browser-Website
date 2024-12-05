<header>
    <a href="../LogInRegister/logIn.php" class="user-Account">
        <i class="fa-regular fa-circle-user"></i>
    </a>

    <?php
    session_start();
    ?>

    <?php
    if (isset($_SESSION['id']) && in_array($_SESSION['id'], [1, 2, 3, 4, 5])): ?>
        <button class="PostNews-button PC">Post News</button>
    <?php endif; ?>

    <?php
    if (isset($_SESSION['id'])) {

        echo "<a href='../LogInRegister/PHP/logout.php' >

            <button class='LogOut-button PC'>Log Out</button>

            </a> ";
    }
    ?>

    <!-- MAKE SURE IT ALSO WORKS ON THE INDEX.PHP -->
    <?php
    $logoPath = "../Assets/LOGO-AY-24-25/3-WHITE-HEADER-LOGO-BANNER-TYPE.png";

    if (file_exists($logoPath) && !is_dir($logoPath)) {
        echo '<img src="' . htmlspecialchars($logoPath) . '" alt="Banner" class="header-logo">';
    } else {
        echo '<img src="' . htmlspecialchars("Assets/LOGO-AY-24-25/3-WHITE-HEADER-LOGO-BANNER-TYPE.png") . '" alt="Banner" class="header-logo">';
    }
    ?>

    <nav>
        <ul class="navBar">
            <input type="checkbox" id="check">
            <span class="menu">
                <?php
                $logoPath = "../Assets/LOGO-AY-24-25/4-Black-logo-TB-wo-text.png";

                if (file_exists($logoPath) && !is_dir($logoPath)) {
                    echo '<img src="' . htmlspecialchars($logoPath) . '" alt="Banner" class="navBar-logo">';
                } else {
                    echo '<img src="' . htmlspecialchars("Assets/LOGO-AY-24-25/4-Black-logo-TB-wo-text.png") . '" alt="Banner" class="navBar-logo">';
                }
                ?>
                <li><a href="../PHP/News.php">News</a></li>
                <li><a href="../PHP/Editorial.php">Editorial</a></li>
                <li><a href="../PHP/Feature.php">Feature</a></li>
                <li><a href="../PHP/Sports.php">Sports</a></li>
                <li><a href="../PHP/TSU Marilag 2024.php"><span class="nowrsap">TSU Marilag 2024</span></a></li>
                <li><a href="../PHP/CCS Sportsfest 2024.php"><span class="noswrap">CCS Sportsfest 2024</span></a></li>


                <label for="check" class="close-menu">
                    <i class="fas fa-times"></i>
                </label>

                <div class="button-container">
                    <?php if (isset($_SESSION['id']) && in_array($_SESSION['id'], [1, 2, 3, 4, 5])): ?>
                        <li class="mobile-only">
                            <button class="PostNews-button mobile">Post News</button>
                        </li>
                    <?php endif; ?>

                    <?php if (isset($_SESSION['id'])): ?>
                        <li class="mobile-only">
                            <a href="../LogInRegister/PHP/logout.php">
                                <button class="LogOut-button mobile">Log Out</button>
                            </a>
                        </li>
                    <?php endif; ?>
                </div>
            </span>

            <label for="check" class="open-menu">
                <i class="fas fa-bars"></i>
            </label>
        </ul>
    </nav>

</header>