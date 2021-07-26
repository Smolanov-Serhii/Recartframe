jQuery(document).ready(function($) {

    function QuantityNum(){
        if ($('.quantity__wrap').length){

            $( '.quantity__wrap' ).each(function( index ) {
                var col = $(this).find('input');
                var plus = $(this).find('.number-plus');
                var minus = $(this).find('.number-minus');
                var total = col.val();
                plus.click(function() {
                    total++;
                    col.val(total);
                    // $('.add-to-cart').val(total);
                    $('button.button').removeAttr("disabled");
                    if (total > 0){
                        minus.removeClass('disable');
                    }
                    col.attr('value', total);
                    $( '[name="update_cart"]' ).trigger( 'click' );
                    $( '[name="update_wishlist"]' ).trigger( 'click' );
                });
                minus.click(function() {
                    total--;
                    col.val(total);
                    // $('.add-to-cart').val(total);
                    $('button.button').removeAttr("disabled");
                    if (total <= 0){
                        minus.addClass('disable');
                    } else {
                        minus.removeClass('disable');
                    }
                    col.attr('value', total);
                    // $( '[name="update_cart"]' ).trigger( 'click' );
                    // $( '[name="update_wishlist"]' ).trigger( 'click' );
                });
            });
        }

    }
    QuantityNum();
    $("body").bind("DOMSubtreeModified", function() {
        QuantityNum();
    });

    const $bigBall = document.querySelector('.cursor__ball--big');
    const $smallBall = document.querySelector('.cursor__ball--small');
    const $hoverables = document.querySelectorAll('a, input, textarea, .add-to-cart, .play__film--video, .rent__order--button, .button-top, .owl-prev, .owl-next');

// Listeners
    document.body.addEventListener('mousemove', onMouseMove);
    for (let i = 0; i < $hoverables.length; i++) {
        $hoverables[i].addEventListener('mouseenter', onMouseHover);
        $hoverables[i].addEventListener('mouseleave', onMouseHoverOut);
    }

// Move the cursor
    function onMouseMove(e) {
        TweenMax.to($bigBall, .4, {
            x: e.clientX - 15,
            y: e.clientY - 15
        })
        TweenMax.to($smallBall, .1, {
            x: e.clientX - 5,
            y: e.clientY - 7
        })
    }

// Hover an element
    function onMouseHover() {
        TweenMax.to($bigBall, .3, {
            scale: 4
        })
    }
    function onMouseHoverOut() {
        TweenMax.to($bigBall, .3, {
            scale: 1
        })
    }
    if( $('input#datetime__start').length ) {
        var theLanguage = $('html').attr('lang');
        if (theLanguage == "de-DE") {
            $.datetimepicker.setLocale('de');
            $('input#datetime__start, input#datetime__end').datetimepicker({
                locale: 'de',
            });
        } else if (theLanguage == "ru-RU") {
            $.datetimepicker.setLocale('ru');
            $('input#datetime__start, input#datetime__end').datetimepicker({
                locale: 'ru',
            });
        } else if (theLanguage == "en-EN") {
            $.datetimepicker.setLocale('en');
            $('input#datetime__start, input#datetime__end').
            $('input#datetime__start, input#datetime__end').datetimepicker({
                locale: 'en',
            });
        }
    }
    if( $('input#date__start').length ) {
        var theLanguage = $('html').attr('lang');
        $( 'input#date__start, input#date__end' ).datepicker({ dateFormat: 'yy-mm-dd' });
        $( "input#date__start, input#date__end" ).datepicker();
        if(theLanguage == "de-DE"){
            ( function( factory ) {
                "use strict";

                if ( typeof define === "function" && define.amd ) {

                    // AMD. Register as an anonymous module.
                    define( [ "../widgets/datepicker" ], factory );
                } else {

                    // Browser globals
                    factory( jQuery.datepicker );
                }
            } )( function( datepicker ) {
                "use strict";

                datepicker.regional.de = {
                    closeText: "Schließen",
                    prevText: "&#x3C;Zurück",
                    nextText: "Vor&#x3E;",
                    currentText: "Heute",
                    monthNames: [ "Januar", "Februar", "März", "April", "Mai", "Juni",
                        "Juli", "August", "September", "Oktober", "November", "Dezember" ],
                    monthNamesShort: [ "Jan", "Feb", "Mär", "Apr", "Mai", "Jun",
                        "Jul", "Aug", "Sep", "Okt", "Nov", "Dez" ],
                    dayNames: [ "Sonntag", "Montag", "Dienstag", "Mittwoch", "Donnerstag", "Freitag", "Samstag" ],
                    dayNamesShort: [ "So", "Mo", "Di", "Mi", "Do", "Fr", "Sa" ],
                    dayNamesMin: [ "So", "Mo", "Di", "Mi", "Do", "Fr", "Sa" ],
                    weekHeader: "KW",
                    dateFormat: "dd.mm.yy",
                    firstDay: 1,
                    isRTL: false,
                    showMonthAfterYear: false,
                    yearSuffix: "" };
                datepicker.setDefaults( datepicker.regional.de );

                return datepicker.regional.de;

            } );
            $('input#date__start, input#date__end').datepicker({ language: "de"});
        } else if(theLanguage == "ru-RU"){
            ( function( factory ) {
                "use strict";

                if ( typeof define === "function" && define.amd ) {

                    // AMD. Register as an anonymous module.
                    define( [ "../widgets/datepicker" ], factory );
                } else {

                    // Browser globals
                    factory( jQuery.datepicker );
                }
            } )( function( datepicker ) {
                "use strict";

                datepicker.regional.ru = {
                    closeText: "Закрыть",
                    prevText: "&#x3C;Пред",
                    nextText: "След&#x3E;",
                    currentText: "Сегодня",
                    monthNames: [ "Январь", "Февраль", "Март", "Апрель", "Май", "Июнь",
                        "Июль", "Август", "Сентябрь", "Октябрь", "Ноябрь", "Декабрь" ],
                    monthNamesShort: [ "Янв", "Фев", "Мар", "Апр", "Май", "Июн",
                        "Июл", "Авг", "Сен", "Окт", "Ноя", "Дек" ],
                    dayNames: [ "воскресенье", "понедельник", "вторник", "среда", "четверг", "пятница", "суббота" ],
                    dayNamesShort: [ "вск", "пнд", "втр", "срд", "чтв", "птн", "сбт" ],
                    dayNamesMin: [ "Вс", "Пн", "Вт", "Ср", "Чт", "Пт", "Сб" ],
                    weekHeader: "Нед",
                    dateFormat: "dd.mm.yy",
                    firstDay: 1,
                    isRTL: false,
                    showMonthAfterYear: false,
                    yearSuffix: "" };
                datepicker.setDefaults( datepicker.regional.ru );

                return datepicker.regional.ru;

            } );
            $('input#date__start, input#date__end').datepicker({ language: "ru"},{ dateFormat: "dd.mm.yy" } );
        } else if(theLanguage == "en-EN"){
            ( function( factory ) {
                "use strict";

                if ( typeof define === "function" && define.amd ) {

                    // AMD. Register as an anonymous module.
                    define( [ "../widgets/datepicker" ], factory );
                } else {

                    // Browser globals
                    factory( jQuery.datepicker );
                }
            } )( function( datepicker ) {
                "use strict";

                datepicker.regional[ "en-AU" ] = {
                    closeText: "Done",
                    prevText: "Prev",
                    nextText: "Next",
                    currentText: "Today",
                    monthNames: [ "January", "February", "March", "April", "May", "June",
                        "July", "August", "September", "October", "November", "December" ],
                    monthNamesShort: [ "Jan", "Feb", "Mar", "Apr", "May", "Jun",
                        "Jul", "Aug", "Sep", "Oct", "Nov", "Dec" ],
                    dayNames: [ "Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday" ],
                    dayNamesShort: [ "Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat" ],
                    dayNamesMin: [ "Su", "Mo", "Tu", "We", "Th", "Fr", "Sa" ],
                    weekHeader: "Wk",
                    dateFormat: "dd/mm/yy",
                    firstDay: 1,
                    isRTL: false,
                    showMonthAfterYear: false,
                    yearSuffix: "" };
                datepicker.setDefaults( datepicker.regional[ "en-AU" ] );

                return datepicker.regional[ "en-AU" ];

            } );
            $('input#date__start, input#date__end').datepicker({ language: "en"});
        }
    }

    $('.hamburger').css('z-index', '999');
    $('.hamburger').on('click', function() {
        $('.menu').toggleClass('active');
        $('body').toggleClass('overflow');
        $('.header--nav').toggleClass('active');
        $('.language').toggleClass('active');
    });
    $('.menu__mob-close').on('click', function() {
        $('.menu').toggleClass('active');
        $('body').toggleClass('overflow');
        $('.header--nav').toggleClass('active');
        $('.language').toggleClass('active');
    });
    //Owl
     $("#reviews__slider").owlCarousel({
        items: 1,
        nav: true,
        stagePadding: 0,
        margin: 5,
        responsive:{
            990:{
                items: 1,
                nav: true,
                stagePadding: 150,
                margin: 50,
            },
            1200:{
                items: 1,
                nav: true,
                stagePadding: 300,
                margin: 50,
            },
            1400:{
                items: 1,
                nav: true,
                stagePadding: 300,
                margin: 150,
            },
            1650:{
                items: 1,
                nav: true,
                stagePadding: 500,
                margin: 220,
            }
        }
      });

     $("#related__slider").owlCarousel({
        items: 1,
        nav: false,
        stagePadding: 0,
        margin: 10,
        responsive:{
            500:{
                items: 2,
                nav: false,
                stagePadding: 60,
                margin: 20,
            },
            990:{
                items: 3,
                nav: false,
                stagePadding: 100,
                margin: 30,
            },
            1200:{
                items: 3,
                nav: false,
                stagePadding: 200,
                margin: 30,
            },
            1300:{
                items: 3,
                nav: false,
                stagePadding: 280,
                margin: 30,
            },
            1600:{
                items: 3,
                nav: false,
                stagePadding: 300,
                margin: 45,
            },
            1700:{
                items: 3,
                nav: false,
                stagePadding: 350,
                margin: 45,
            },
        }
      });

     $("#related__slider--wedding").owlCarousel({
        items: 1,
        nav: false,
        stagePadding: 0,
        margin: 10,
        responsive:{
            500:{
                items: 2,
                nav: false,
                stagePadding: 60,
                margin: 20,
            },
            990:{
                items: 2,
                nav: false,
                stagePadding: 100,
                margin: 30,
            },
            1200:{
                items: 2,
                nav: false,
                stagePadding: 200,
                margin: 30,
            },
            1300:{
                items: 2,
                nav: false,
                stagePadding: 280,
                margin: 30,
            },
            1600:{
                items: 2,
                nav: false,
                stagePadding: 300,
                margin: 45,
            },
            1700:{
                items: 2,
                nav: false,
                stagePadding: 350,
                margin: 45,
            },
        }
      });

     $('.to__top').on('click', function() {
        $('body, html').animate({scrollTop: 0}, 1500);
     });

     //Rent form checkboxes
     $('.rent__checkbox').on('click', function() {
        $(this).toggleClass('active');
     });

     //Tabs
      $(".works__content").not(":first").hide();
        $(".steps__list li").click( function(e) {
        $(".steps__list li").removeClass("current").eq($(this).index()).addClass("current");
        $(".works__content").hide().eq($(this).index()).fadeIn();
      }).eq(0).addClass("current");

    $('.video__item').on('click', function(e) {
        e.preventDefault();
        e.stopPropagation();
        $('.video__popup').fadeIn();
        $('.popup__content').eq($(this).index()).css('display', 'flex');
    });
    $('.video__popup .popup__content').on('click', function() {
        e.stopPropagation();
    });
    $('.video__popup--play').on('click', function(e) {
        e.preventDefault();
        e.stopPropagation();
        $(this).fadeOut();
        $(this).parent().find('.video__popup--banner').fadeOut();
        $(this).parent().find('.video__iframe--popup').fadeIn();
    });

    $('body').on('click', function() {
        $('.video__popup').fadeOut();
        $('.video__popup .popup__content').fadeOut();
        $('.video__popup .video__popup--banner').fadeIn();
        $('.video__popup .video__popup--play').fadeIn();
    });

    //Block show animation
     AOS.init({
        duration: 1000,
        easing: 'ease-out-sine',
        once: true,
        disable: function () {
            var maxWidth = 768;
            return window.innerWidth <= maxWidth;
        }
     });

    $('.play__video--item.fresco').on('click', function() {
        var UrlLink = $(this).attr('href');
        Fresco.show({
            url: UrlLink
        });
    });

    $('#first__block').on('click', function() {
            document.location.href = '#to__second';
            $('html, body').animate({
                scrollTop: $( $.attr(this, 'href') ).offset().top
            }, 500);
            return false;
    });

    $(document).ready(function(){
        $('.fourth__inner__container').owlCarousel({
            items: 1,
            nav: false,
            autoPlay: true,
            stagePadding: 0,
        });
    });
    // if ($('#curent-page').length){
    //     var CurrentPage = $('h1').html();
    //     $('#curent-page').val(CurrentPage);
    //     var NameLang = $('.name-input').data('currenttext');
    //     $('#input-name').html(NameLang);
    //
    //     var PhoneLang = $('.phone').data('currenttext');
    //     $('#input-phone').html(PhoneLang);
    //
    //     var EmailLang = $('.email').data('currenttext');
    //     $('#input-email').html(EmailLang);
    // }

    $('.order__photo').on('click', function() {
        let title = $('.main__titles h1').html();
        console.log(title);
        let currentItem = $(this).closest('.pricing__item').find('.top').html();
        console.log(currentItem);
        let currentPrice = $(this).closest('.pricing__item').find('h4').html();
        console.log(currentPrice);
        $('.hidden-area .current-page input').val(title);
        $('.hidden-area .current-item input').val(currentItem);
        $('.hidden-area .current-price input').val(currentPrice);
    });

    var $page = $('html, body');
    $('.js-button-top[href*="#"]').click(function() {
        $page.animate({
            scrollTop: $($.attr(this, 'href')).offset().top
        }, 400);
        return false;
    });

    $(window).scroll(function(event){
        var scroll = $(window).scrollTop();
        if (scroll < 300){
            $('.js-button-top').fadeOut(300);
        } else {
            $('.js-button-top').fadeIn(300);
        }
    });

});