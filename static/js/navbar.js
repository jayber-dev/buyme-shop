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
let prevScrollPosition = window.scrollY

window.addEventListener('scroll', (e) => {
    if(this.scrollY > 80){
        if(this.scrollY < prevScrollPosition) { // scroll down event
            document.querySelector('.search-and-navbar').style.position = 'fixed'
            document.querySelector('.search-and-navbar').style.width = '100%'
            document.querySelector('.search-and-navbar').classList.remove("navbar-rollup")   
            document.querySelector('.search-and-navbar').classList.add("navbar-rollBack") 
            
        } else { //scroll up event
            document.querySelector('.search-and-navbar').style.position = 'fixed'
            document.querySelector('.search-and-navbar').style.width = '100%'
            document.querySelector('.search-and-navbar').classList.remove("navbar-rollBack")
            document.querySelector('.search-and-navbar').classList.add("navbar-rollup")
            
        }

    }
    // TODO:fix jumping issue
    // this if statement returns the elemnet from being fixed to relative
    // that what make the jumpy view of the carusel it gets back to its origins
    
    prevScrollPosition = this.scrollY
})