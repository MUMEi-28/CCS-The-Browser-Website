<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>



    <!-- FONTS AWESOME CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="../CSS/createArticle.css">
</head>


<body>
    <?php include("header.php"); ?>

    <main>
        <h1>Create new article</h1>

        <form action="/action_page.php">
            <br>
            <div class="input-box">
                <div class="input-field headline">
                    <label for="tname">TITLE/HEADLINE: </label>
                </div>
                <input type="text" id="tname" name="title/headline" placeholder="Write your title here...">
                <br><br>
                <div class="input-field writer">
                    <label for="twrite">WRITER: </label>
                    <br>
                    <input type="text" id="twrite" name="writer" placeholder="Write your name here ...">
                    <br><br>
                </div>
                <div class="input-field imageheader">
                    <label for="timageheader">IMAGE HEADER: </label>
                    <br>
                    <input type="text" id="timageheader" name="imageheader" placeholder="Place your image header...">
                    <br><br>
                </div>
                <div class="input-field image">
                    <label for="timage">IMAGE:</label>
                    <br>
                    <input type="file" id="timage" name="name" placeholder="Select your image here..." accept="image/*">
                    <br><br>
                </div>
                <div class="input-field writer">
                    <label for="tcontent">ARTICLE CONTENT: </label>
                    <br>
                    <textarea name="" id="articlecontent" cols="100" rows="20" placeholder="">
             </textarea>
                    <br><br>
                </div>

                <form action="/action_page.php">
                    <br>
                    <div class="input-box">
                        <div class="input-field headline">
                            <label for="tname">TITLE/HEADLINE: </label>
                        </div>
                        <input type="text" id="tname" name="title/headline" placeholder="Write your title here...">
                        <br><br>
                        <div class="input-field writer">
                            <label for="twrite">WRITER: </label>
                            <br>
                            <input type="text" id="twrite" name="writer" placeholder="Write your name here ...">
                            <br><br>
                        </div>
                        <div class="input-field imageheader">
                            <label for="timage">IMAGE HEADER: </label>
                            <br>
                            <input type="text" id="timage" name="imageheader" placeholder="Place your image header...">
                            <br><br>
                        </div>
                        <div class="input-field writer">
                            <label for="tcontent">ARTICLE CONTENT: </label>
                            <br>
                            <textarea name="" id="articlecontent" cols="100" rows="20" placeholder="Your content here...">
             </textarea>
                            <br><br>
                        </div>

                        <div class="input-field writer">
                            <label for="ttype">TYPE OF ARTICLE: </label>
                            <br>
                            <input type="text" id="ttype" name="typeofarticle" placeholder="Your type of article...">
                            <br><br>
                            <input type="button" class="button" name="SAVE" value="SAVE">
                            <input type="button" class="button" name="CANCEL" value="CANCEL">
                            <br>
                        </div>
                    </div>
            </div>
        </form>


    </main>

    <?php include("footer.php") ?>
</body>

</html>