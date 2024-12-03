<?php
// Connect to the database
include("../LogInRegister/php/config.php");

// Get the database
$sql = "SELECT * FROM articles";
$result =   $con->query($sql);

if (!$result) {
    die("Invalid Query: " . $con->error);
}

/* while ($row = $result->fetch_assoc()) {

    echo "";
} */

$headline = "";
$writer = "";
$imgHeader = "";
$articleContent  = "";
$typeOfArticle = "";


$errorMessage = "";
$successMessage = "";

// Get the data
if ($_SERVER['REQUEST_METHOD'] == 'GET') {

    // If there is no ID on the URL
    if (!isset($_GET['id'])) {
        header("location: home.php");
        exit;
    }

    // Get the ID on the URL
    $id = $_GET["id"];

    $sql = "SELECT * FROM articles WHERE artID = $id";
    $result = $con->query($sql);
    $row = $result->fetch_assoc();

    // Fill In the values 
    $headline = $row['artHeadline'];
    $writer = $row['artWriter'];
    $imgHeader = $row['artImgHeader'];
    $articleContent = $row['artContent'];
    $typeOfArticle = $row['artType'];
}

// This code will run only when the form is submitted (via POST request).
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_GET["id"];

    // Clean the input data
    $headline = $con->real_escape_string($_POST['headline']);
    $writer = $con->real_escape_string($_POST['writer']);
    $articleContent = $con->real_escape_string($_POST['articleContent']);
    $typeOfArticle = $con->real_escape_string($_POST['typeOfArticle']);

    // Check if a new file is uploaded
    if (!empty($_FILES['imgHeader']['name'])) {
        $imgHeader = $_FILES['imgHeader']['name'];
        $tempName = $_FILES['imgHeader']['tmp_name'];
        $folder = '../Images/' . $imgHeader;

        // Attempt to move the uploaded file
        if (!move_uploaded_file($tempName, $folder)) {
            die("Error uploading image.");
        }
    } else {
        // No new file uploaded; keep the current image
        $sql = "SELECT artImgHeader FROM articles WHERE artID = $id";
        $result = $con->query($sql);
        if ($result && $row = $result->fetch_assoc()) {
            $imgHeader = $row['artImgHeader'];
        } else {
            die("Error fetching current image: " . $con->error);
        }
    }

    // Update the article
    $sql = "UPDATE articles 
            SET artHeadline = '$headline', 
                artWriter = '$writer', 
                artImgHeader = '$imgHeader',
                artContent = '$articleContent', 
                artType = '$typeOfArticle' 
            WHERE artID = $id";

    $result = $con->query($sql);

    if (!$result) {
        die("Error updating article: " . $con->error);
    } else {
        echo "<script>
            alert('Article updated successfully!');
            window.location.href = '../index.php';
        </script>";
        exit;
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Browser || Create</title>

    <!-- FONTS AWESOME CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="../CSS/main.css">

    <script src="../Javascript/main.js" defer></script>
</head>

<body>


    <!-- PANG DEBUG SA IMAGES --><!-- 
    <?php
    $res = mysqli_query($con, "SELECT * FROM articles");
    while ($row = mysqli_fetch_assoc($res)) {
    ?>
        <img src="../Images/<?php echo $row['artImgHeader'] ?>" alt="UPLOADED IMAGE">

    <?php } ?> -->


    <?php include("header.php") ?>

    <main>
        <form class="createArticle" method="post" enctype="multipart/form-data">
            <h1>Edit article</h1>

            <div class=" inputContainer" id="inputContainer">
                <label for="headline">TITLE/HEADLINE:</label>
                <input type="text" name="headline" value="<?php echo $headline ?>">
            </div>

            <div class="inputContainer" id="inputContainer">
                <label for="writer">WRITER:</label>
                <input type="text" name="writer" value="<?php echo $writer ?>" required>
            </div>

            <div class="inputContainer">
                <label for="image-header">IMAGE HEADER:</label>

                <!-- File input for selecting a new image -->
                <input type="file" name="imgHeader" id="imgHeader" accept="image/png, image/jpeg" onchange="previewImage(event)">

                <!-- Display the current or newly selected image -->
                <div id="imagePreview">
                    <?php if (!empty($imgHeader)): ?>
                        <p>Current Image:</p>
                        <img src="../Images/<?php echo htmlspecialchars($imgHeader); ?>" alt="Current Image" style="max-width: 200px;" id="currentImage">
                    <?php else: ?>
                        <p>No image available. Please upload an image.</p>
                    <?php endif; ?>
                </div>
            </div>

            <script>
                function previewImage(event) {
                    const input = event.target; // The file input element
                    const previewDiv = document.getElementById('imagePreview'); // The div where the preview is displayed
                    const file = input.files[0]; // The selected file

                    if (file) {
                        const reader = new FileReader();

                        reader.onload = function(e) {
                            // Replace the current image or message with the new image preview
                            previewDiv.innerHTML = `
                    <p>New Image Preview:</p>
                    <img src="${e.target.result}" alt="New Image" style="max-width: 200px;">
                `;
                        };

                        // Read the file as a data URL
                        reader.readAsDataURL(file);
                    }
                }
            </script>



            <div class="inputContainer" id="inputContainer">
                <label for="I">ARTICLE CONTENT:</label>
                <textarea name="articleContent" id="" cols="30" rows="26"><?php echo $articleContent ?></textarea>
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
                <input type="submit" value="UPDATE" name="update" class="update-Button">
                <input type="button" value="CANCEL" id="cancel">
            </div>


            <!--     <?php

                        // IF THERE ARE NO ERROR MESSAGE AND THE SUBMIT BUTTON WAS CLICKED
                        if (!empty($errorMessage) && isset($_POST['update'])) {
                            echo "
                <script defer> alert('PLS IMPLEMENT WARNING CONTAINER NA MERON OK BUTTON SAYING /ALL 
                FIELDS SHOULD NOT BE EMPTY OR SOMETHING/')</script>";
                            $errorMessage = "";
                        }
                        ?> -->

        </form>
    </main>

    <?php include("footer.php") ?>

</body>

</html>