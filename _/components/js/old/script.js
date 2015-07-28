var _timerVar =null;
var gunit= 0,ggutter=0;

jQuery(document).ready(function($){



    $container = $('#wdr_content');
    var unit = $container.find(".type1").eq(0).width();


    var body_w = $container.width();
    if(body_w > 768){
        var gutter = Math.floor(body_w*0.01/ 2)-1;
    }else{
        var gutter = Math.floor(body_w*0.01)-1;
    }


    gunit  = unit;
    ggutter = gutter;

    $container.isotope({
                    itemSelector: '.item',
                    layoutMode: 'masonry',
                    masonry: {
                        columnWidth:unit,
                        gutter:gutter
                    },
                    transitionDuration: 0
                });




    if($("#wdr_content").width()>768){

        var  w = Math.floor(gunit*2);
        $container.find(".type3").each(function(){
            var  w1 = Number(w)+gutter;
            $(this).css("width",w1);
        });
        $container.find(".type4").each(function(){
            var w1 = Number(w)+gutter;
            $(this).css("width",w1);
        });
        $container.find(".type3_team").each(function(){
            var w1 = Number(w)+gutter;
            $(this).css("width",w1);
        });

   }


   $container.isotope( 'on', 'layoutComplete', function( laidOutItems ) {


       if($("#wdr_content").width()>768){

           var  w = Math.floor(gunit*2);
           $container.find(".type3").each(function(){
               var  w1 = Number(w)+ggutter;
               $(this).css("width",w1);
           });
           $container.find(".type4").each(function(){
               var w1 = Number(w)+gutter;
               $(this).css("width",w1);
           });
           $container.find(".type3_team").each(function(){
               var w1 = Number(w)+gutter;
               $(this).css("width",w1);
           });

       }

    });


    var aw = $(window).width();
    //alert(aw);


    /* super_banner */
    var h = $(window).height();
    var ww = $("#wdr_content").width();

    var super_banner = $(".super_banner");
    if(super_banner.length>0){
             h = h - 100;

            super_banner.css("height",h);
            $("nav").css("background","none");
            $("nav .navbar-collapse").css("opacity","0");


            if(h<610){
                super_banner.find(".table_inner").css({
                    "vertical-align":"top",
                    "padding-top":"20px"
                });
            }
            super_banner.find(".close_banner").bind("click",function(e){
                e.preventDefault();

                super_banner.animate({top:"-1600px"},1300,function(){
                    $("nav").css("background","#fff");
                        $("nav .navbar-collapse").css("opacity","1");
                });
            });
    }



    $("#wdr_inner").css({
        "width":ww,
        "position":"fixed"
    });


    $(window).scrollTop(0);
    $(window).scroll(function(){



        var top = $(this).scrollTop();
        if(top>20){


            if(!super_banner.hasClass("out")){
                super_banner.addClass("out");
                super_banner.css("position","absolute");
                super_banner.animate({top:"-1600px"},500,function(){
                    $("nav").css("background","#fff");
                    $("nav .navbar-collapse").css("opacity","1");


                    setTimeout(function(){
                        $(window).scrollTop(0);
                        $("#wdr_inner").css({
                            "width":"auto",
                            "position":"static"
                        });
                    },300);
                });
            }

            $("header>nav").addClass("mini");
        }else{
            $("header>nav").removeClass("mini");
        }
    });



    /*  imageLoaded ...  */
    $("body").queryLoader2({
        onComplete: function () {
            $container.isotope('layout');



            /* box text slide  up */
            $(".info").each(function(){
                var me = $(this);
                var box =  me.parent();
                var h = Number($(me).height())+30;

                $(me).animate({bottom:-h},100);
                box.on("mouseenter",function(){
                    $(me).animate({bottom:"0"},100);
                });
                box.on("mouseleave",function(){
                    $(me).animate({bottom:-h},100);
                });
            });

        }
    });




});



$(window).resize(function(){
    clearTimeout( _timerVar );
    _timerVar = setTimeout('resizeUI()', 500);
});
function resizeUI(){

    var unit = $container.find(".type1").eq(0).width();
    gunit =unit;
    var body_w = $container.width();
    if(body_w > 768){
        var gutter = Math.floor(body_w*0.01/ 2)-1;
    }else{
        var gutter = Math.floor(body_w*0.01)-1;
    }
    ggutter = gutter;


    $container.isotope({
        itemSelector: '.item',
        masonry: {
            columnWidth: unit,
            gutter:gutter
        },
        transitionDuration: 0
    });

    $container.isotope('layout');
}

