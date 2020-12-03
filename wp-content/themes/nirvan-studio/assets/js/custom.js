$('a[href*="#footer"]').on('click', function (e) {
    e.preventDefault();

    $('body, html').animate(
        {
            scrollTop: $($(this).attr('href')).offset().top+195,
        },
        1250,
        'easeInOutExpo'
    )
});