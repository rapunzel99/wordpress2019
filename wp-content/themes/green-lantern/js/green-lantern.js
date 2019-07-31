jQuery(document).ready(function ($) {
    //BLOG Slides
    var $blogFeaturesCarousel = $(".blog-features-carousel");
    $blogFeaturesCarousel.carouFredSel({
    responsive: true,
    prev: {
        button: ".feature-arrow-left",
        key: "left",
        items: 1
    },
    next: {
        button: ".feature-arrow-right",
        key: "right",
        items: 1
    },
    items: {
       width: 375,
        height: 450,
        visible: {
            min: 1,
            max: 3
        },
    },
    auto: false,
    scroll: 1,
    circular: false
    });
    /* Portfolio PrettyPhoto */
    $("a[data-rel^='prettyPhoto']").prettyPhoto({
    animation_speed: 'fast', /* fast/slow/normal */
    slideshow: 5000, /* false OR interval time in ms */
    autoplay_slideshow: false, /* true/false */
    opacity: 0.80  /* Value between 0 and 1 */
    });  
});
/* Centering Bullets */
function centeringBullets() {
    //Bullets center fixing in revolution slide
    jQuery('.simplebullets,.slider-fixed-frame .home-bullets').each(function () {
        var $this = $(this), w = $this.width();
        $this.css('margin-left', -(w / 2) + 'px');
    });
}

// scroll-up
jQuery(document).ready(function () {	
	jQuery(window).scroll(function () {
		if (jQuery(this).scrollTop() > 100) {
			jQuery('.top_scrollup').fadeIn();
		} else {
			jQuery('.top_scrollup').fadeOut();
		}
	});

	jQuery('.top_scrollup').click(function () {
		jQuery("html, body").animate({
			scrollTop: 0
		}, 600);
		return false;
	});

});	