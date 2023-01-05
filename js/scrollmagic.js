var controller = new ScrollMagic.Controller();

var scene = new ScrollMagic.Scene ({
    triggerElement: ".about-left-side"
})
    .setClassToggle(".about-left-side", "left-fade-in")
    .addIndicators()
    scene.reverse(false) 
    .addTo(controller)

var scene = new ScrollMagic.Scene({
    triggerElement:".about-right-side"
})
    .setClassToggle(".about-right-side", "right-fade-in")
    .addIndicators()
    scene.reverse(false)   
    .addTo(controller)
