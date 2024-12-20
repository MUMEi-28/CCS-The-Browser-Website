<?php
session_start();

include("LogInRegister/php/config.php");

// Get the database || USED TO MAKE SURE WHICH ARTICLE ID THE SITE WILL GO TO
$sqlnews = "SELECT * FROM articles WHERE artType='News'";
$resultn = $con->query($sqlnews);

$sqledit = "SELECT * FROM articles WHERE artType='Editorial'";
$resulte = $con->query($sqledit);

$sqlfeat = "SELECT * FROM articles WHERE artType='Feature'";
$resultf = $con->query($sqlfeat);

$sqlspor = "SELECT * FROM articles WHERE artType='Sports'";
$results = $con->query($sqlspor);


/* $row = $result->fetch_assoc();
 */

$row = "";
$news = [];
$editorial = [];
$feature = [];
$sports = [];

// Fetch all articles into the array
while ($row = $resultn->fetch_assoc()) {
    $news[] = $row;
}
$news = array_reverse($news);

while ($row = $resultf->fetch_assoc()) {
    $feature[] = $row;
}
$feature = array_reverse($feature);

while ($row = $results->fetch_assoc()) {
    $sports[] = $row;
}
$sports = array_reverse($sports);

while ($row = $resulte->fetch_assoc()) {
    $editorial[] = $row;
}
$editorial = array_reverse($editorial);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Browser || Homepage</title>

    <!-- FONTS AWESOME CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="CSS/main.css">

    <script src="Javascript/index.js" defer></script>
</head>

<body>

    <header>
        <a href="LogInRegister/logIn.php" class="user-Account">
            <i class="fa-regular fa-circle-user"></i>
        </a>

        <?php
        if (isset($_SESSION['id']) && in_array($_SESSION['id'], [1, 2, 3, 4, 5])): ?>
            <button class="PostNews-button PC">Post News</button>
        <?php endif; ?>

        <?php
        if (isset($_SESSION['id'])) {

            echo "<a href='LogInRegister/php/logout.php' >

            <button class='LogOut-button PC'>Log Out</button>

            </a> ";
        }
        ?>


        <img src="Assets/LOGO-AY-24-25/3-WHITE-HEADER-LOGO-BANNER-TYPE.png" alt="Banner" class="header-logo">

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
                    <li><a href="PHP/News.php">News</a></li>
                    <li><a href="PHP/Editorial.php">Editorial</a></li>
                    <li><a href="PHP/Feature.php">Feature</a></li>
                    <li><a href="PHP/Sports.php">Sports</a></li>
                    <li><a href="PHP/TSU Marilag 2024.php"><span class="noswrap">TSU Marilag 2024</span></a></li>
                    <li><a href="PHP/CCS Sportsfest 2024.php"><span class="noswrap">CCS Sportsfest 2024</span></a></li>

                    <div class="button-container">
                        <?php if (isset($_SESSION['id']) && in_array($_SESSION['id'], [1, 2, 3, 4, 5])): ?>
                            <li class="mobile-only">
                                <span class="nowrap">
                                    <button class="PostNews-button mobile">Post News</button>
                                </span>
                            </li>
                        <?php endif; ?>

                        <?php if (isset($_SESSION['id'])): ?>
                            <li class="mobile-only">
                                <span class="nowrap">
                                    <a href="LogInRegister/php/logout.php">
                                        <button class="LogOut-button mobile">Log Out</button>
                                    </a>
                                </span>
                            </li>
                        <?php endif; ?>
                    </div>

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

    <!-- PANG DEBUG LANG ETO -->
    <?php
    if (isset($_SESSION['id'])) {
        echo "<script defer>
            console.log('Logged in user ID: " . addslashes($_SESSION['id']) . "'); 
          </script>";
    } else {
        echo "<script defer>
            console.log('No user is logged in.');
          </script>";
    }
    ?>

    <main>

        <section class="main-header">
            <h1>NEWS</h1>
        </section>
        <hr>
        <div class="main-news">
            <div class="news">
                <?php if (isset($news[0]['artID']) && !empty($news[0]['artID'])): ?>
                    <!-- Main News Section -->
                    <section class="container one" id="pop-out" data-id="<?php echo htmlspecialchars($news[0]['artID']); ?>">
                        <div class="news-item">
                            <section class="headline">
                                <?php
                                if (!empty($news[0]['artHeadline'])) {
                                    echo htmlspecialchars(substr($news[0]['artHeadline'], 0, 150)) . '...';
                                } else {
                                    echo "<h1>There is no news yet</h1>";
                                }
                                ?>
                            </section>
                            <section class="main-news">
                                <p>
                                    <?php if (isset($news[0]['artDate']) && !empty($news[0]['artDate'])): ?>
                                        <i>
                                            <?php echo htmlspecialchars(substr($news[0]['artDate'], 0, 150)); ?> <br><br>
                                        </i>
                                    <?php endif; ?>

                                    <?php
                                    if (!empty($news[0]['artContent'])) {
                                        echo htmlspecialchars(substr($news[0]['artContent'], 0, 150)) . '...';
                                    }
                                    ?>
                                </p>
                            </section>
                        </div>

                        <img src="Images/<?php echo htmlspecialchars($news[0]['artImgHeader']); ?>" alt="UPLOADED IMAGE">

                        <div class="layer">
                            <h3>View More</h3>
                        </div>
                    </section>
                <?php else: ?>
                    <h1 class="no-news-yet">There is no news yet</h1>
                <?php endif; ?>

                <?php if (isset($news[1]['artID']) && !empty($news[1]['artID'])): ?>
                    <!-- Sub News Section -->
                    <section class="sub-news">
                        <section class="container two" id="pop-out" data-id="<?php echo htmlspecialchars($news[1]['artID']); ?>">
                            <img src="Images/<?php echo htmlspecialchars($news[1]['artImgHeader']); ?>" alt="UPLOADED IMAGE">

                            <div class="news-item">
                                <section class="headline">
                                    <h2><?php echo htmlspecialchars(substr($news[1]['artHeadline'], 0, 100)); ?></h2>
                                </section>
                                <section class="main-news">
                                    <p>
                                        <?php if (!empty($news[1]['artDate'])): ?>
                                            <i><?php echo htmlspecialchars(substr($news[1]['artDate'], 0, 150)); ?> <br><br></i>
                                        <?php endif; ?>

                                        <?php
                                        if (!empty($news[1]['artContent'])) {
                                            echo htmlspecialchars(substr($news[1]['artContent'], 0, 150)) . '...';
                                        }
                                        ?>
                                    </p>
                                </section>

                                <div class="layer">
                                    <h3>View More</h3>
                                </div>
                            </div>
                        </section>
                    </section>
                <?php endif; ?>
            </div>
        </div>


        </div>

        <hr>

        <div class="other-main-news">
            <?php
            foreach (array_slice($news, 2, 4) as $x) {
                include("PHP/Sections/containertwomain.php");
            }

            foreach (array_slice($news, 6, 2) as $x) {
                include("PHP/Sections/containertwomainnoimg.php");
            }
            ?>
        </div>
        </div>
        <hr>
        <section class="card-container">
            <div class="card sportFest" id="pop-out" data-id="2">
                <h2>CCS SPORTSFEST 2024</h2>
            </div>

            <div class="card marilag" id="pop-out" data-id="2">
                <h2>TSU MARILAG 2024</h2>
            </div>
        </section>

        <div class="other-news">
            <div class="container three">
                <h2>SPORTS</h2>
                <div class="sports news">
                    <?php if (!empty($sports)): ?>
                        <?php foreach (array_slice($sports, 0, 2) as $x): ?>
                            <?php include("PHP/Sections/containertwomain.php"); ?>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <h1 class="no-news-yet">There is no news yet</h1>
                    <?php endif; ?>
                </div>

            </div>

            <div class="container four">
                <h2>FEATURE</h2>
                <div class="feature news">
                    <?php if (!empty($feature)): ?>
                        <?php foreach (array_slice($feature, 0, 2) as $x): ?>
                            <?php include("PHP/Sections/containertwomain.php"); ?>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <h1 class="no-news-yet">There is no news yet</h1>
                    <?php endif; ?>
                </div>

            </div>
        </div>


        <div class="container two">
            <h2>EDITORIAL</h2>
            <hr>
            <div class="editorial news">
                <?php if (!empty($editorial)): ?>
                    <?php foreach (array_slice($editorial, 0, 2) as $x): ?>
                        <?php include("PHP/Sections/containertwomain.php"); ?>
                    <?php endforeach; ?>
                <?php else: ?>
                    <h1 class="no-news-yet">There is no news yet</h1>
                <?php endif; ?>
            </div>

        </div>
    </main>

    <?php include("PHP/footer.php") ?>
</body>

</html>