jQuery(document).ready(function($) {
    $(document).ready(function(){


        //Call PrettyPhoto

        $("a[data-gal^='prettyPhoto[gallery]']").prettyPhoto({
            animation_speed: 'fast', /* fast/slow/normal */
            slideshow: 5000, /* false OR interval time in ms */
            autoplay_slideshow: false, /* true/false */
            opacity: 0.80, /* Value between 0 and 1 */
            show_title: true, /* true/false */
            allow_resize: true, /* Resize the photos bigger than viewport. true/false */
            default_width: 500,
            default_height: 344,
            counter_separator_label: '/', /* The separator for the gallery counter 1 "of" 2 */
            theme: 'dark_square', /* light_rounded / dark_rounded / light_square / dark_square / facebook */
            horizontal_padding: 20, /* The padding on each side of the picture */
            hideflash: false, /* Hides all the flash object on a page, set to TRUE if flash appears over prettyPhoto */
            wmode: 'opaque', /* Set the flash wmode attribute */
            autoplay: true, /* Automatically start videos: True/False */
            modal: false, /* If set to true, only the close button will close the window */
            deeplinking: true, /* Allow prettyPhoto to update the url to enable deeplinking. */
            overlay_gallery: true, /* If set to true, a gallery will overlay the fullscreen image on mouse over */
            social_tools: false
        });

    });

    $(window).load(function(){

        $('#slider').flexslider({
            animation: "slide",              //String: Select your animation type, "fade" or "slide"
            slideDirection: "horizontal",   //String: Select the sliding direction, "horizontal" or "vertical"
            slideshow: true,                //Boolean: Animate slider automatically
            slideshowSpeed: 3000,           //Integer: Set the speed of the slideshow cycling, in milliseconds
            animationDuration: 600,         //Integer: Set the speed of animations, in milliseconds
            directionNav: true,             //Boolean: Create navigation for previous/next navigation? (true/false)
            controlNav: false,               //Boolean: Create navigation for paging control of each clide? Note: Leave true for manualControls usage
            keyboardNav: true,              //Boolean: Allow slider navigating via keyboard left/right keys
            mousewheel: false,              //Boolean: Allow slider navigating via mousewheel
            prevText: "",                   //String: Set the text for the "previous" directionNav item
            nextText: "",                   //String: Set the text for the "next" directionNav item
            pausePlay: false,               //Boolean: Create pause/play dynamic element
            pauseText: 'Pause',             //String: Set the text for the "pause" pausePlay item
            playText: 'Play',               //String: Set the text for the "play" pausePlay item
            randomize: false,               //Boolean: Randomize slide order
            slideToStart: 0,                //Integer: The slide that the slider should start on. Array notation (0 = first slide)
            animationLoop: true,            //Boolean: Should the animation loop? If false, directionNav will received "disable" classes at either end
            pauseOnAction: true,            //Boolean: Pause the slideshow when interacting with control elements, highly recommended.
            pauseOnHover: false,            //Boolean: Pause the slideshow when hovering over slider, then resume when no longer hovering
            manualControls: "",             //Selector: Declare custom control navigation. Example would be ".flex-control-nav li" or "#tabs-nav li img", etc. The number of elements in your controlNav should match the number of slides/tabs.
            start: function(){},            //Callback: function(slider) - Fires when the slider loads the first slide
            before: function(){},           //Callback: function(slider) - Fires asynchronously with each slider animation
            after: function(){},            //Callback: function(slider) - Fires after each slider animation completes
            end: function(){}
        });

        //Portfolio rollover
        $('div#portfolio_thumbs ul li').hover(
            function(){
                $(this).find('div[class="item_info"]').stop().slideDown(600);
                return false;
            },
            function(){
                $(this).find('div[class="item_info"]').stop().slideUp(600);
                return false;
            }
        );


        //Function for the Next button
        function loadNextItem(){

            var source2 = $('#control_buttons a#next').attr("href");
            $('div#portfolio_item').slideUp(300, function(){
                $('div#item_container').empty();
                $('div#item_container').append('<div class="loading" style="display: none;"></div>');
                $('div.loading').slideDown(500);
                $('div#item_container').delay(2500).queue(function( nxt ) {
                    $(this).load(source2, function(){
                        $('#item_slider').flexslider({ controlNav: false, prevText: "<", nextText: ">" });
                        $('div#portfolio_item').slideDown(500, function(){
                            $('#item_video iframe').css('visibility','visible');
                            $('#control_buttons a#next').click(function(){
                                loadNextItem();
                                return false;
                            });
                            $('#control_buttons a#prev').click(function(){
                                loadPrevItem();
                                return false;
                            });
                            $('#control_buttons a#close').click(function(){
                                $('div#portfolio_item').slideUp(300, function(){
                                    $('div#item_container').empty();
                                    $("div#filter_wrapper").slideDown(300);
                                });
                                return false;
                            });
                        });
                    });
                    nxt();
                });
            });

        }

        //Function for the Prev button
        function loadPrevItem(){

            var source3 = $('#control_buttons a#prev').attr("href");
            $('div#portfolio_item').slideUp(300, function(){
                $('div#item_container').empty();
                $('div#item_container').append('<div class="loading" style="display: none;"></div>');
                $('div.loading').slideDown(500);
                $('div#item_container').delay(2000).queue(function( nxt ) {
                    $(this).load(source3, function(){
                        $('#item_slider').flexslider({ controlNav: false, prevText: "<", nextText: ">" });
                        $('div#portfolio_item').slideDown(500, function(){
                            $('#item_video iframe').css('visibility','visible');
                            $('#control_buttons a#next').click(function(){
                                loadNextItem();
                                return false;
                            });
                            $('#control_buttons a#prev').click(function(){
                                loadPrevItem();
                                return false;
                            });
                            $('#control_buttons a#close').click(function(){
                                $('div#portfolio_item').slideUp(300, function(){
                                    $('div#item_container').empty();
                                    $("div#filter_wrapper").slideDown(300);
                                });
                                return false;
                            });
                        });
                    });
                    nxt();
                });
            });

        }

        //Load and show portfolio pages
        $("div#portfolio_thumbs ul li a.more_info").click(function(){
            var source = $(this).attr("href");
            $('div#filter_wrapper').slideUp(300, function(){
                $('div#item_container').append('<div class="loading"></div>');
                $('html,body').animate({scrollTop: $("#portfolio-wrap").offset().top - 150},'slow', function(){
                    $('div#item_container').load(source, function(){
                        $('div.loading').remove();
                        $('#item_slider').flexslider({ controlNav: false, prevText: "<", nextText: ">" });
                        $('div#portfolio_item').slideDown(500, function(){
                            $('#item_video iframe').css('visibility','visible');
                            $('#control_buttons a#next').click(function(){
                                loadNextItem();
                                return false;
                            });
                            $('#control_buttons a#prev').click(function(){
                                loadPrevItem();
                                return false;
                            });
                            $('#control_buttons a#close').click(function(){
                                $('div#portfolio_item').slideUp(300, function(){
                                    $('div#item_container').empty();
                                    $("div#filter_wrapper").slideDown(300);
                                });
                                return false;
                            });//End: click()
                        });//End:slideDown()
                    });//End:load()
                });//End:animate()
            });//End:slideUp

            return false;
        });








        //Portfolio Engine
        $('#grid').mixitup({
            effects: ['fade', 'scale'],
            transitionSpeed: 800,
            easing: 'smooth'
        });

        //Portfolio Filter Active State
        $('ul#portfolioFilter li').click(function(){
            $('ul#portfolioFilter li').removeClass('active-filter');
            $(this).addClass('active-filter');
        });

        //Magnific Pop (Lightbox)
        $('.image-lightbox-link').magnificPopup({
            type: 'image',
            mainClass: 'mfp-with-zoom', // this class is for CSS animation below

            zoom: {
                enabled: true, // By default it's false, so don't forget to enable it

                duration: 300, // duration of the effect, in milliseconds
                easing: 'ease-in-out', // CSS transition easing function

                // The "opener" function should return the element from which popup will be zoomed in
                // and to which popup will be scaled down
                // By defailt it looks for an image tag:
                opener: function(openerElement) {
                    // openerElement is the element on which popup was initialized, in this case its <a> tag
                    // you don't need to add "opener" option if this code matches your needs, it's defailt one.
                    return openerElement.is('img') ? openerElement : openerElement.find('img');
                }
            }

        });

        $('a.std-project').click(function(){

            var target_div_id = $(this).data('target-id');
            $('#portfolio_item_container').slideUp(500);

            $('div#filter_wrapper').slideUp(300, function(){


                var project_dump_data = $('#'+target_div_id).html();
                //alert(project_dump_data);
                $('#portfolio_item_container').html(project_dump_data);
                $('#'+target_div_id+'slider').flexslider({ controlNav: false, prevText: "<", nextText: ">" });
                $('#portfolio_item_container').slideDown(500);
                $('#portfolio_item_wrap .dignity-sandbox-controls').fadeIn();

                $("html, body").animate({
                    scrollTop: $('.portfolio-wraper').offset().top-150 + "px"
                }, {
                    duration: 1500,
                    easing: "easeInOutExpo"
                });



            });

            return false;
        });

        $('#portfolio_item_wrap .dignity-sandbox-controls a').click(function(){

            $('.dignity-sandbox-controls').hide();
            $('#portfolio_item_container').slideUp(500,function(){
                $('#portfolio_item_container').html('');

                $('div#filter_wrapper').slideDown(800);
                $("html, body").animate({
                    scrollTop: $('.portfolio-wraper').offset().top-150 + "px"
                }, {
                    duration: 1500,
                    easing: "easeInOutExpo"
                });
            });


            return false;
        });


    });

});