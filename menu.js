//It adds DOMContentLoaded because without it the menu doesn't work
document.addEventListener("DOMContentLoaded", () => {
    const nav = document.querySelector("#nav");
    const openMenu = document.querySelector("#openMenu");
    const search = document.querySelector("#search");
    const closeMenu = document.querySelector("#closeMenu");

    //Function for open menu
    function showNav(){
        nav.classList.add("visible");
    }

    //Adding the open action to search button and menu button
    openMenu.addEventListener("click", showNav);
    search.addEventListener("click", showNav);

    //Close the menu with class removing
    closeMenu.addEventListener("click", ()=> {
        nav.classList.remove("visible");
    })
})
