var _timerVar =null;
var gunit= 0,ggutter=0;

var w_height= 4;
var j_height= 5;

jQuery(document).ready(function($){


    Render_all_box();



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

        if(top>120){

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
           // $container.isotope('layout');



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
    Render_all_box();
}



function  Render_all_box(){

    $container = $('#wdr_content');

    var unit = $container.find(".type1").eq(0).width();


    var body_w = $container.width();
    if(body_w > 768){
        var gutter = Math.floor(body_w*0.01/ 2)-1;
    }else if(768>body_w>450){
        var gutter = Math.floor(body_w*0.01)-1;
    }else{
        gutter = 5;
    }

    gunit  = unit;
    ggutter = gutter;


    /*  計算第一個文字方塊的高度  */
    var wbox = $container.find("article.type_work");
    if(wbox.length>0){
        var first_unit = 250+Number(gutter);
        first_unit = first_unit *w_height - gutter;
        wbox.css("height",first_unit);
        //alert(first_unit);
    }

    var jbox = $container.find("article.type_jouranl");
    if(jbox.length>0){
        var first_unit = 250+Number(gutter);
        first_unit = first_unit *j_height - gutter;
        jbox.css("height",first_unit);
        //alert(first_unit);
    }



    if($container.width()>768){
        $container.find("article").each(function(){
            var  w = Math.floor(gunit*2);
            if($(this).hasClass("type3")){
                var  w1 = Number(w)+gutter;
                $(this).css("width",w1);
            }

            if($(this).hasClass("type4")){
                var  w1 = Number(w)+gutter;
                var h2 = 500 + gutter;
                $(this).css({
                    "width":w1,
                    "height":h2
                });
            }

            if($(this).hasClass("type2")){
                var h2 = 500 + gutter;
                $(this).css("height",h2);
            }

            if($(this).hasClass("type3_team")){
                var  w1 = Number(w)+gutter;
                $(this).css("width",w1);
            }

            $(this).css("margin-bottom",gutter);
            $(this).find(".sep").css({
                width:gutter
            });
        });
    }else{
        $container.find("article").each(function(){
            if($(this).hasClass("type4")){
                var h2 = 500 + gutter;
                $(this).css("height",h2);
            }

            if($(this).hasClass("type2")){
                var h2 = 500 + gutter;
                $(this).css("height",h2);
            }
            $(this).css("margin-bottom",gutter);
            $(this).find(".sep").css({
                width:gutter
            });
        });
    }




    $container.isotope({
        itemSelector: '.item',
        layoutMode: 'masonry',
        masonry: {
            columnWidth:unit,
            gutter:gutter
        },
        transitionDuration: 0
    });
}


