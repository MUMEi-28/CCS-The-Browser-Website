/* || GLOBAL FUNCTIONS START */

function GoToHomePage() {
    window.location.href = "../index.php";  // Corrected relative path to go up one folder and access index.php
}

function OnClickPostNews() {
    window.location.href = "../PHP/create-article.php";  // Corrected relative path
}

function GoToEditArticle() {
    const urlParams = new URLSearchParams(window.location.search);
    const articleId = urlParams.get('id');

    if (articleId) {
        window.location.href = `../PHP/edit-article.php?id=${articleId}`;  // Corrected relative path
    } else {
        console.log("ITS NOT WORKING");
    }

    console.log("EDIT ARTICLE CLICKED");
}

/* || GLOBAL FUNCTIONS END */

/* || HEADER START */
function HeaderFunctions() {

    function LogoClickBackToHome() {
        const imageLogo = document.querySelector(".header-logo");
        imageLogo.addEventListener("click", GoToHomePage);
    }

    function GoToCreateArticlePage() {
        const postButton = document.querySelector(".PostNews-button");

        if (postButton != null) {
            postButton.addEventListener("click", OnClickPostNews);
        }
    }

    function OnClickLogOut() {
        const logOutButton = document.querySelector(".LogOut-button");

        if (logOutButton != null) {
            logOutButton.addEventListener("click", logOut);
        }

        function logOut() {
            alert("LOGGING OUT");
            window.location.href = "../index.php";  // Corrected relative path
        }
    }

    OnClickLogOut();
    GoToCreateArticlePage();
    LogoClickBackToHome();
}
HeaderFunctions();
/* || HEADER END */

/* || HOME PAGE START */
function HomePageContainerButtons() {
    const container = document.getElementsByClassName("container");

    for (i = 0; i < container.length; i++) {
        container[i].addEventListener("click", GoToArticlePage);
    }

    function GoToArticlePage() {
        console.log("CONTAINER CLICKED");

        const articleId = this.getAttribute("data-id");
        if (articleId != null) {
            window.location.href = `../PHP/articlePage.php?id=${articleId}`;  // Corrected relative path
        } else {
            console.log("WALANG ID YUNG SITE");
        }
    }
}

HomePageContainerButtons();
/* || HOME PAGE END */

/* || ARTICLE PAGE START */

function ArticlePageFunctions() {
    function GoHomePageOnCancel() {
        const cancelButton = document.querySelector("#cancel");

        if (cancelButton != null) {
            cancelButton.addEventListener("click", GoToHomePage);
        }
    }
    GoHomePageOnCancel();

    function OnClickEditArticle() {
        const editArticleButton = document.querySelector(".edit-button");

        if (editArticleButton != null) {
            editArticleButton.addEventListener("click", GoToEditArticle);
        }
    }

    OnClickEditArticle();

    function OnClickUpdateArticle() {
        const updateArticleButton = document.querySelector(".update-Button");

        if (updateArticleButton != null) {
            updateArticleButton.addEventListener("click", UpdateArticle);
        }

        function UpdateArticle() {
            const urlParams = new URLSearchParams(window.location.search);
            const articleId = urlParams.get('id');

            if (articleId) {
                window.location.href = `../PHP/edit-article.php?id=${articleId}`;  // Corrected relative path
            } else {
                console.log("ITS NOT WORKING");
            }
        }
    }

    OnClickUpdateArticle();
}

ArticlePageFunctions();
/* || ARTICLE PAGE END */
