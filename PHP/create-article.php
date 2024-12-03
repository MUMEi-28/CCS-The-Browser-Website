<?php
include("../LogInRegister/php/config.php");

$headline = "";
$writer = "";
$imgHeader = "";
$articleContent  = "";
$typeOfArticle = "";

$errorMessage = "";
$successMessage = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $headline = $_POST['headline'];
    $writer = $_POST['writer'];
    $articleContent = $_POST['articleContent'];
    $typeOfArticle = $_POST['typeOfArticle'];

    do {
        // Validate inputs
        if (
            empty($headline) ||
            empty($writer) ||
            empty($_FILES['imgHeader']['name']) ||
            empty($articleContent) ||
            empty($typeOfArticle)
        ) {
            $errorMessage = "All fields are required.";
            break;
        }

        // Handle the image upload
        $imgHeader = $_FILES['imgHeader']['name'];
        $tempName = $_FILES['imgHeader']['tmp_name'];
        $folder = '../Images/' . $imgHeader;

        if (!move_uploaded_file($tempName, $folder)) {
            $errorMessage = "Failed to upload the image.";
            break;
        }

        // Insert the article and image into the database
        $sql = "INSERT INTO articles (artHeadline, artContent, artWriter, artType, artImgHeader)
                VALUES ('$headline', '$articleContent', '$writer', '$typeOfArticle', '$imgHeader')";

        $result = $con->query($sql);

        if (!$result) {
            $errorMessage = "Invalid Query: " . $con->error;
            break;
        }

        // Reset all fields after success
        $headline = "";
        $writer = "";
        $imgHeader = "";
        $articleContent = "";
        $typeOfArticle = "";

        $successMessage = "Article created successfully!";
        header("location: ../index.php");
        exit;
    } while (false);
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Browser || Edit</title>

    <!-- FONTS AWESOME CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="../CSS/main.css">

    <script src="../createArticle.js" defer></script>
</head>

<body>

    <?php include("header.php") ?>

    <main>
        <form action="create-article.php" class="createArticle" method="post" enctype="multipart/form-data">
            <h1>Create new article</h1>

            <div class="inputContainer" id="inputContainer">
                <label for="headline">TITLE/HEADLINE:</label>
                <input type="text" name="headline" required>
            </div>

            <div class="inputContainer" id="inputContainer">
                <label for="writer">WRITER:</label>
                <input type="text" name="writer" required>
            </div>

            <div class="inputContainer">
                <label for="image-header">IMAGE HEADER:</label>
                <input type="file" name="imgHeader" accept="image/png, image/jpeg" required>

            </div>

            <div class="inputContainer" id="inputContainer">
                <label for="I">ARTICLE CONTENT:</label>
                <textarea name="articleContent" id="" cols="30" rows="26" required></textarea>
            </div>

            <div class="inputContainer" id="inputContainer">
                <label for="choices">TYPE OF ARTICLE:</label>
                <select name="typeOfArticle" id="typeOfArticle" required>
                    <option value="null" disabled selected hidden>Choose Type of Article</option>
                    <option value="News" <?php echo $typeOfArticle == "News" ? "selected" : ""; ?>>News</option>
                    <option value="Editorial" <?php echo $typeOfArticle == "Editorial" ? "selected" : ""; ?>>Editorial</option>
                    <option value="Feature" <?php echo $typeOfArticle == "Feature" ? "selected" : ""; ?>>Feature</option>
                    <option value="Sports" <?php echo $typeOfArticle == "Sports" ? "selected" : ""; ?>>Sports</option>
                    <option value="TSU Marilag 2024" <?php echo $typeOfArticle == "TSU Marilag 2024" ? "selected" : ""; ?>>TSU Marilag 2024</option>
                    <option value="CCS Sportsfest 2024" <?php echo $typeOfArticle == "CCS Sportsfest 2024" ? "selected" : ""; ?>>CCS Sportsfest 2024</option>
                </select>
            </div>


            <div class="submit-cancel-container">
                <input type="submit" value="POST" name="submit">
                <input type="button" value="CANCEL" id="cancel">
            </div>


            <!--     <?php

                        // IF THERE ARE NO ERROR MESSAGE AND THE SUBMIT BUTTON WAS CLICKED
                        if (!empty($errorMessage) && isset($_POST['submit'])) {
                            echo "
                <script defer> alert('PLS IMPLEMENT WARNING CONTAINER NA MERON OK BUTTON SAYING /ALL FIELDS SHOULD NOT BE EMPTY OR SOMETHING/')</script>";
                            $errorMessage = "";
                        }
                        ?> -->

        </form>
    </main>

    <?php include("footer.php") ?>

</body>

</html>