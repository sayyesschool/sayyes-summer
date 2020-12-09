(function ($) {
    $('.programs-tabs .programs-tabs__item').click(function () {
        $('.programs-tabs__item').removeClass('is-active');
        $(this).addClass('is-active');
        var tab = $(this).attr('data-tab');
        $('.programs-content__item').not(tab).css({ display: 'none' });
        $(tab).fadeIn(400);
    });
    $('.programs-tabs .programs-tabs__item:first-child').click();

    function teamTabMobile() {
        $('.team-tabs .team-tabs__btn').click(function () {
            $('.team-tabs__btn').removeClass('is-active');
            $(this).addClass('is-active');
            var tab = $(this).attr('data-tab');
            $('.teamtab').not(tab).css({ display: 'none' });
            $(tab).fadeIn(400);
        });
        $('.team-tabs li:first-child .team-tabs__btn').click();
    }

    var revSlider = new Swiper('.reviews-slider', {
        slidesPerView: 1,
        spaceBetween: 10,
        loop: true,
        navigation: {
            nextEl: '.reviews-slider-next',
            prevEl: '.reviews-slider-prev',
        },
    });

    var revFullSlider = new Swiper('.revfull-slider', {
        slidesPerView: 1,
        spaceBetween: 20,
        loop: true,
        navigation: {
            nextEl: '.revfull-slider-next',
            prevEl: '.revfull-slider-prev',
        },
        breakpoints: {
            701: {
                slidesPerView: 2,
            },
        },
    });

    var teamSlider = undefined;

    function initSwiper() {
        var screenWidth = $(window).width();
        if (screenWidth > 700 && teamSlider == undefined) {
            var teamSlider = new Swiper('.team-slider', {
                slidesPerView: 1,
                spaceBetween: 50,
                loop: true,
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
                breakpoints: {
                    1200: {
                        spaceBetween: 140,
                    },
                },
            });
        } else if (screenWidth < 701) {
            // teamSlider.destroy();
            teamSlider = undefined;
            console.log(teamSlider);
            teamTabMobile();
        }
    }

    //Swiper plugin initialization
    initSwiper();

    $('.text-show').click(function () {
        var $this = $(this);
        $this.toggleClass('is-active');
        $this.parents('.text-hidden').find('p').toggleClass('is-active');
        if ($this.hasClass('is-active')) {
            $this.html('Свернуть');
        } else {
            $this.html('Развернуть');
        }
    });


    var $modalForm = $('#js-modal-form');
    var $modalSuccess = $('#js-modal-success');

    $('.js-button').on('click', function() {
        $modalForm.fadeIn();
    });
    $('.js-button').on('click', function() {
        $modalForm.fadeIn();
    });

    $('#js-close-modal-form').on('click', function() {
        $modalForm.fadeOut();
    })
    $('#js-close-modal-success').on('click', function() {
        $modalSuccess.fadeOut();
    })

})(jQuery);
