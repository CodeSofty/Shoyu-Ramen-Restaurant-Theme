// Mobile nav funciton

const mobileSvg = document.getElementById('mobile_svg');
const mobileNav = document.getElementsByClassName('main_navigation')[0];
const mobileCloseOut = document.getElementById('close-out');
const navLogo = document.getElementById('nav_logo');
const navList = document.getElementsByClassName('nav_list')[0];


mobileSvg.addEventListener('click', () => {
    toggle_display();
});


mobileCloseOut.addEventListener('click', () => {
    toggle_display();
});

function toggle_display() {
    mobileNav.classList.toggle('active');
    mobileCloseOut.classList.toggle('hidden');
    mobileSvg.classList.toggle('hidden');
    navLogo.classList.toggle('hidden');
    navList.classList.toggle('active');

};