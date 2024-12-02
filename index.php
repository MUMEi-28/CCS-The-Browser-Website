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
} $news = array_reverse($news);

while ($row = $resultf->fetch_assoc()) {
    $feature[] = $row;
} $feature = array_reverse($feature);

while ($row = $results->fetch_assoc()) {
    $sports[] = $row;
} $sports = array_reverse($sports);

while ($row = $resulte->fetch_assoc()) {
    $editorial[] = $row;
} $editorial = array_reverse($editorial);
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
        if (isset($_SESSION['id'])) {

            echo "<a href='LogInRegister/PHP/logout.php' >

            <button class='LogOut-button'>Log Out</button>

            </a> ";
        }
        ?>

        <?php

        if (isset($_SESSION['id']) && in_array($_SESSION['id'], [1, 2, 3, 4, 5])): ?>
            <button class="PostNews-button">Post News</button>
        <?php endif; ?>

        <img src="Assets/LOGO-AY-24-25/3-WHITE-HEADER-LOGO-BANNER-TYPE.png" alt="Banner" class="header-logo">

        <nav>
            <ul class="navBar">
                <input type="checkbox" id="check">

                <span class="menu">
                    <li><a href="PHP/News.php">News</a></li>
                    <li><a href="#">Editorial</a></li>
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
                <section class="headliner">
                    <section class="container one" id="pop-out" data-id="<?php echo htmlspecialchars($articles[0]['artID']); ?>">
                        <div class="news-item">
                            <section class="headline">

                                <h2><?php echo htmlspecialchars(substr($articles[0]['artHeadline'], 0, 20)) . '...'; ?></h2>

                            </section>
                            <section class="main-news">
                                <p>
                                    <?php echo htmlspecialchars(substr($articles[0]['artContent'], 0, 150)) . '...'; ?>
                                </p>
                            </section>
                        </div>

                        <img src="Images/testIMG-Landscape.jpg" alt="Main News Image">
                    </section>
                </section>

                <section class="sub-news">
                    <section class="container two" id="pop-out" data-id="<?php echo htmlspecialchars($articles[1]['artID']); ?>" ?>
                        <img src="Images/testIMG-Landscape.jpg" alt="Main News Image">

                        <div class="news-item">
                            <section class="headline">

                                <h2><?php echo htmlspecialchars(substr($articles[1]['artHeadline'], 0, 20)) . '...'; ?></h2>

                            </section>
                            <section class="main-news">
                                <p>
                                    <?php echo htmlspecialchars(substr($articles[1]['artContent'], 0, 150)) . '...'; ?>
                                </p>
                            </section>
                    </section>
            </div>
            </section>
            </section>

        </div>

        <hr>

        <div class="other-main-news">
            <?php
                foreach(array_slice($news, 1, 4) as $x) {
                    include("PHP/Sections/containertwo.php");
                }
            ?>


            <div class="other-main-news-no-img">
                <section class="container two" id="pop-out" data-id="<?php echo htmlspecialchars($news[6]['artID']); ?>">
                    <div class="news-item">
                        <section class="headline">
                            <h2><?php echo htmlspecialchars(substr($news[6]['artHeadline'], 0, 20)) . '...'; ?></h2>
                        </section>
                        <section class="main-news">
                            <p>
                                <?php echo htmlspecialchars(substr($news[6]['artContent'], 0, 150)) . '...'; ?>
                            </p>
                        </section>
                    </div>
                </section>

                <section class="container two" id="pop-out" data-id="<?php echo htmlspecialchars($news[7]['artID']); ?>">
                    <div class="news-item">
                        <section class="headline">
                            <h2><?php echo htmlspecialchars(substr($news[7]['artHeadline'], 0, 20)) . '...'; ?></h2>
                        </section>
                        <section class="main-news">
                            <p>
                                <?php echo htmlspecialchars(substr($news[7]['artContent'], 0, 150)) . '...'; ?>
                            </p>
                        </section>
                    </div>
                </section>
            </div>
            </div>
        </div>
        <hr>
        <section class="card-container">
            <div class="card" id="pop-out" data-id="2">
                <h2>CCS SPORTSFEST 2024</h2>
            </div>

            <div class="card" id="pop-out" data-id="2">
                <h2>TSU MARILAG 2024</h2>
            </div>
        </section>

        <div class="other-news">
            <div class="container two">
                <h2>SPORTS</h2>
                <div class="sports news">
                    <section class="container two" id="pop-out" data-id="<?php echo htmlspecialchars($sports[0]['artID']); ?>">
                        <div class="news-item">
                            <img src="Images/testIMG-Landscape.jpg" alt="Main News Image">
                            <section class="headline">

                                <h2><?php echo htmlspecialchars(substr($sports[0]['artHeadline'], 0, 20)) . '...'; ?></h2>

                            </section>
                            <section class="main-news">
                                <p>
                                    <?php echo htmlspecialchars(substr($sports[0]['artContent'], 0, 150)) . '...'; ?>
                                </p>
                            </section>
                        </div>
                    </section>
                    <section class="container two" id="pop-out" data-id="<?php echo htmlspecialchars($sports[1]['artID']); ?>">
                        <div class="news-item">
                            <img src="Images/testIMG-Landscape.jpg" alt="Main News Image">
                            <section class="headline">

                                <h2><?php echo htmlspecialchars(substr($sports[1]['artHeadline'], 0, 20)) . '...'; ?></h2>

                            </section>
                            <section class="main-news">
                                <p>
                                    <?php echo htmlspecialchars(substr($sports[1]['artContent'], 0, 150)) . '...'; ?>
                                </p>
                            </section>
                        </div>
                    </section>
                </div>
            </div>

            <div class="container two">
                <h2>FEATURE</h2>
                <div class="feature news">
                    <section class="container two" id="pop-out" data-id="<?php echo htmlspecialchars($feature[0]['artID']); ?>">
                        <div class="news-item">
                            <img src="Images/testIMG-Landscape.jpg" alt="Main News Image">
                            <section class="headline">

                                <h2><?php echo htmlspecialchars(substr($feature[0]['artHeadline'], 0, 20)) . '...'; ?></h2>

                            </section>
                            <section class="main-news">
                                <p>
                                    <?php echo htmlspecialchars(substr($feature[0]['artContent'], 0, 150)) . '...'; ?>
                                </p>
                            </section>
                        </div>
                    </section>
                    <section class="container two" id="pop-out" data-id="<?php echo htmlspecialchars($feature[1]['artID']); ?>">
                        <div class="news-item">
                            <img src="Images/testIMG-Landscape.jpg" alt="Main News Image">
                            <section class="headline">

                                <h2><?php echo htmlspecialchars(substr($feature[1]['artHeadline'], 0, 20)) . '...'; ?></h2>

                            </section>
                            <section class="main-news">
                                <p>
                                    <?php echo htmlspecialchars(substr($feature[1]['artContent'], 0, 150)) . '...'; ?>
                                </p>
                            </section>
                        </div>
                    </section>
                </div>
            </div>
        </div>


        <div class="container two">
            <h2>EDITORIAL</h2>
            <hr>
            <div class="editorial news">
                <section class="container two" id="pop-out" data-id="<?php echo htmlspecialchars($editorial[0]['artID']); ?>">
                    <div class="editorial item">
                        <img src="Images/testIMG-Landscape.jpg" alt="Main News Image">
                        <div style="flex: 1;">
                            <section class="headline">
                                <h2><?php echo htmlspecialchars(substr($editorial[0]['artHeadline'], 0, 20)) . '...'; ?></h2>
                            </section>
                            <section class="main-news">
                                <p>
                                    <?php echo htmlspecialchars(substr($editorial[0]['artContent'], 0, 150)) . '...'; ?>
                                </p>
                            </section>
                        </div>
                    </div>
                </section>
                <section class="container two" id="pop-out" data-id="<?php echo htmlspecialchars($editorial[1]['artID']); ?>">
                    <div class="editorial item">
                        <img src="Images/testIMG-Landscape.jpg" alt="Main News Image">
                        <div style="flex: 1;">
                            <section class="headline">
                                <h2><?php echo htmlspecialchars(substr($editorial[1]['artHeadline'], 0, 20)) . '...'; ?></h2>
                            </section>
                            <section class="main-news">
                                <p>
                                    <?php echo htmlspecialchars(substr($editorial[1]['artContent'], 0, 150)) . '...'; ?>
                                </p>
                            </section>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </main>

    <?php include("PHP/footer.php") ?>
</body>

</html>