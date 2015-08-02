(function($){
    $(document).ready(function(){

        $("#wdr_owl-room").owlCarousel({
            items : 3,
            navigation : false,
            pagination : false,
            loop: true,
            responsive : {
                // breakpoint from 0 up
                0 : {
                    items : 3,
                },
                480 : {
                    items : 1,
                },
                768 : {
                    items : 2,
                },
                1024 : {
                    items : 3,
                }
            }
        });



        if($("#wdr_homeslider").length>0){
            $("#wdr_homeslider").owlCarousel({
                items : 4,
                navigation : false,
                pagination : false,
                loop: true,
                responsive : {
                    // breakpoint from 0 up
                    0 : {
                        items : 2,
                    },
                    480 : {
                        items : 4,
                    },
                    768 : {
                        items : 4,
                    },
                    1024 : {
                        items : 4,
                    }
                }
            });
        }


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



    });
})(jQuery);