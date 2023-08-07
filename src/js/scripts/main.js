// Button Scroll Top
const btnScrollTop = document.getElementById("js-btn-scroll-top");
if(btnScrollTop){
    btnScrollTop.addEventListener("click", () => {
        window.scrollTo({
          top: 0,
          behavior: "smooth",
        });
      });
}
// Menu Header Change >20 scroll
const header = document.getElementById("js-header");
function fixedMenu() {
  if (window.pageYOffset > 50) {
    header.classList.add("changeHeight");
  } else {
    header.classList.remove("changeHeight");
  }
}
document.addEventListener("scroll", fixedMenu);

// Dropdown Menu Configuration
const btnMenu = document.querySelectorAll('.js-btn-menu');
const MenuDropdown = document.querySelectorAll('.js-area-dropdown');
const htmlElement = document.querySelector('html');

if(btnMenu && MenuDropdown){
// link which menu dropdown you need to click
btnMenu.forEach((btn, index) => {
    btn.addEventListener('mouseenter', (event) => {
      event.preventDefault();
      // remove from all the active
      MenuDropdown.forEach(itemMenu => {
        itemMenu.classList.remove('active');
        htmlElement.classList.remove('custom-background');
        // if the user leave mouse from the menu section => close the event
        itemMenu.addEventListener('mouseleave', () => {
          itemMenu.classList.remove('active');
          htmlElement.classList.remove('custom-background');
          btnMenu.forEach(itemBtn => {
            itemBtn.classList.remove('active');
          })
        })
      })
      // remove the class active from all
      btnMenu.forEach(itemBtn => {
        itemBtn.classList.remove('active');
      })
      // put active class to one menu
      btn.classList.add('active');
      // add active
      MenuDropdown[index].classList.add('active');
    })
  })
}
// Open Modal Function
const btnOpenModalList = document.querySelectorAll('.js-cta-button');
const btnCloseModal = document.querySelector('.js-close');
if (btnOpenModalList.length > 0) {
  btnOpenModalList.forEach((btnOpenModal) => {
    btnOpenModal.addEventListener('click', (event) => {
      event.preventDefault();
      let html = document.body;
      html.classList.add('show-modal');
    });
  });
}
if (btnCloseModal) {
  btnCloseModal.addEventListener('click', (event) => {
    event.preventDefault();
    let html = document.body;
    html.classList.remove('show-modal');
  });
}
// Add class active to menu button
const menuButton = document.getElementById("js-menu-button");
menuButton.addEventListener("click", () => {
  document.documentElement.classList.toggle("menu-opened");
});