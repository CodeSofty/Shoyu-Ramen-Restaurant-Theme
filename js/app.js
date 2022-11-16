// Mobile nav funciton

const mobileSvg = document.getElementById('mobile_svg');
mobileSvg.addEventListener('click', () => {
    toggle_display();
});

const mobileCloseOut = document.getElementById('close-out');

mobileCloseOut.addEventListener('click', () => {
    toggle_display();
});

