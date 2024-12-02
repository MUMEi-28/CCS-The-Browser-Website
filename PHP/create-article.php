<?php
include("../LogInRegister/php/config.php");

$headline = "";
$writer = "";
$imgHeader = "";
$articleContent  = "";
$typeOfArticle = "";


$errorMessage = "";
$successMessage = "";

// This code will run only when the form is submitted (via POST request).
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $headline = $_POST['headline'];
    $writer = $_POST['writer'];
    $imgHeader = $_POST['imgHeader'];
    $articleContent = $_POST['articleContent'];
    $typeOfArticle = $_POST['typeOfArticle'];


    /*     echo "  <script defer>alert('SUBMITTED');</script>";
 */
}


do {
    // CHECK IF ALL FIELDS ARE NOT EMPTY
    if (empty($headline) || empty($writer) || empty($imgHeader) || empty($articleContent) || empty($typeOfArticle)) {
        $errorMessage = "All fields are required.";
        break;
    }



    // ADD THE ARTICLES TO THE DATABASE
    $sql = "INSERT INTO articles (artHeadline, artContent, artWriter, artImgHeader, artType)" .
        "VALUES ('$headline', '$articleContent', '$writer', '$imgHeader', '$typeOfArticle')";


    $result = $con->query($sql);

    if (!$result) {
        $errorMessage = "Invalid Query: " . $con->error;
        break;
    }


    // RESET ALL FIELDS

    $headline = "";
    $writer = "";
    $imgHeader = "";
    $articleContent = "";
    $typeOfArticle = "";

    $errorMessage = "";
    $successMessage = "";

    header("location: ../index.php");
} while (false)
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

    <script src="../Javascript/main.js" defer></script>
</head>

<body>

    <?php include("header.php") ?>

    <main>
        <form action="create-article.php" class="createArticle" method="post">
            <h1>Create new article</h1>

            <div class="inputContainer" id="inputContainer">
                <label for="headline">TITLE/HEADLINE:</label>
                <input type="text" name="headline">
            </div>

            <div class="inputContainer" id="inputContainer">
                <label for="writer">WRITER:</label>
                <input type="text" name="writer">
            </div>

            <div class="inputContainer">
                <label for="image-header">IMAGE HEADER:</label>
                <input type="file" name="imgHeader" accept="image/*">
            </div>

            <div class="inputContainer" id="inputContainer">
                <label for="I">ARTICLE CONTENT:</label>
                <textarea name="articleContent" id="" cols="30" rows="26"></textarea>
            </div>

            <div class="inputContainer" id="inputContainer">
                <label for="choices">TYPE OF ARTICLE:</label>
                <select name="typeOfArticle" id="typeOfArticle" value="<?php echo $typeOfArticle ?>">
                <option value="null" disabled selected hidden>Choose Type of Article</option>
                <option value="News">News</option>
                <option value="Editorial">Editorial</option>
                <option value="Feature">Feature</option>
                <option value="Sports">Sports</option>
                <option value="TSU Marilag 2024">TSU Marilag 2024</option>
                <option value="CCS Sportsfest 2024">CCS Sportsfest 2024</option>
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