function fakeLoaderFadeIn() {
    $("#fakeLoader").fakeLoader({
        timeToHide: 120000,
        bgColor: "#28282e",
        spinner: "spinner1",
        zIndex: 1051
    });
}
function fakeLoaderFadeOut() {
    $('#fakeLoader').fadeOut();
    $("#fakeLoader").replaceWith('<div id="fakeLoader"></div>');
}

$(document).ajaxStart(function () {
    fakeLoaderFadeIn();
});
$(document).ajaxStop(function () {
    fakeLoaderFadeOut();
});

$('#file-ar').fileinput({
    theme: 'fa',
    language: 'ar',
    uploadUrl: '#',
    allowedFileExtensions: ['jpg', 'png', 'gif']
});


$(document).ready(function () {
    $("#test-upload").fileinput({
        'theme': 'fa',
        'showPreview': false,
        'allowedFileExtensions': ['jpg', 'png', 'gif'],
        'elErrorContainer': '#errorBlock'
    });
    $('.custom-select').select2();
    //$(".stickTop").sticky({ topSpacing: 0 }); 

});

$(function () {
    window.onscroll = function () { scrollFunction() };

    $('#backToTop').click(function () {
        $('html, body').animate({
            scrollTop: 0
        });
    });

    //$('a[href*="#"]')
    //    // Remove links that don't actually link to anything
    //    .not('[href="#"]')
    //    .not('[href="#0"]')
    //    .click(function (event) {
    //        // On-page links
    //        if (
    //            location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '')
    //            &&
    //            location.hostname == this.hostname
    //        ) {
    //            // Figure out element to scroll to
    //            var target = $(this.hash);
    //            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
    //            // Does a scroll target exist?
    //            if (target.length) {
    //                // Only prevent default if animation is actually gonna happen
    //                event.preventDefault();
    //                $('html, body').animate({
    //                    scrollTop: target.offset().top
    //                }, 1000, function () {
    //                    // Callback after animation
    //                    // Must change focus!
    //                    var $target = $(target);
    //                    $target.focus();
    //                    if ($target.is(":focus")) { // Checking if the target was focused
    //                        return false;
    //                    } else {
    //                        $target.attr('tabindex', '-1'); // Adding tabindex for elements not focusable
    //                        $target.focus(); // Set focus again
    //                    };
    //                });
    //            }
    //        }
    //    });
});


function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        $("#backToTop").css('display', "block");
    } else {
        $("#backToTop").css('display', "none");
    }
}