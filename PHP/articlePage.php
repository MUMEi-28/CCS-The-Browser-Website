<?php

// Connect to the database
include("../LogInRegister/php/config.php");

// GET method: Shows the data of the client
if ($_SERVER['REQUEST_METHOD'] == 'GET') {


    // If there is no ID on the URL then return to homepage
    if (!isset($_GET['id'])) {
        header("location: home.php");
        exit; // to stop code from running further
    }

    $id = $_GET["id"];

    // Get the database
    $sql = "SELECT * FROM articles WHERE artId = $id";
    $result = $con->query($sql);
    $row = $result->fetch_assoc();

    /*  if (!$row) {
        header("location: index.php");
        exit;
    } */

    // Reference all the variables
    $headline = $row["artHeadline"];
    $writer = $row["artWriter"];
    // $imgHeader = $row[""];
    $articleContent = $row["artContent"];
    $typeOfArticle = $row["artType"];
    $date = $row["artDate"];
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Browser || Article</title>

    <!-- FONTS AWESOME CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="../CSS/main.css">

    <script src="../Javascript/main.js" defer></script>

</head>

<body>

    <?php include("header.php") ?>

    <main>
        <div class="article-header">
            <div class="top-section">
                <div class="category"><?php echo "$typeOfArticle" ?></div>
                <h1 class="headline"><?php echo "$headline"  ?> </h1>
                <div class="date"><?php echo "$date" ?></div>
                <!-- <div class="date">November 8, 2024</div> -->
            </div>

            <div class="bottom-section">
                <div class="author-info">
                    <div class="author-name"><?php echo "$writer" ?></div>
                    <div class="author-role"><?php echo "$typeOfArticle" ?> Writer</div>
                </div>


                <?php
                /*                 session_start();
 */
                if (isset($_SESSION['id']) && in_array($_SESSION['id'], [1, 2, 3, 4, 5])): ?>
                    <button class="edit-button">Edit Article</button>
                <?php endif; ?>


            </div>
        </div>
        <article class="article">

            <?php
            $res = mysqli_query($con, "SELECT * FROM articles WHERE artID = $id");
            $row = mysqli_fetch_assoc($res);
            ?>
            <img src="../Images/<?php echo $row['artImgHeader'] ?>" alt="UPLOADED IMAGE">

            <!--   <img src="../Assets/testIMG-Landscape.jpg" alt="Article Image"> -->
            <p class="article-content">
                <?php echo "$articleContent" ?>
            </p>
        </article>

        <section class="more-articles">
            <div id="more-articles">
                <hr>
                <h3>More articles below:</h3>
                <hr>
            </div>
            <a href="" class="article-preview">
                <img src="../Assets/testIMG-Landscape.jpg" alt="Preview Image">
                <div>
                    <h4>Lorem Ipsum Dolor Very Very Very Long Headline</h4>
                    <p>Praesent eros velit, tincidunt id elit a, consequat sollicitudin libero.
                        Sed quis enim scelerisque, tempus libero et, fermentum urna. Nunc et quam ut lorem laoreet
                        mollis.</p>
                </div>
            </a>
            <a href="" class="article-preview">
                <img src="../Assets/testIMG-Landscape.jpg" alt="Preview Image">
                <div>
                    <h4>Lorem Ipsum Dolor Very Very Very Long Headline</h4>
                    <p>Praesent eros velit, tincidunt id elit a, consequat sollicitudin libero.
                        Sed quis enim scelerisque, tempus libero et, fermentum urna. Nunc et quam ut lorem laoreet
                        mollis.</p>
                </div>
            </a>
        </section>
    </main>

    <?php include("footer.php") ?>
</body>

</html>