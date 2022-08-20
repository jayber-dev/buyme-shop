/***** NAV BAR ******/

const toggle = document.querySelector(".toggle");
const menu = document.querySelector(".menu");

// Toggle mobile menu 
function toggleMenu() {
    if (menu.classList.contains("active")) {
        menu.classList.remove("active");
        toggle.querySelector("a").innerHTML = '<i class="fas fa-bars"></i>';

        // adds the menu (hamburger) icon
    } else {
        menu.classList.add("active");

        // adds the close (x) icon
        toggle.querySelector("a").innerHTML = '<i class="fas fa-times"></i>';
    }
}
// Event Listener 
toggle.addEventListener('click', toggleMenu, false);

// ---------------------------- navbar-scroll handler -----------------------
let screenHeight = window.scrollY

window.addEventListener('scroll', (e) => {
    let currPos = this.scrollY
    if(currPos < screenHeight) {
        document.querySelector('.search-and-navbar').style.position = 'fixed'
        document.querySelector('.search-and-navbar').style.width = '100%'
        document.querySelector('.search-and-navbar').classList = "search-and-navbar" 
    } 
    screenHeight = this.scrollY
    if(this.scrollY ===0) {
        document.querySelector('.search-and-navbar').style.position = 'relative'
    }
})