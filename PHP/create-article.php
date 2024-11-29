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

    <?php include("header.php") ?>

    <main>
        <form action="" class="createArticle">
            <h1>Create new article</h1>

            <div class="inputContainer" id="inputContainer">
                <label for="headline">TITLE/HEADLINE:</label>
                <input type="text">
            </div>

            <div class="inputContainer" id="inputContainer">
                <label for="writer">WRITER:</label>
                <input type="text">
            </div>

            <div class="inputContainer">
                <label for="image-header">IMAGE HEADER:</label>
                <input type="file">
            </div>

            <div class="inputContainer" id="inputContainer">
                <label for="I">ARTICLE CONTENT:</label>
                <!--                 <input type="text">
 -->
                <textarea name="articleContent" id="" cols="30" rows="26"></textarea>
            </div>

            <div class="inputContainer" id="inputContainer">
                <label for="headline">TYPE OF ARTICLE:</label>
                <input type="text">
            </div>

            <div class="submit-cancel-container">
                <input type="submit" value="SAVE">
                <input type="button" value="CANCEL" id="cancel">
            </div>
        </form>
    </main>

    <?php include("footer.php") ?>

</body>

</html>