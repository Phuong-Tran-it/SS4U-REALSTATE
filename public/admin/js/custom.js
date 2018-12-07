/*Template Name: UrbanArchi
File Name: custom.js
Author Name: ThemeVault
Author URI: http://www.themevault.net/
License URI: http://www.themevault.net/license*/


$(document).ready(function () {
    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            $('#back-to-top').fadeIn();
        } else {
            $('#back-to-top').fadeOut();
        }
    });
    $('#back-to-top').click(function () {
        $("html, body").animate({scrollTop: 0}, 600);
        return false;
    });

});

$(function () {
    var $searchlink = $('#searchtoggl i');
    var $searchbar = $('#searchbar');

    $('#searchtoggl').on('click', function (e) {
        e.preventDefault();

        if ($(this).attr('id') == 'searchtoggl') {
            if (!$searchbar.is(":visible")) {
                // if invisible we switch the icon to appear collapsable
                $searchlink.removeClass('fa-search').addClass('fa-search-minus');
            } else {
                // if visible we switch the icon to appear as a toggle
                $searchlink.removeClass('fa-search-minus').addClass('fa-search');
            }

            $searchbar.slideToggle(300, function () {
                // callback after search bar animation
            });
        }
    });

    $('#searchform').submit(function (e) {
        e.preventDefault(); // stop form submission
    });
});

$(document).ready(function () {
    "use strict";
    if ($('.scrollReveal').length && !$('html.ie9').length) {
        $('.scrollReveal').parent().css('overflow', 'hidden');
        window.sr = ScrollReveal({
            reset: false,
            distance: '32px',
            mobile: true,
            duration: 850,
            scale: 1,
            viewFactor: 0.3,
            easing: 'ease-in-out'
        });
        sr.reveal('.sr-top', {origin: 'top'});
        sr.reveal('.sr-bottom', {origin: 'bottom'});
        sr.reveal('.sr-left', {origin: 'left'});
        sr.reveal('.sr-long-left', {origin: 'left', distance: '70px', duration: 1000});
        sr.reveal('.sr-right', {origin: 'right'});
        sr.reveal('.sr-scaleUp', {scale: '0.8'});
        sr.reveal('.sr-scaleDown', {scale: '1.15'});

        sr.reveal('.sr-delay-1', {delay: 200});
        sr.reveal('.sr-delay-2', {delay: 400});
        sr.reveal('.sr-delay-3', {delay: 600});
        sr.reveal('.sr-delay-4', {delay: 800});
        sr.reveal('.sr-delay-5', {delay: 1000});
        sr.reveal('.sr-delay-6', {delay: 1200});
        sr.reveal('.sr-delay-7', {delay: 1400});
        sr.reveal('.sr-delay-8', {delay: 1600});

        sr.reveal('.sr-ease-in-out-quad', {easing: 'cubic-bezier(0.455,  0.030, 0.515, 0.955)'});
        sr.reveal('.sr-ease-in-out-cubic', {easing: 'cubic-bezier(0.645,  0.045, 0.355, 1.000)'});
        sr.reveal('.sr-ease-in-out-quart', {easing: 'cubic-bezier(0.770,  0.000, 0.175, 1.000)'});
        sr.reveal('.sr-ease-in-out-quint', {easing: 'cubic-bezier(0.860,  0.000, 0.070, 1.000)'});
        sr.reveal('.sr-ease-in-out-sine', {easing: 'cubic-bezier(0.445,  0.050, 0.550, 0.950)'});
        sr.reveal('.sr-ease-in-out-expo', {easing: 'cubic-bezier(1.000,  0.000, 0.000, 1.000)'});
        sr.reveal('.sr-ease-in-out-circ', {easing: 'cubic-bezier(0.785,  0.135, 0.150, 0.860)'});
        sr.reveal('.sr-ease-in-out-back', {easing: 'cubic-bezier(0.680, -0.550, 0.265, 1.550)'});
    }
});

$(document).ready(function () {
    var myButton = $('#mybutton');
    var userFeed = new Instafeed({
        get: 'user',
        userId: '4828631159',
        accessToken: '4828631159.1677ed0.3e66d0fb39cc4a8383ddd034121c65dc',
        limit: '4',
        sortBy: 'most-recent',
        after: function () {
            var images = $("#instafeed").find('a');
            $.each(images, function (index, image) {
                var delay = (index * 75) + 'ms';
                $(image).css('-webkit-animation-delay', delay);
                $(image).css('-moz-animation-delay', delay);
                $(image).css('-ms-animation-delay', delay);
                $(image).css('-o-animation-delay', delay);
                $(image).css('animation-delay', delay);
                $(image).addClass('animated flipInX');
            });

        },
        template: ' <div class="col-md-6"> <div class="image"><a href="{{link}}" target="_blank"><img src="{{image}}" /><div class="likes">&hearts; {{likes}}</div></a></div></div>'
    });
    userFeed.run();
    //        $(function() {
    //loadMore(); // launches the loadMore function below.
    //});
    //function myFunction() {
    //    loadMore();
    //}
    //myButton.on('click', function() {
    //   
    //  loadMore();
    //});
    //
    //function loadMore() {
    //if(userFeed.hasNext()) // check if there are more pictures available
    //userFeed.next(); // if so, loads them
    ////setTimeout("loadMore()",10000); // 10 seconds timeout before running the function again
    //}
});