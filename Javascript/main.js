/* || GLOBAL FUNCTIONS START */

function GoToHomePage()
{
    window.location.href = "home.php";
    console.log("");

}
function GoToArticle()
{

    const articleId = this.getAttribute("data-id");
    if (articleId)
    {
        // Redirect to articlePage.php with the article ID as a query parameter
        window.location.href = `articlePage.php?id=${articleId}`;
    }


    //   window.location.href = "create-article.php";
    console.log("CREATE ARTICLE CLICKED");
}
function GoToEditArticle()
{
    window.location.href = "edit-article.php";
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
        const postButton = document.querySelector(".PostNews-button");


        if (postButton != null)
        {
            postButton.addEventListener("click", GoToArticle)
        }
    }

    GoToCreateArticlePage();

    LogoClickBackToHome();
}
HeaderFunctions();
/* || HEADER END */


/* || HOME PAGE START */
function HomePageContainerButtons()
{
    const container = document.getElementsByClassName("container");


    for (i = 0; i < container.length; i++)
    {
        container[i].addEventListener("click", GoToArticlePage);
        container[i].addEventListener("click", PrintAnyText);

    }

    function GoToArticlePage()
    {
        window.location.href = "articlePage.php";
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


        editArticleButton.addEventListener("click", GoToEditArticle);
    }

    OnClickEditArticle();
}

ArticlePageFunctions();
/* || ARTICLE PAGE END */


