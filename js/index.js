document.addEventListener('contextmenu', event => event.preventDefault());
let actv_page = "";
actv_page = sessionStorage.getItem("active_page");
const mobile_nav = document.querySelector(".mobile-navbar-btn");
const nav_header = document.querySelector(".header");

const toggleNavbar = () => {
    nav_header.classList.toggle("active");
};

mobile_nav.addEventListener('click', () => toggleNavbar());

const items = document.querySelectorAll(".navbar-list li");
console.log(items.item(actv_page));
items.item(actv_page).classList.add("underline");
