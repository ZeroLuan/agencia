/*Scroll*/
function home() {
    window.scrollTo({
        top: 0,
        behavior: "smooth"
    });
}

function sobre() {
    window.scrollTo({
        top: 714,
        behavior: "smooth"
    });
}

function oqf() {
    window.scrollTo({
        top: 1283,
        behavior: "smooth"
    });
}

function portifolio() {
    window.scrollTo({
        top: 2280,
        behavior: "smooth"
    });
}

function contato() {
    window.scrollTo({
        top: 3178,
        behavior: "smooth"
    });
}

/*SELECIONAR BOTÕES*/

//Deixei essa parte comentada porque ela estava dando muito erro, não sei como consertar.


/*$(document).ready(function() {
    $(document).on("scroll", onScroll);

    //smoothscroll
    $('li').on('click', function(e) {
        e.preventDefault();
        $(document).off("scroll");

        $('li').each(function() {
            $(this).removeClass('active');
        })
        $(this).addClass('active');

        var target = this.hash,
            li = target;
        $target = $(target);
        $('html, body').stop().animate({
            'scrollTop': $target.offset().top + 2
        }, 500, 'swing', function() {
            window.location.hash = target;
            $(document).on("scroll", onScroll);
        });
    });
});

function onScroll(event) {
    var scrollPos = $(document).scrollTop();
    $('#menu ul li').each(function() {
        var currLink = $(this);
        var refElement = $(currLink.attr("li"));
        if (refElement.position().top <= scrollPos && refElement.position().top + refElement.height() > scrollPos) {
            $('#menu ul li').removeClass("active");
            currLink.addClass("active");
        } else {
            currLink.removeClass("active");
        }
    });
}*/