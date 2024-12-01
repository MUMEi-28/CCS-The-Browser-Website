<?php
include("../LogInRegister/php/config.php");


// Get the database || USED TO MAKE SURE WHICH ARTICLE ID THE SITE WILL GO TO
$sql = "SELECT * FROM articles";
$result = $con->query($sql);
/* $row = $result->fetch_assoc();
 */

$row = "";
$articles = [];

// Fetch all articles into the array
while ($row = $result->fetch_assoc()) {
    $articles[] = $row;
}

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

    <link rel="stylesheet" href="../CSS/main.css">

    <script src="../Javascript/main.js" defer></script>
</head>

<body>

    <?php include("header.php"); ?>

    <!-- PANG DEBUG LANG ETO -->
    <!--     <?php echo htmlspecialchars($articles[0]['artHeadline']); ?>
    <?php echo htmlspecialchars($articles[0]['artID']); ?>
 -->


    <!-- PANG DEBUG LANG ETO -->
    <?php
    if (isset($_SESSION['id'])) {
        echo "<script defer>
            console.log('Logged in user ID: " . addslashes($_SESSION['id']) . "'); 
          </script>";
    } else {
        echo "<script defer>
            alert('No user is logged in.');
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

                        <img src="../Assets/testIMG-Landscape.jpg" alt="Main News Image">
                    </section>
                </section>

                <section class="sub-news">
                    <section class="container two" id="pop-out" data-id="<?php echo htmlspecialchars($articles[1]['artID']); ?>" ?>>
                        <img src="../Assets/testIMG-Landscape.jpg" alt="Main News Image">

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
            <section class="container two" id="pop-out" data-id="<?php echo htmlspecialchars($articles[2]['artID']); ?>">
                <img src="../Assets/testIMG-Landscape.jpg" alt="Main News Image">

                <div class="news-item">
                    <section class="headline">

                        <h2><?php echo htmlspecialchars(substr($articles[2]['artHeadline'], 0, 20)) . '...'; ?></h2>

                    </section>
                    <section class="main-news">
                        <p>
                            <?php echo htmlspecialchars(substr($articles[2]['artContent'], 0, 150)) . '...'; ?>
                        </p>
                    </section>
                </div>
            </section>

            <section class="container two" id="pop-out" data-id="<?php echo htmlspecialchars($articles[3]['artID']); ?>">
                <img src="../Assets/testIMG-Landscape.jpg" alt="Main News Image">

                <div class="news-item">
                    <section class="headline">

                        <h2><?php echo htmlspecialchars(substr($articles[3]['artHeadline'], 0, 20)) . '...'; ?></h2>

                    </section>
                    <section class="main-news">
                        <p>
                            <?php echo htmlspecialchars(substr($articles[3]['artContent'], 0, 150)) . '...'; ?>
                        </p>
                    </section>
                </div>
            </section>

            <section class="container two" id="pop-out" data-id="<?php echo htmlspecialchars($articles[4]['artID']); ?>">
                <img src="../Assets/testIMG-Landscape.jpg" alt="Main News Image">

                <div class="news-item">
                    <section class="headline">

                        <h2><?php echo htmlspecialchars(substr($articles[4]['artHeadline'], 0, 20)) . '...'; ?></h2>

                    </section>
                    <section class="main-news">
                        <p>
                            <?php echo htmlspecialchars(substr($articles[4]['artContent'], 0, 150)) . '...'; ?>
                        </p>
                    </section>
                </div>
            </section>

            <section class="container two" id="pop-out" data-id="<?php echo htmlspecialchars($articles[5]['artID']); ?>">
                <img src="../Assets/testIMG-Landscape.jpg" alt="Main News Image">

                <div class="news-item">
                    <section class="headline">

                        <h2><?php echo htmlspecialchars(substr($articles[5]['artHeadline'], 0, 20)) . '...'; ?></h2>

                    </section>
                    <section class="main-news">
                        <p>
                            <?php echo htmlspecialchars(substr($articles[5]['artContent'], 0, 150)) . '...'; ?>
                        </p>
                    </section>
                </div>
            </section>
            <div class="other-main-news-no-img">
                <section class="container two" id="pop-out" data-id="<?php echo htmlspecialchars($articles[6]['artID']); ?>">

                    <div class="news-item">
                        <section class="headline">

                            <h2><?php echo htmlspecialchars(substr($articles[6]['artHeadline'], 0, 20)) . '...'; ?></h2>

                        </section>
                        <section class="main-news">
                            <p>
                                <?php echo htmlspecialchars(substr($articles[6]['artContent'], 0, 150)) . '...'; ?>
                            </p>
                        </section>
                    </div>


                </section>
                <section class="container two" id="pop-out" data-id="<?php echo htmlspecialchars($articles[7]['artID']); ?>">
                    <div class="news-item">
                        <section class="headline">

                            <h2><?php echo htmlspecialchars(substr($articles[7]['artHeadline'], 0, 20)) . '...'; ?></h2>

                        </section>

                        <section class="main-news">
                            <p>
                                <?php echo htmlspecialchars(substr($articles[7]['artContent'], 0, 150)) . '...'; ?>
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
                    <section class="container two" id="pop-out" data-id="<?php echo htmlspecialchars($articles[8]['artID']); ?>">
                        <div class="news-item">
                            <img src="../Assets/testIMG-Landscape.jpg" alt="Main News Image">
                            <section class="headline">

                                <h2><?php echo htmlspecialchars(substr($articles[8]['artHeadline'], 0, 20)) . '...'; ?></h2>

                            </section>
                            <section class="main-news">
                                <p>
                                    <?php echo htmlspecialchars(substr($articles[8]['artContent'], 0, 150)) . '...'; ?>
                                </p>
                            </section>
                        </div>
                    </section>
                    <section class="container two" id="pop-out" data-id="<?php echo htmlspecialchars($articles[9]['artID']); ?>">
                        <div class="news-item">
                            <img src="../Assets/testIMG-Landscape.jpg" alt="Main News Image">
                            <section class="headline">

                                <h2><?php echo htmlspecialchars(substr($articles[9]['artHeadline'], 0, 20)) . '...'; ?></h2>

                            </section>
                            <section class="main-news">
                                <p>
                                    <?php echo htmlspecialchars(substr($articles[9]['artContent'], 0, 150)) . '...'; ?>
                                </p>
                            </section>
                        </div>
                    </section>
                </div>
            </div>

            <div class="container two">
                <h2>FEATURE</h2>
                <div class="feature news">
                    <section class="container two" id="pop-out" data-id="<?php echo htmlspecialchars($articles[10]['artID']); ?>">
                        <div class="news-item">
                            <img src="../Assets/testIMG-Landscape.jpg" alt="Main News Image">
                            <section class="headline">

                                <h2><?php echo htmlspecialchars(substr($articles[10]['artHeadline'], 0, 20)) . '...'; ?></h2>

                            </section>
                            <section class="main-news">
                                <p>
                                    <?php echo htmlspecialchars(substr($articles[10]['artContent'], 0, 150)) . '...'; ?>
                                </p>
                            </section>
                        </div>
                    </section>
                    <section class="container two" id="pop-out" data-id="<?php echo htmlspecialchars($articles[1]['artID']); ?>">
                        <div class="news-item">
                            <img src="../Assets/testIMG-Landscape.jpg" alt="Main News Image">
                            <section class="headline">

                                <h2><?php echo htmlspecialchars(substr($articles[1]['artHeadline'], 0, 20)) . '...'; ?></h2>

                            </section>
                            <section class="main-news">
                                <p>
                                    <?php echo htmlspecialchars(substr($articles[1]['artContent'], 0, 150)) . '...'; ?>
                                </p>
                            </section>
                        </div>
                    </section>
                </div>
            </div>
        </div>


        <div class="container two">
            <h2>EDITORIAL</h2>
            <div class="editorial news">
                <section class="container two" id="pop-out" data-id="<?php echo htmlspecialchars($articles[2]['artID']); ?>">
                    <div class="editorial item">
                        <img src="../Assets/testIMG-Landscape.jpg" alt="Main News Image">
                        <div style="flex: 1;">
                            <section class="headline">
                                <h2><?php echo htmlspecialchars(substr($articles[2]['artHeadline'], 0, 20)) . '...'; ?></h2>
                            </section>
                            <section class="main-news">
                                <p>
                                    <?php echo htmlspecialchars(substr($articles[2]['artContent'], 0, 150)) . '...'; ?>
                                </p>
                            </section>
                        </div>
                    </div>
                </section>
                <section class="container two" id="pop-out" data-id="<?php echo htmlspecialchars($articles[3]['artID']); ?>">
                    <div class="editorial item">
                        <img src="../Assets/testIMG-Landscape.jpg" alt="Main News Image">
                        <div style="flex: 1;">
                            <section class="headline">
                                <h2><?php echo htmlspecialchars(substr($articles[3]['artHeadline'], 0, 20)) . '...'; ?></h2>
                            </section>
                            <section class="main-news">
                                <p>
                                    <?php echo htmlspecialchars(substr($articles[3]['artContent'], 0, 150)) . '...'; ?>
                                </p>
                            </section>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </main>

    <?php include("footer.php") ?>
</body>

</html>