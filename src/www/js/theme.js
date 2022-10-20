$(document).ready(function () {
    $.ajaxSetup({cache: false});

    $(document).ajaxStart(function(){
        $('#ajax-loader').fadeIn();
    }).ajaxStop(function(){
        $('#ajax-loader').fadeOut();
    });

    $('#overlay').click(function(){
        var classNames = $('html').attr('class').split(" ");
        if (classNames.length > 0) {
            var className;
            for (var x in classNames) {
                className = classNames[x];
                if (className.substr(0, 8) == "js-open-") {
                    $("html").removeClass(className);
                }
            }
        }
    });


    let $header = $(".header");
    let $gotoTop = $("#goto-top");
    let gotoTop = false;
    $(window).scroll(function(){
        if($(this).scrollTop() >= 50){
            if (!gotoTop) {
                gotoTop = true;
                $gotoTop.fadeIn();
                if ($header.hasClass("header-float")) {
                    $header.addClass("header-fixed");
                }
            }
        } else {
            if (gotoTop) {
                gotoTop = false;
                $gotoTop.fadeOut();
                if ($header.hasClass("header-float")) {
                    $header.removeClass("header-fixed");
                }
            }
        }
    });

    $gotoTop.click(function () {
        $('html,body').animate({scrollTop:0},500);
    });

});



function reload() {
    window.location.reload();
}
