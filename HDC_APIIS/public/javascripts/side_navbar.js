
// DROPDOWN MENU
const toogleDropdown = (dropdown, menu, isOpen) => {
    dropdown.classList.toggle("open", isOpen);
    menu.style.height = isOpen ? `${menu.scrollHeight}px` : 0;
}


// const closeAllDropdowns = () => {
//     document.querySelectorAll(".dropdown-container.open").forEach((openDropdown) => {
//         toggleDropdown(openDropdown, openDropdown.querySelector(".dropdown.menu"), false);
//     })
// }


//click event to all dropdown toggles
document.querySelectorAll(".dropdown-toggle").forEach((dropdownToggle) => {
    dropdownToggle.addEventListener("click", (e) => {
        e.preventDefault();

        const dropdown = e.target.closest(".dropdown-container");
        const menu = dropdown.querySelector(".dropdown-menu");
        const isOpen = dropdown.classList.contains("open");

        toogleDropdown(dropdown, menu, !isOpen); //toggle current dropdwon visibility.
    })
});


// SIDE NAVBAR
document.querySelectorAll(".sidebar-toggler, .sidebar-menu-button").forEach((button) => {
    button.addEventListener("click", () => {

    // closeAllDropdowns();

    document.querySelector(".sidebar").classList.toggle("collapsed");
});
});


if(window.innerWidth <= 1024){
    document.querySelector(".sidebar").classList.toggle("collapsed");
}


