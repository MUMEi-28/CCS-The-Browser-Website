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

    <link rel="stylesheet" href="../CSS/articleApage.css">
</head>

<body>

    <?php include("header.php") ?>

    <main>
        <div class="article-header">
            <div class="top-section">
                <div class="category">NEWS</div>
                <h1 class="headline">Lorem Ipsum Dolor Very Very Very Long Headline</h1>
                <div class="date">November 8, 2024</div>
            </div>

            <div class="bottom-section">
                <div class="author-info">
                    <div class="author-name">Juan Dela Cruz</div>
                    <div class="author-role">News Writer</div>
                </div>
                <button class="edit-button">Edit Article</button>
            </div>
        </div>
        <article>
            <img src="../Assets/testIMG-Landscape.jpg" alt="Article Image">
            <p class="article-content">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                Ipsum
                has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                of type
                and scrambled it to make a type specimen book. It has survived not only five centuries, but also the
                leap into
                electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the
                release of
                Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like
                Aldus
                PageMaker including versions of Lorem Ipsum.</p>
            <p class="article-content">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                Ipsum
                has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                of type
                and scrambled it to make a type specimen book. It has survived not only five centuries, but also the
                leap into
                electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the
                release of
                Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like
                Aldus
                PageMaker including versions of Lorem Ipsum.</p>
            <p class="article-content">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                Ipsum
                has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                of type
                and scrambled it to make a type specimen book. It has survived not only five centuries, but also the
                leap into
                electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the
                release of
                Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like
                Aldus
                PageMaker including versions of Lorem Ipsum.</p>
            <p class="article-content">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                Ipsum
                has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                of type
                and scrambled it to make a type specimen book. It has survived not only five centuries, but also the
                leap into
                electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the
                release of
                Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like
                Aldus
                PageMaker including versions of Lorem Ipsum.</p>
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