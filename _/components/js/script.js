(function($){
    $(document).ready(function(){

        $("#wdr_owl-room").owlCarousel({
            navigation : false,
            slideSpeed : 300,
            paginationSpeed : 400,
            items : 3, //10 items above 1000px browser width
            itemsDesktop : [1000,2], //5 items between 1000px and 901px
            itemsDesktopSmall : [900,2], // betweem 900px and 601px
            itemsTablet: [600,1], //2 items between 600 and 0
            itemsMobile : [450,1] // itemsMobile disabled - inherit from itemsTablet option
        });






        //if($("#wdr_homeslider").length>0){
            $("#wdr_homeslider").owlCarousel({
                navigation : false,
                slideSpeed : 300,
                paginationSpeed : 400,
                items : 4, //10 items above 1000px browser width
                itemsDesktop : [1000,4], //5 items between 1000px and 901px
                itemsDesktopSmall : [900,2], // betweem 900px and 601px
                itemsTablet: [600,2], //2 items between 600 and 0
                itemsMobile : false // itemsMobile disabled - inherit from itemsTablet option
            });
                /*
                itemsCustom : [
                    [0, 2],
                    [450, 2],
                    [600, 2],
                    [700, 4],
                    [1000, 4],
                    [1200, 4]
                ],
                navigation : false
                */

        //}



            if($("#home_tab_slider").length>0){
                var home_tab = $("#home_tab_slider").owlCarousel({
                                navigation : false,
                                slideSpeed : 300,
                                paginationSpeed : 400,
                                singleItem:true
                            });

                var tab  = $("#home_tab");
                tab.find(".tab").on("click",function(){
                    $(this).addClass("active").siblings().removeClass("active");
                    var idx = $(this).index();

                    home_tab.trigger("owl.goTo",idx);
                });
            }




        //if($(".owl-carousel").length>0){
            $(".room-carousel").owlCarousel({
                navigation : false, // Show next and prev buttons
                slideSpeed : 300,
                paginationSpeed : 400,
                singleItem:true
            });


        //}


        if($("#rest_slider").length>0){
            $("#rest_slider").owlCarousel({
                navigation : false, // Show next and prev buttons
                slideSpeed : 300,
                paginationSpeed : 400,
                singleItem:true,
                autoPlay:true,
                slideSpeed:300,
                pagination:false
            });
        }



        if($("#wdr_oneslider").length>0){
            $("#wdr_oneslider").owlCarousel({
                navigation : false, // Show next and prev buttons
                slideSpeed : 300,
                paginationSpeed : 400,
                singleItem:true
            });
        }


        if($(".room_slider").length>0){
            var roomslider = $(".room_slider").owlCarousel({

                                navigation : false, // Show next and prev buttons
                                slideSpeed : 300,
                                paginationSpeed : 400,
                                singleItem:true
                            });

            $(".thumbnail_btn ul li a").on("click",function(e){
                e.preventDefault();

                var idx = $(this).parent().index();

                roomslider.trigger("owl.goTo",idx);
            });
        }





        $(".dignity-showcase").owlCarousel({
            navigation : false,
            slideSpeed : 300,
            paginationSpeed : 400,
            items : 4, //10 items above 1000px browser width
            itemsDesktop : [1000,4], //5 items between 1000px and 901px
            itemsDesktopSmall : [900,3], // betweem 900px and 601px
            itemsTablet: [600,3], //2 items between 600 and 0
            itemsMobile : false // itemsMobile disabled - inherit from itemsTablet option
        });



        var $container =  $('.grid');
        $container.isotope({
            // options
            itemSelector: '.grid-item',
            layoutMode: 'fitRows'
        });
        $('.filter-button-group').on( 'click', 'button', function() {
            var filterValue = $(this).attr('data-filter');
            $container.isotope({ filter: filterValue });
            $(this).addClass("active").siblings().removeClass("active");
        });






        $("#home_activity .wdr_bkimg").parallax("50%", 0.4);
        $("#home_textslider .wdr_bkimg").parallax("50%", 0.4);
        $("#home_tab .wdr_bkimg").parallax("50%", 0.4);
        $("#home_bkimg .wdr_bkimg").parallax("50%", 0.4);


    });
})(jQuery);