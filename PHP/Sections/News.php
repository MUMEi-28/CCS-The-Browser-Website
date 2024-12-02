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
<?php
    $logoPath = "../Assets/LOGO-AY-24-25/3-WHITE-HEADER-LOGO-BANNER-TYPE.png";

    if (file_exists($logoPath) && !is_dir($logoPath)) {
        echo '<img src="' . htmlspecialchars($logoPath) . '" alt="Banner" class="header-logo">';
    } else {
        echo '<img src="' . htmlspecialchars("Assets/LOGO-AY-24-25/3-WHITE-HEADER-LOGO-BANNER-TYPE.png") . '" alt="Banner" class="header-logo">';
    }
    ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="../CSS/main.css">
    <!--     <link rel="stylesheet" href="../CSS/main.css">
 -->


    <!-- FONTS AWESOME CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

        
</head>


<body>
    <?php include("header.php"); ?>
    <main>

        <section class="headliner">
                    <section class="container one" id="pop-out" data-id="<?php echo htmlspecialchars($articles[0]['artID']); ?>">
                        <div class="news-item">
                            <section class="headline">

                                <h2><?php echo htmlspecialchars(substr($articles[0]['artHeadline'], 0, 100)) . '...'; ?></h2>

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

        <hr>

        <section class="other-main-news">
            <section class="container two">
                <div class="editorial-item">

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
            <section class="container two">
                <div class="editorial-item">

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
            <section class="container two">
                <div class="editorial-item">

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
        </section>

    </main>

    <?php include("footer.php"); ?>
</body>

</html>