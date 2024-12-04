/* || GLOBAL FUNCTIONS START */

function GoToHomePage()
{
    window.location.href = "index.php";
}
function OnClickPostNews()
{
    window.location.href = "PHP/create-article.php";
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

        if (postButtons != null)
        {

            postButtons.forEach(postButton =>
            {
                postButton.addEventListener("click", OnClickPostNews);
            });
        }
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
        if (articleId != null)
        {
            // Redirect to articlePage.php with the article ID as a query parameter
            window.location.href = `PHP/articlePage.php?id=${articleId}`;
        }
        else
        {
            console.log("WALANG ID YUNG SITE")
        }

    }
}

function OnClickSportFest()
{
    const sportFestCard = document.querySelector(".sportFest");

    if (sportFestCard != null)
    {
        sportFestCard.addEventListener("click", SportFestOnClick);
    }
    else
    {
        console.log("NO SPORT FEST BUTTON");
    }


    function SportFestOnClick()
    {
        window.location.href = "PHP/CCS Sportsfest 2024.php";
    }

}


function OnClickMarilag()
{
    const marilagCard = document.querySelector(".marilag");

    if (marilagCard != null)
    {
        marilagCard.addEventListener("click", marilagOnClick);
    }
    else
    {
        console.log("NO marilag BUTTON");
    }


    function marilagOnClick()
    {
        window.location.href = "PHP/TSU Marilag 2024.php";
    }

}

OnClickMarilag();
OnClickSportFest();

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


