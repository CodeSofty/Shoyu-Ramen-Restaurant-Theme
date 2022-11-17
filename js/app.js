// Mobile nav funciton

const mobileSvg = document.getElementById('mobile_svg');
const mobileNav = document.getElementsByClassName('mobile-nav')[0];
const mobileCloseOut = document.getElementById('close-out');


mobileSvg.addEventListener('click', () => {
    toggle_display();
});


mobileCloseOut.addEventListener('click', () => {
    toggle_display();
});

function toggle_display() {
    mobileNav.classList.toggle('active');
};
