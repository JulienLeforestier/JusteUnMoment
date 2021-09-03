document.addEventListener('DOMContentLoaded', function () {

    if ($('#bandeaucookies').length > 0) {
        $('#bandeaucookies').animate({
            bottom: 0
        }, 1000);
    }

    if ($('#confirmcookies').length > 0) {
        $('#confirmcookies').on('click', function (e) {
            e.preventDefault();
            let expiration = new Date(new Date().getTime() + 30 * 24 * 60 * 60 * 1000); // temps en millisecondes = 30jours
            document.cookie = "acceptcookies=true; expires=" + expiration.toGMTString() + "; path=/";

            $('#bandeaucookies').animate({
                bottom: '-70px'
            }, 1000);
        });
    }

    $(".dropdown").hover(function(){
        var dropdownMenu = $(this).children(".dropdown-menu");
        if(dropdownMenu.is(":visible")){
            dropdownMenu.parent().toggleClass("open");
        }
    });

});