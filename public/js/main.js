var typed_2 = new Typed('#typed_2', {
    strings: [
        'Web Developer',
        'Freelancer'
    ],

    typeSpeed: 75,
    backSpeed: 75,

    loop: true
})

var typed = new Typed('#typed', {
    strings: [
        ' AMAZING TOGETHER...',
        'UNIQUE...'

    ],

    typeSpeed: 75,
    backSpeed: 75,

    loop: true
})


$('.success-alert').fadeIn().delay(6000).fadeOut().delay(6000);



$(document).ready(function(e) {
    $win = $(window);
    $navList = $('#nav-list');
    $toggleButton = $('#toggle-button');
    $toggleBar = $('#toggle-bar');
    $navitem1 = $('.nav-list1');
    $toggleButton.click(function (e) {
        $navList.toggleClass("nav-list-gone")
        $navitem1.toggleClass("nav-list-gone")
        $toggleBar.toggleClass("fa-times")
    });
});


