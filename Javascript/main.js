/* || HEADER START */

function GoBackToHomePage()
{
    const imageLogo = document.querySelector(".header-logo");

    imageLogo.addEventListener("click", GoToHomePage);

    console.log(imageLogo);

    function GoToHomePage()
    {
        window.location.href = "home.php";
    }

}

GoBackToHomePage();
/* || HEADER END */


/* || HOME PAGE START */
function HomePageContainerButtons()
{
    const container = document.getElementsByClassName("container");

    for (i = 0; i < container.length; i++)
    {
        container[i].addEventListener("click", GoToArticlePage);
    }

    function GoToArticlePage()
    {
        window.location.href = "articlePage.php";
    }
}

HomePageContainerButtons();

/* || HOME PAGE END */


