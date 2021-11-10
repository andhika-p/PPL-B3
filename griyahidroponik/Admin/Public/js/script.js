const menuToggle = document.querySelector('.menu-toggle input');
const nav = document.querySelector('nav ul');

menuToggle.addEventListener('click',function(){
  nav.classList.toggle('slide');
});

const navbar = document.querySelector('.navbar');
window.onscroll = function () {
  scrollFunction();
};
function scrollFunction() {
  if (document.body.scrollTop > 30 || document.documentElement.scrollTop > 30) {
    navbar.style.backgroundColor = 'white';
  } else {
    navbar.style.backgroundColor = 'rgba(255, 255, 255,0.4)';
  }
}


