////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
// jQuery
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
var resizeId;
jQuery(document).ready(function(jQuery) {
    "use strict";

    sliderHeight();

    if (jQuery(".read-more").length > 0) {
        jQuery(".read-more").each(function() {

            var collapseHeight = parseInt( jQuery(this).attr("data-read-more-collapse-height"), 10);
            if( !collapseHeight ) collapseHeight = 200;

            var moreLink = jQuery(this).attr("data-read-more-more-link");
            if( !moreLink ) moreLink = "Read more";

            var lessLink = jQuery(this).attr("data-read-more-less-link");
            if( !lessLink ) lessLink = "Read less";

            jQuery(this).readmore({
                speed: 500,
                collapsedHeight: collapseHeight,
                moreLink: '<div class="read-more-btn"><a href="#" class="btn btn-framed btn-primary btn-light-frame btn-rounded">' + moreLink + '</a></div>',
                lessLink: '<div class="read-more-btn"><a href="#" class="btn btn-framed btn-primary btn-light-frame btn-rounded">' + lessLink + '</a></div>'
            });
        });
    }

//  Smooth Scroll

    jQuery('.main-nav a[href^="#"], a[href^="#"].scroll').on('click',function (e) {
        e.preventDefault();
        var target = this.hash,
            jQuerytarget = jQuery(target);
        jQuery('html, body').stop().animate({
            'scrollTop': jQuerytarget.offset().top
        }, 2000, 'swing', function () {
            window.location.hash = target;
        });
    });

    jQuery(".nav-btn").on("click", function(){
        jQuery(".page-wrapper").toggleClass("show-navigation");
    });
    jQuery(".navigation-links, .hero-section, #page-content, #page-footer").on("click", function(){
        jQuery(".page-wrapper").removeClass("show-navigation");
    });

    jQuery(window).scroll(function () {
        if (jQuery(window).scrollTop() > 1 ) {
            jQuery(".navigation").addClass("show-background");
        } else {
            jQuery(".navigation").removeClass("show-background");
        }
    });

//  Responsive Video Scaling

    if (jQuery(".video").length > 0) {
        jQuery(this).fitVids();
    }

//  Magnific Popup

    if (jQuery('.image-popup').length > 0) {
        jQuery('.image-popup').magnificPopup({
            type:'image',
            removalDelay: 300,
            mainClass: 'mfp-fade',
            overflowY: 'scroll'
        });
    }

    if (jQuery('.video-popup').length > 0) {
        jQuery('.video-popup').magnificPopup({
            type:'iframe',
            removalDelay: 300,
            mainClass: 'mfp-fade',
            overflowY: 'scroll',
            iframe: {
                markup: '<div class="mfp-iframe-scaler">'+
                    '<div class="mfp-close"></div>'+
                    '<iframe class="mfp-iframe" frameborder="0" allowfullscreen></iframe>'+
                    '</div>',
                patterns: {
                    youtube: {
                        index: 'youtube.com/',
                        id: 'v=',
                        src: '//www.youtube.com/embed/%id%?autoplay=1'
                    },
                    vimeo: {
                        index: 'vimeo.com/',
                        id: '/',
                        src: '//player.vimeo.com/video/%id%?autoplay=1'
                    },
                    gmaps: {
                        index: '//maps.google.',
                        src: '%id%&output=embed'
                    }
                },
                srcAction: 'iframe_src'
            }
        });
    }

    //  Scroll Reveal

    if ( jQuery(window).width() > 768 && jQuery("[data-scroll-reveal]").length ) {
        window.scrollReveal = new scrollReveal();
    }

    //bigGalleryWidth();

    if( jQuery(".count-down").length ){
        var year = parseInt( jQuery(".count-down").attr("data-countdown-year"), 10 );
        var month = parseInt( jQuery(".count-down").attr("data-countdown-month"), 10 ) - 1;
        var day = parseInt( jQuery(".count-down").attr("data-countdown-day"), 10 );
        jQuery(".count-down").countdown({until: new Date(year, month, day), padZeroes: true});
    }

//  Form Validation

    jQuery("form .btn[type='submit']").on("click", function(){
        var button = jQuery(this);
        var form = jQuery(this).closest("form");
        button.prepend("<div class='status'></div>");
        form.validate({
            submitHandler: function() {
                //jQuery.post("assets/php/email.php", form.serialize(),  function(response) {
                    //console.log(response);
                    //jQuery('#form-subscribe .form-contact-status').html(response);
                    button.find(".status").append(response);
                    form.addClass("submitted");
               // });
                return false;
            }
        });
    });

    jQuery("[data-background-color-custom]").each(function() {
        jQuery(this).css( "background-color", jQuery(this).attr("data-background-color-custom") );
    });


    if( jQuery("body").hasClass("links-hover-effect") ){
        jQuery("a, button").each(function() {
            if( !jQuery(this).hasClass("image-popup") && !jQuery(this).hasClass("ab-item") && !jQuery(this).hasClass("video-popup") && !jQuery(this).hasClass("arrow-up") && !jQuery(this).hasClass("image") && !jQuery(this).hasClass("no-hover-effect") ){
                jQuery(this).addClass("hover-effect");
                var htmlContent = jQuery(this).html();
                jQuery(this).text("");
                jQuery(this).append("<span><div class='hover-element'>" + htmlContent + "</div><div class='hover-element'>" + htmlContent + "</div></span>");
            }
        });
    }

    if( jQuery("body").hasClass("has-loading-screen") ){
        Pace.on("done", function() {
            jQuery(".page-wrapper").addClass("loading-done");
            setTimeout(function() {
                jQuery(".page-wrapper").addClass("hide-loading-screen");
            }, 500);
            jQuery.each( jQuery("#slider .animate"), function (i) {
                var jQuerythis = jQuery(this);
                setTimeout(function(){
                    jQuerythis.addClass("show");
                }, i * 150);
            });
        });
    }
    else {
        jQuery.each( jQuery("#slider .animate"), function (i) {
            var jQuerythis = jQuery(this);
            setTimeout(function(){
                jQuerythis.addClass("show");
            }, i * 150);
        });
    }

    jQuery.each( jQuery("#right_menu .animate"), function (i) {
        var jQuerythis = jQuery(this);
        setTimeout(function(){
            jQuerythis.addClass("show");
        }, i * 150);
    });

    jQuery(".bg-transfer").each(function() {
        jQuery(this).css("background-image", "url("+ jQuery(this).find("img").attr("src") +")" );
    });

    jQuery('.modal-body a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
        var element = jQuery( jQuery(this).attr("href") ).find(".one-item-carousel");
        if( !element.hasClass("owl-carousel") ){
            jQuery(element).owlCarousel({
                autoheight: 1,
                loop: 0,
                margin: 0,
                items: 1,
                nav: 0,
                dots: 1,
                autoHeight: true,
                navText: []
            });
        }
    });

});

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
// On Load
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

jQuery(window).load(function(){
    if ( jQuery(document).width() > 768) {
        var jQueryequalHeight = jQuery('.container');
        for( var i=0; i<jQueryequalHeight.length; i++ ){
            equalHeight( jQueryequalHeight );
        }
    }
    initializeOwl();
    centerVerticalNavigation();
});

jQuery(window).resize(function(){
    clearTimeout(resizeId);
    resizeId = setTimeout(doneResizing, 250);

});

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
// Functions
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

// Do after resize

function doneResizing(){
    //bigGalleryWidth();
    sliderHeight();
    centerVerticalNavigation();
}

function centerVerticalNavigation(){
    if ( jQuery(document).width() > 768) {
        jQuery(".nav-btn-only .navigation-links").css("padding-top", (jQuery(window).height()/2 - jQuery(".navigation .container").height()) - (jQuery(".nav-btn-only .navigation-links").height()/2) - 40 );
    }
}

function sliderHeight() {
    jQuery(".hero-section").height( jQuery(window).height() );
    jQuery(".hero-section .owl-stage-outer").height( jQuery(window).height() );
}

function bigGalleryWidth(){
    if ( jQuery(document).width() < 768) {
        jQuery(".big-gallery .slide .container").width( jQuery(document).width() );
    }
}

function initializeOwl(){
    if( jQuery(".owl-carousel").length ){
        jQuery(".owl-carousel").each(function() {

            var items = parseInt( jQuery(this).attr("data-owl-items"), 10);
            if( !items ) items = 1;

            var nav = parseInt( jQuery(this).attr("data-owl-nav"), 2);
            if( !nav ) nav = 0;

            var dots = parseInt( jQuery(this).attr("data-owl-dots"), 2);
            if( !dots ) dots = 0;

            var center = parseInt( jQuery(this).attr("data-owl-center"), 2);
            if( !center ) center = 0;

            var loop = parseInt( jQuery(this).attr("data-owl-loop"), 2);
            if( !loop ) loop = 0;

            var margin = parseInt( jQuery(this).attr("data-owl-margin"), 2);
            if( !margin ) margin = 0;

            var autoWidth = parseInt( jQuery(this).attr("data-owl-auto-width"), 2);
            if( !autoWidth ) autoWidth = 0;

            var navContainer = jQuery(this).attr("data-owl-nav-container");
            if( !navContainer ) navContainer = 0;

            var autoplay = jQuery(this).attr("data-owl-autoplay");
            if( !autoplay ) autoplay = 0;

            var fadeOut = jQuery(this).attr("data-owl-fadeout");
            if( !fadeOut ) fadeOut = 0;
            else fadeOut = "fadeOut";

            jQuery(this).owlCarousel({
                navContainer: navContainer,
                animateOut: fadeOut,
                autoplaySpeed: 2000,
                autoplay: autoplay,
                autoheight: 1,
                autoWidth: autoWidth,
                items: items,
                center: center,
                loop: loop,
                margin: margin,
                nav: nav,
                dots: dots,
                autoHeight: true,
                navText: [],
                responsive: {
                    0 : {
                        items: 1,
                        autoWidth: false,
                        center: false
                    },
                    768 : {
                        autoWidth: autoWidth,
                        items: items,
                        center: center
                    }
                }
            });
        });

    }
}

function equalHeight(container){
    var currentTallest = 0,
        currentRowStart = 0,
        rowDivs = new Array(),
        jQueryel,
        topPosition = 0;

    jQuery(container).find(".equal-height").each(function() {
        $el = jQuery(this);
        jQuery($el).height('auto');
        topPostion = $el.position().top;
        if (currentRowStart != topPostion) {
            for (currentDiv = 0 ; currentDiv < rowDivs.length ; currentDiv++) {
                rowDivs[currentDiv].height(currentTallest);
            }
            rowDivs.length = 0; // empty the array
            currentRowStart = topPostion;
            currentTallest = $el.height();
            rowDivs.push($el);
        } else {
            rowDivs.push($el);
            currentTallest = (currentTallest < $el.height()) ? ($el.height()) : (currentTallest);
        }
        for (currentDiv = 0 ; currentDiv < rowDivs.length ; currentDiv++) {
            rowDivs[currentDiv].height(currentTallest);
        }
    });
}
