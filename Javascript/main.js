/* || GLOBAL FUNCTIONS START */

/* || GLOBAL FUNCTIONS END */
function GoToHomePage()
{
    window.location.href = "home.php";
}
function PrintAnyText()
{
    console.log("BUTTON WAS CLICKED");
}
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


        function GoToArticle()
        {
            window.location.href = "create-article.php";
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
}

ArticlePageFunctions();
/* || ARTICLE PAGE END */


