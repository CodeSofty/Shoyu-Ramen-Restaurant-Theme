var controller = new ScrollMagic.Controller();

var scene = new ScrollMagic.Scene ({
    triggerElement: "#about-section"
})
    .setClassToggle(".about-left-side", "left-fade-in")
    .addIndicators()
    scene.reverse(false) 
    .addTo(controller)

var scene = new ScrollMagic.Scene({
    triggerElement:"#about-section"
})
    .setClassToggle(".about-right-side", "right-fade-in")
    .addIndicators()
    scene.reverse(false)   
    .addTo(controller)
