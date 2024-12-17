<?php

include("../LogInRegister/php/config.php");

// Get the database || USED TO MAKE SURE WHICH ARTICLE ID THE SITE WILL GO TO
$sql = "SELECT * FROM articles WHERE artType='TSU Marilag 2024'";
$result = $con->query($sql);

$row = "";
$articles = [];

// Fetch all articles into the array
while ($row = $result->fetch_assoc()) {
    $articles[] = $row;
}

$articles = array_reverse($articles);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="../CSS/main.css">
    <script src="../Javascript/section.js" defer></script>


    <!-- FONTS AWESOME CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>


<body>
    <?php include("header.php"); ?>
    <main>
        <section class="other-main-news">
            <?php include("Sections/containerone.php") ?>
            <hr>
            <?php
            foreach (array_slice($articles, 1) as $x) {
                include("Sections/containertwo.php");
            }
            ?>
        </section>
    </main>

    <?php include("footer.php"); ?>
</body>

</html>