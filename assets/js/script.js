(function($){
    $(document).ready(function () {
        /* ================================================ TOP SCROLL ================================================ */
        //Get the button
        var topScrollBtn = $("#scroll_top");
        topScrollBtn.on('click', function () {
            $('html, body').animate({scrollTop:0}, 3000);
        });

        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function() {scrollFunction()};

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                topScrollBtn.fadeIn('slow');
            } else {
                topScrollBtn.fadeOut('slow');
            }
        }
    });

})(jQuery);