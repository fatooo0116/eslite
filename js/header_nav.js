/**
 *      Header background fadeIn
 *
 *
 *
 */

(function($){
    $(document).ready(function(){

       var secs  = $("section");
       var section_top = 0;

       if($("#home").length>0){
           if(secs.length>2){
               section_top = $(secs[1]).offset().top;

            $(window).scroll(function(){
                var header_top = $("#masthead").offset().top;


                if(header_top > (Number(section_top) + 280)){
                    $("#masthead").addClass("bk_w");
                }else{
                    $("#masthead").removeClass("bk_w");
                }
            });
           }
       }else{
           $("#masthead").addClass("bk_w");
       }

    });
})(jQuery);