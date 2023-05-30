
const menu = document.querySelector('#menu-icon');
const navlist = document.querySelector('.navlist');
const heade = document.querySelector(" header");

menu.addEventListener('click', () => {
  menu.classList.toggle('bx-x');
  navlist.classList.toggle('open');
});

window.addEventListener('scroll', () => {
  menu.classList.remove('bx-x');
  navlist.classList.remove('open');
});

window.addEventListener('scroll', () => {
  header.classList.toggle('sticky', window.scrollY > 0);
});


 const header = document.querySelector(" header");

window.addEventListener("scroll",function(){
    header.classList.toggle("sticky",this.window.scrollY>0);
});

const sr= ScrollReveal({
    distance:'30px',
    duration:2600,
    reset :true
})
sr.reveal ('.home-text',{delay:200,origin:'bottom'})
