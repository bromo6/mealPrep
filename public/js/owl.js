$(document).ready(function() {
    $(".owl-one").owlCarousel({
        loop: true,
        margin: 20,
        smartSpeed: 4000,
        nav: true,
        responsive: {
            // breakpoint from 0 up
            0: {
                items: 1
            },
            // breakpoint from 480 up
            500: {
                items: 3
            },
            // breakpoint from 768 up
            1000: {
                items: 5
            }
        }
    });

    $(".owl-two").owlCarousel({
        loop: true,
        margin: 20,
        smartSpeed: 4000,
        nav: true,
        responsive: {
            // breakpoint from 0 up
            0: {
                items: 1
            },
            // breakpoint from 480 up
            500: {
                items: 3
            },
            // breakpoint from 768 up
            1000: {
                items: 5
            }
        }
    });
    $(".owl-three").owlCarousel({
        loop: true,
        margin: 20,
        smartSpeed: 4000,
        nav: true,
        responsive: {
            // breakpoint from 0 up
            0: {
                items: 1
            },
            // breakpoint from 480 up
            500: {
                items: 3
            },
            // breakpoint from 768 up
            1000: {
                items: 5
            }
        }
    })
});
