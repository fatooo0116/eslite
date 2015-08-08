/**
 *
 *  Adjust First Section Height to Fit Window Height :
 *
 *
 */

(function($){
    $(document).ready(function(){

        var window_h = $(window).height();



        $("#home").css("height",window_h);
    });
})(jQuery);


