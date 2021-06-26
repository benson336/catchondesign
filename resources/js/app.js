
require('./bootstrap');

console.log("connect");

const menuBtn = document.querySelector(".menu-btn");
const menu = document.querySelector(".menu");
//const menuBranding = document.querySelector(".menu-branding");
const menuNav = document.querySelector(".menu-nav");
const navItem = document.querySelectorAll(".menu-nav-item");

const navLink = document.querySelectorAll(".menu-nav-link");

let showMenu = false;
menuBtn.addEventListener("click", toggleMenu);

function toggleMenu() {
  if (showMenu === false) {
    menuBtn.classList.add("close");
    menu.classList.add("show");
    //menuBranding.classList.add("show");
    menuNav.classList.add("show");
    navItem.forEach((item) => item.classList.add("show"));
    showMenu = true;
  } else {
    menuBtn.classList.remove("close");
    menu.classList.remove("show");
    //menuBranding.classList.remove("show");
    menuNav.classList.remove("show");
    navItem.forEach((item) => item.classList.remove("show"));
    showMenu = false;
  }
}
for (var i = 0; i < navLink.length; i++) {
  navLink[i].addEventListener("click", toggleMenutwo);
  function toggleMenutwo() {
    menuBtn.classList.remove("close");
    menu.classList.remove("show");
    menuNav.classList.remove("show");
    navItem.forEach((item) => item.classList.remove("show"));
    showMenu = false;
  }
}

//Sticky Header
/*window.onscroll = function() {myFunction()};

var navbar = document.getElementById("navsticky");
var sticky = navbar.offsetTop;

function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}*/