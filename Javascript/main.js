/* || GLOBAL FUNCTIONS START */

function GoToHomePage()
{
    window.location.href = "../index.php";
}
function OnClickPostNews()
{
    //   window.location.href = `create-article.php`;
    window.location.href = "create-article.php";
    console.log("CREATE ARTICLE CLICKED");
}
function GoToEditArticle()
{
    const urlParams = new URLSearchParams(window.location.search);
    const articleId = urlParams.get('id');

    if (articleId)
    {
        // Redirect to articlePage.php with the article ID as a query parameter
        window.location.href = `edit-article.php?id=${articleId}`;
    }
    else
    {
        console.log("ITS NOT WORKING");
    }

    console.log("EDIT ARTICLE CLICKED");
}

/* || GLOBAL FUNCTIONS END */

/* || HEADER START */
function HeaderFunctions()
{

    function LogoClickBackToHome()
    {
        const imageLogo = document.querySelector(".header-logo");

        imageLogo.addEventListener("click", GoToHomePage);

    }

    function GoToCreateArticlePage()
    {
        const postButtons = document.querySelectorAll(".PostNews-button");

        postButtons.forEach(postButton =>
        {
            postButton.addEventListener("click", OnClickPostNews);
        });
    }

    function OnClickLogOut()
    {
        const logOutButton = document.querySelectorAll(".LogOut-button");

        if (logOutButton != null)
        {
            logOutButton.forEach(logOutButton =>
            {
                logOutButton.addEventListener("click", OnClickLogOut);
            });
        }
    }

    OnClickLogOut();
    GoToCreateArticlePage();

    LogoClickBackToHome();
}
HeaderFunctions();
/* || HEADER END */


/* || HOME PAGE START */
function HomePageContainerButtons()
{
    const container = document.getElementsByClassName("container");

    // DITO YUNG MGA CLICKABLE CONTAINER SA HOMEPAGE

    for (i = 0; i < container.length; i++)
    {
        container[i].addEventListener("click", GoToArticlePage);
    }

    function GoToArticlePage()
    {
        console.log("CONTAINER CLICKED");

        const articleId = this.getAttribute("data-id");
        if (articleId)
        {
            // Redirect to articlePage.php with the article ID as a query parameter
            window.location.href = `articlePage.php?id=${articleId}`;
        }
        else
        {
            console.log("WALANG ID YUNG SITE");
            /*  alert("WALANG ID YUNG SITE") */
        }

    }
}

HomePageContainerButtons();

/* || HOME PAGE END */

/* || ARTICLE PAGE START */

function ArticlePageFunctions()
{
    function GoHomePageOnCancel()
    {
        const cancelButton = document.querySelector("#cancel")

        if (cancelButton != null)
        {
            cancelButton.addEventListener("click", GoToHomePage);
        }
    }
    GoHomePageOnCancel();

    function OnClickEditArticle()
    {
        const editArticleButton = document.querySelector(".edit-button");

        if (editArticleButton != null)
        {

            editArticleButton.addEventListener("click", GoToEditArticle);
        }
    }

    OnClickEditArticle();


    function OnClickUpdateArticle()
    {
        const updateArticleButton = document.querySelector(".update-Button");

        if (updateArticleButton != null)
        {
            updateArticleButton.addEventListener("click", UpdateAritcle);
        }

        function UpdateAritcle()
        {
            const urlParams = new URLSearchParams(window.location.search);
            const articleId = urlParams.get('id');


            if (articleId)
            {
                // Redirect to articlePage.php with the article ID as a query parameter
                window.location.href = `edit-article.php?id=${articleId}`;
            }
            else
            {
                console.log("ITS NOT WORKING");
            }

        }
    }

    OnClickUpdateArticle();
}

ArticlePageFunctions();
/* || ARTICLE PAGE END */


