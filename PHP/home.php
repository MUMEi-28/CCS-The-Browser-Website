<?php
include("../LogInRegister/php/config.php");


$sql = "SELECT * FROM articles";
$result = $con->query($sql);
$row = $result->fetch_assoc();
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

    <?php include("header.php") ?>


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
                    <section class="container one" id="pop-out" <?php echo "data-id='$row[artID]'" ?>>
                        <div class="news-item">
                            <section class="headline">

                                <h2>LOREM IPSUM DOLOR VERY VERY LONG HEADLINE</h2>

                            </section>
                            <section class="main-news">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent posuere eget
                                    mauris
                                    vel
                                    convallis.
                                    Sed lectus lacus, bibendum et magna tincidunt, dapibus pulvinar metus.
                                </p>
                            </section>
                        </div>

                        <img src="../Assets/testIMG-Landscape.jpg" alt="Main News Image">
                    </section>
                </section>

                <section class="sub-news">
                    <section class="container two" id="pop-out" data-id="2">
                        <img src="../Assets/testIMG-Landscape.jpg" alt="Main News Image">

                        <div class="news-item">
                            <section class="headline">

                                <h2>LOREM IPSUM DOLOR VERY VERY LONG HEADLINE</h2>

                            </section>
                            <section class="main-news">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent posuere eget
                                    mauris
                                    vel
                                    convallis.
                                    Sed lectus lacus, bibendum et magna tincidunt, dapibus pulvinar metus.
                                </p>
                            </section>
                        </div>
                    </section>
                </section>

            </div>

            <hr>

            <div class="other-main-news">
                <section class="container two" id="pop-out" data-id="2">
                    <img src="../Assets/testIMG-Landscape.jpg" alt="Main News Image">

                    <div class="news-item">
                        <section class="headline">

                            <h2>LOREM IPSUM DOLOR VERY VERY LONG HEADLINE</h2>

                        </section>
                        <section class="main-news">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent posuere eget mauris
                                vel
                                convallis.
                                Sed lectus lacus, bibendum et magna tincidunt, dapibus pulvinar metus.
                            </p>
                        </section>
                    </div>
                </section>

                <section class="container two" id="pop-out" data-id="2">
                    <img src="../Assets/testIMG-Landscape.jpg" alt="Main News Image">

                    <div class="news-item">
                        <section class="headline">

                            <h2>LOREM IPSUM DOLOR VERY VERY LONG HEADLINE</h2>

                        </section>
                        <section class="main-news">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent posuere eget mauris
                                vel
                                convallis.
                                Sed lectus lacus, bibendum et magna tincidunt, dapibus pulvinar metus.
                            </p>
                        </section>
                    </div>
                </section>

                <section class="container two" id="pop-out" data-id="2">
                    <img src="../Assets/testIMG-Landscape.jpg" alt="Main News Image">

                    <div class="news-item">
                        <section class="headline">

                            <h2>LOREM IPSUM DOLOR VERY VERY LONG HEADLINE</h2>

                        </section>
                        <section class="main-news">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent posuere eget mauris
                                vel
                                convallis.
                                Sed lectus lacus, bibendum et magna tincidunt, dapibus pulvinar metus.
                            </p>
                        </section>
                    </div>
                </section>

                <section class="container two" id="pop-out" data-id="2">
                    <img src="../Assets/testIMG-Landscape.jpg" alt="Main News Image">

                    <div class="news-item">
                        <section class="headline">

                            <h2>LOREM IPSUM DOLOR VERY VERY LONG HEADLINE</h2>

                        </section>
                        <section class="main-news">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent posuere eget mauris
                                vel
                                convallis.
                                Sed lectus lacus, bibendum et magna tincidunt, dapibus pulvinar metus.
                            </p>
                        </section>
                    </div>
                </section>
                <div class="other-main-news-no-img">
                    <section class="container two" id="pop-out" data-id="2">

                        <div class="news-item">
                            <section class="headline">

                                <h2>LOREM IPSUM DOLOR VERY VERY LONG HEADLINE</h2>

                            </section>
                            <section class="main-news">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent posuere eget
                                    mauris
                                    vel
                                    convallis.
                                    Sed lectus lacus, bibendum et magna tincidunt, dapibus pulvinar metus.
                                </p>
                            </section>
                        </div>


                    </section>
                    <section class="container two" id="pop-out" data-id="2">
                        <div class="news-item">
                            <section class="headline">

                                <h2>LOREM IPSUM DOLOR VERY VERY LONG HEADLINE</h2>

                            </section>

                            <section class="main-news">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent posuere eget
                                    mauris
                                    vel
                                    convallis.
                                    Sed lectus lacus, bibendum et magna tincidunt, dapibus pulvinar metus.
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
                    <section class="container two" id="pop-out" data-id="2">
                        <div class="news-item">
                            <img src="../Assets/testIMG-Landscape.jpg" alt="Main News Image">
                            <section class="headline">

                                <h2>LOREM IPSUM DOLOR VERY VERY LONG HEADLINE</h2>

                            </section>
                            <section class="main-news">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent posuere eget
                                    mauris
                                    vel
                                    convallis.
                                    Sed lectus lacus, bibendum et magna tincidunt, dapibus pulvinar metus.
                                </p>
                            </section>
                        </div>
                    </section>
                    <section class="container two" id="pop-out" data-id="2">
                        <div class="news-item">
                            <img src="../Assets/testIMG-Landscape.jpg" alt="Main News Image">
                            <section class="headline">

                                <h2>LOREM IPSUM DOLOR VERY VERY LONG HEADLINE</h2>

                            </section>
                            <section class="main-news">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent posuere eget
                                    mauris
                                    vel
                                    convallis.
                                    Sed lectus lacus, bibendum et magna tincidunt, dapibus pulvinar metus.
                                </p>
                            </section>
                        </div>
                    </section>
                </div>
            </div>

            <div class="container two">
                <h2>FEATURE</h2>
                <div class="feature news">
                    <section class="container two" id="pop-out" data-id="2">
                        <div class="news-item">
                            <img src="../Assets/testIMG-Landscape.jpg" alt="Main News Image">
                            <section class="headline">

                                <h2>LOREM IPSUM DOLOR VERY VERY LONG HEADLINE</h2>

                            </section>
                            <section class="main-news">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent posuere eget
                                    mauris
                                    vel
                                    convallis.
                                    Sed lectus lacus, bibendum et magna tincidunt, dapibus pulvinar metus.
                                </p>
                            </section>
                        </div>
                    </section>
                    <section class="container two" id="pop-out" data-id="2">
                        <div class="news-item">
                            <img src="../Assets/testIMG-Landscape.jpg" alt="Main News Image">
                            <section class="headline">

                                <h2>LOREM IPSUM DOLOR VERY VERY LONG HEADLINE</h2>

                            </section>
                            <section class="main-news">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent posuere eget
                                    mauris
                                    vel
                                    convallis.
                                    Sed lectus lacus, bibendum et magna tincidunt, dapibus pulvinar metus.
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
                <section class="container two" id="pop-out" data-id="2">
                    <div class="editorial item">
                        <img src="../Assets/testIMG-Landscape.jpg" alt="Main News Image">
                        <div style="flex: 1;">
                            <section class="headline">
                                <h2>LOREM IPSUM DOLOR VERY VERY LONG HEADLINE</h2>
                            </section>
                            <section class="main-news">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent posuere eget
                                    mauris vel convallis.
                                    Sed lectus lacus, bibendum et magna tincidunt, dapibus pulvinar metus.
                                </p>
                            </section>
                        </div>
                    </div>
                </section>
                <section class="container two" id="pop-out" data-id="2">
                    <div class="editorial item">
                        <img src="../Assets/testIMG-Landscape.jpg" alt="Main News Image">
                        <div style="flex: 1;">
                            <section class="headline">
                                <h2>LOREM IPSUM DOLOR VERY VERY LONG HEADLINE</h2>
                            </section>
                            <section class="main-news">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent posuere eget
                                    mauris vel convallis.
                                    Sed lectus lacus, bibendum et magna tincidunt, dapibus pulvinar metus.
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