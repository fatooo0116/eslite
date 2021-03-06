<?php
include "header.php"
?>


<div class="" id="home_onepage" >

<div id="gallery"></div>


    <div id="home"    style="height: 761px; " class="dignity-page-section splash-page   right-split">
        <div class="vertical-center ">
            <div class="clear">
            <div class="row align-right tools">
                   <div class="col-sm-4  ">
                       <a href="#" class="clear" >
                           <div class="pull-left"><div class="outter"><span class="icon-clipboard105"></span></div></div>
                           <div class="pull-left btn-text">線上訂房</div>
                       </a>
                   </div>
                   <div class="col-sm-4 ">
                       <a href="#" class="clear">

                           <div class="pull-left"><div class="outter"><span class="icon-living1"></span></div></div>
                           <div class="pull-left btn-text">行旅導覽</div>
                       </a>
                   </div>
                   <div class="col-sm-4 ">
                       <a href="#" class="clear">

                           <div class="pull-left"><div class="outter"><span class="icon-movie44"></span></div></div>
                           <div class="pull-left btn-text">光影導讀</div>
                       </a>
                   </div>

            </div>
            </div>




            <div class="row align-right">
                <div class="text-rotator-fade dark-txt light-heading  uppercase add-top-small add-bottom-small">
                    <h3  class="text-cht web-hcht" >讀萬卷書<br>行萬里路</h3>
                    <h3 class="text-eng  align-right clear ag_semibold">
                        <span>To read is to live</span><span> a thousand lives.</span>
                    </h3>
                    <h3 class="text-eng  align-right clear ag_semibold">
                        <span>To travel is to </span><span>discover the world.</span>
                    </h3>
                </div>
                    <span style="line-height: 1.5em;"></span>
                </div><div class="row align-right">
                <span style="line-height: 1.5em;">
                    <a href="#home_top" class="btn btn-rounded scroll ">Go</a>
                </span>
                <span style="line-height: 1.5em;"></span>
            </div>
        </div>


        <div class="home_bottom_left">
            <ul class="clear pull-right  lang  ">
                <li><a href="#">繁體中文</a></li>
                <li><a href="#">簡體中文</a></li>
                <li><a href="#" >ENGLISH</a></li>
                <li><a href="#">日本語</a></li>
            </ul>
        </div>
    </div>



    <section id="home_top" class="tc">
        <div class="container">
            <div class="row">
                <div class="col-sm-12  tc">
                    <div class="hlogo"><img src="images/onepage/toplogo.jpg" style="width:180px;"></div>
                    <div class="slogan">
                        <h3  class="ag_semibold" >To read is to live a thousand lives</h3>
                        <h3 class="ag_semibold" >To travel is to discover the world.</h3>
                    </div>
                    <div class="subtitle web-hcht">讀萬卷書，行萬里路</div>
                </div>
            </div>
        </div>






        <script>
            (function($){
                $(document).ready(function(){
                    $('.dignity-showcase').owlCarousel({
                        navigation : false,
                        pagination: false,
                        responsive: true,
                        items: 4,
                        touchDrag: true,
                        mouseDrag: true,
                        itemsDesktop: [3000,8],
                        itemsDesktopSmall: [1024,6],
                        itemsTablet:[800,3],
                        itemsTabletSmall: [600,2],
                        itemsMobile: [360,1],
                        autoPlay: true
                    });
                });
            })(jQuery);
        </script>
        <style>


            .dignity-showcase{
                margin-bottom:40px;
            }

            /*THUMB CAROUSEL*/
            .thumb-carousel-wrap{
                margin-top: 30px;
            }
            .thumb-title{
                position: absolute;
                width: 100%;
                height: 100%;
                top: 0;
                text-align: center;
            }
            .thumb-title > h5{
                opacity: 0;
                margin-top: 30%;
                -webkit-transition: all .4s ease-in-out;
                -moz-transition: all .4s ease-in-out;
                -ms-transition: all .4s ease-in-out;
                -o-transition: all .4s ease-in-out;
                transition: all .4s ease-in-out;
            }

            .thumb-title > h5 > span{
                color: #fff;
                font-size: 12px;
                letter-spacing: 2px;
                font-weight: 200;
                line-height: 19px;
                font-family:"OpenSansLight";
                text-transform: uppercase;
                padding: 8px 15px;
                border: solid 1px #fff;
            }
            .item:hover > a > .thumb-title{
                -webkit-transition: all .4s ease-in-out;
                -moz-transition: all .4s ease-in-out;
                -ms-transition: all .4s ease-in-out;
                -o-transition: all .4s ease-in-out;
                transition: all .4s ease-in-out;
            }
            .item:hover > a > .thumb-title > h5{
                opacity: 1;
                -webkit-transition: all .4s ease-in-out;
                -moz-transition: all .4s ease-in-out;
                -ms-transition: all .4s ease-in-out;
                -o-transition: all .4s ease-in-out;
                transition: all .4s ease-in-out;
            }

        </style>
        <div class='dignity-showcase' >

            <div class='item  animated activate bounceInUp' data-fx='bounceInUp'>
                <a data-lightbox="owl1" href='images/onepage/x11.jpg'>
                    <img alt='Title Here' title='Title Here' class='img-responsive' src='images/onepage/x1.jpg'>
                    <div class='thumb-title'><h5><span>Title Here</span></h5></div>
                </a>
            </div>


            <div class='item  animated activate bounceInDown' data-fx='bounceInDown'>
                <a data-lightbox="owl1" href='images/onepage/x22.jpg'>
                    <img alt='Title Here' title='Title Here' class='img-responsive' src='images/onepage/x2.jpg'>
                    <div class='thumb-title'><h5><span>Title Here</span></h5></div>
                </a>
            </div>


            <div class='item  animated activate bounceInUp' data-fx='bounceInUp'>
                <a data-lightbox="owl1" href='images/onepage/x33.jpg'>
                    <img alt='Title Here' title='Title Here' class='img-responsive' src='images/onepage/x3.jpg'>
                    <div class='thumb-title'><h5><span>Title Here</span></h5></div>
                </a>
            </div>
            <div class='item  animated activate bounceInDown' data-fx='bounceInDown'>
                <a data-lightbox="owl1" href='images/onepage/x44.jpg'>
                    <img alt='Title Here' title='Title Here' class='img-responsive' src='images/onepage/x4.jpg'>
                    <div class='thumb-title'><h5><span>Title Here</span></h5></div>
                </a>
            </div>
            <div class='item  animated activate bounceInDown' data-fx='bounceInDown'>
                <a data-lightbox="owl1" href='images/onepage/x55.jpg'>
                    <img alt='Title Here' title='Title Here' class='img-responsive' src='images/onepage/x5.jpg'>
                    <div class='thumb-title'><h5><span>Title Here</span></h5></div>
                </a>
            </div>
            <div class='item  animated activate bounceInDown' data-fx='bounceInDown'>
                <a data-lightbox="owl1" href='images/onepage/x66.jpg'>
                    <img alt='Title Here' title='Title Here' class='img-responsive' src='images/onepage/x6.jpg'>
                    <div class='thumb-title'><h5><span>Title Here</span></h5></div>
                </a>
            </div>
            <div class='item  animated activate bounceInUp' data-fx='bounceInUp'>
                <a data-lightbox="owl1" href='images/onepage/x77.jpg'>
                    <img alt='Title Here' title='Title Here' class='img-responsive' src='images/onepage/x7.jpg'>
                    <div class='thumb-title'><h5><span>Title Here</span></h5></div>
                </a>
            </div>
            <div class='item  animated activate bounceInDown' data-fx='bounceInDown'>
                <a data-lightbox="owl1" href='images/onepage/x88.jpg'>
                    <img alt='Title Here' title='Title Here' class='img-responsive' src='images/onepage/x8.jpg'>
                    <div class='thumb-title'><h5><span>Title Here</span></h5></div>
                </a>
            </div>

        </div>



        <a href="#" class="es_btn">優惠特價</a>
    </section>










    <section  id="home_tab"  class="wdr_bkimg_outter " >
        <div class="wdr_bkimg">

                <div class="es_title">
                    <h2  class="tc web-hcht">關於行旅</h2>
                    <div class="title_sep"></div>
                    <div class="desc  tc ">
                        養身在動，養心在靜。從容體驗優雅的藝文空間，內蘊雍容，款待身心。<br/>
                        誠品行旅，一處對美好生活飽藏無限想像之所在。<br/>
                    </div>
                    <div class="dep_dotted hide"></div>
                </div>


            <div class="box_tab">
                <div   class="row nav nav-tabs" role="tablist">
                    <div class="col-sm-4 tab  active">
                        <div>
                            <a href="#home" aria-controls="home" role="tab" data-toggle="tab">
                                <span class="icon-opened17"></span>
                            </a>
                        </div>
                        <h3 >大隱於市，行旅源起</h3>
                        <div class="pointer"></div>
                    </div>
                    <div class="col-sm-4 tab">
                        <div>
                        <a  href="#profile" aria-controls="profile" role="tab" data-toggle="tab">
                            <span class="icon-road29"></span>
                        </a>
                        </div>
                        <h3 >文創園區，行旅座落</h3>
                        <div class="pointer"></div>
                    </div>
                        <div class="col-sm-4 tab">
                            <div>
                                <a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">
                                    <span class="icon-artistic19"></span>
                                </a>
                            </div>
                        <h3 >藝術氛圍，人文特色</h3>
                        <div class="pointer"></div>
                        </div>
                </div>
            </div>
        </div>
        <div class="box_tab_content">
            <!-- Tab panes -->

            <div  id="home_tab_slider" class="owl-carousel owl-theme">
                <div class="item">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-6 about_text ">
                                <p>"最高級的休閒娛樂形式就是靜下來感受世界 ...... --柏拉圖"<br/>
                                "城市的價值在於文化底蘊的呈現 ... ... --貝聿銘"</p>

                                <p>第一家 聚合人文閱讀 文創展演 音樂電影 綠意自然<br/>
                                體驗生命感動的藝文旅館<br/>
                                誠品行旅<br/>
                                承載台北古老歷史與悠久文化的松山菸廠<br/>
                                迎向國際文創產業與人才培育的文化園區<br/>
                                體現台灣風土民情 連結國際文創風華</p>

                                <p>在這裏
                                藍天透射的晨光 水珠四溢的噴泉 綠蔭襯托的荷花池<br/>
                                自然生態與歷史古蹟的氣息 在四季與天地之間環繞<br/>
                                工藝實演 將傳統技藝的經典得以親近<br/>
                                坐擁書堆 讓追求知識的渴求得以滿足<br/>
                                藝術電影 音樂表演<br/>
                                帶領我們走向心靈的探索 追尋喜悅的幸福人生</p>
                            </div>
                            <div class="col-sm-6 about_thumbnails">
                                <div class="col-xs-4"><a href="images/onepage/5sense/1_1024.jpg" data-lightbox="about1" ><img src="images/onepage/5sense/1_125.jpg" alt=""  /></a></div>
                                <div class="col-xs-4"><a href="images/onepage/5sense/2_1024.jpg" data-lightbox="about1" ><img src="images/onepage/5sense/2_125.jpg" alt=""  /></a></div>
                                <div class="col-xs-4"><a href="images/onepage/5sense/3_1024.jpg" data-lightbox="about1" ><img src="images/onepage/5sense/3_125.jpg" alt=""  /></a></div>
                                <div class="col-xs-4"><a href="images/onepage/5sense/4_1024.jpg" data-lightbox="about1" ><img src="images/onepage/5sense/4_125.jpg" alt=""  /></a></div>
                                <div class="col-xs-4"><a href="images/onepage/5sense/6_1024.jpg" data-lightbox="about1" ><img src="images/onepage/5sense/6_125.jpg" alt=""  /></a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-6 about_text ">
                                <p>誠品行旅位於松山文創園區內，緊鄰誠品生活松菸店，紅點設計博物館，松菸倉庫和國父紀念館，
                                    近鄰台北101，世貿中心，誠品信義與敦南書店。</p>
                                <p>建於1937年的松山菸廠，曾經是台灣最重要的香菸產出地，古蹟見證了台灣數十載的演變，收納了無數人的半生歲月，
                                    保存完好的建築風格，展現現代主義的簡潔典雅，中庭的巴洛克式花園與廠內豐富的植栽，更曾為多部電影的取景地。</p>
                                <p>2011年轉型為松山文創園區，文創產業的進駐，為老建築提供新動力，更是創新能量的展演平台。</p>
                                <p>2015年於松山文創園區，誠品行旅開幕，在歷史古蹟與蒼鬱林木之間，懷抱對土地雨過往的感謝與尊重，落足台北最後的秘密花園。</p>
                            </div>
                            <div class="col-sm-6 about_thumbnails">
                                <div class="col-xs-4"><a href="images/onepage/5sense/1_1024.jpg" data-lightbox="about1" ><img src="images/onepage/5sense/1_125.jpg" alt=""  /></a></div>
                                <div class="col-xs-4"><a href="images/onepage/5sense/2_1024.jpg" data-lightbox="about1" ><img src="images/onepage/5sense/2_125.jpg" alt=""  /></a></div>
                                <div class="col-xs-4"><a href="images/onepage/5sense/3_1024.jpg" data-lightbox="about1" ><img src="images/onepage/5sense/3_125.jpg" alt=""  /></a></div>
                                <div class="col-xs-4"><a href="images/onepage/5sense/4_1024.jpg" data-lightbox="about1" ><img src="images/onepage/5sense/4_125.jpg" alt=""  /></a></div>
                                <div class="col-xs-4"><a href="images/onepage/5sense/6_1024.jpg" data-lightbox="about1" ><img src="images/onepage/5sense/6_125.jpg" alt=""  /></a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-6 about_text ">
                                <p>33誠品行旅位於松山文創園區內，緊鄰誠品生活松菸店，紅點設計博物館，松菸倉庫和國父紀念館，
                                    近鄰台北101，世貿中心，誠品信義與敦南書店。</p>
                                <p>建於1937年的松山菸廠，曾經是台灣最重要的香菸產出地，古蹟見證了台灣數十載的演變，收納了無數人的半生歲月，
                                    保存完好的建築風格，展現現代主義的簡潔典雅，中庭的巴洛克式花園與廠內豐富的植栽，更曾為多部電影的取景地。</p>
                                <p>2011年轉型為松山文創園區，文創產業的進駐，為老建築提供新動力，更是創新能量的展演平台。</p>
                                <p>2015年於松山文創園區，誠品行旅開幕，在歷史古蹟與蒼鬱林木之間，懷抱對土地雨過往的感謝與尊重，落足台北最後的秘密花園。</p>
                            </div>
                            <div class="col-sm-6 about_thumbnails">
                                <div class="col-xs-4"><a href="images/onepage/5sense/1_1024.jpg" data-lightbox="about1" ><img src="images/onepage/5sense/1_125.jpg" alt=""  /></a></div>
                                <div class="col-xs-4"><a href="images/onepage/5sense/2_1024.jpg" data-lightbox="about1" ><img src="images/onepage/5sense/2_125.jpg" alt=""  /></a></div>
                                <div class="col-xs-4"><a href="images/onepage/5sense/3_1024.jpg" data-lightbox="about1" ><img src="images/onepage/5sense/3_125.jpg" alt=""  /></a></div>
                                <div class="col-xs-4"><a href="images/onepage/5sense/4_1024.jpg" data-lightbox="about1" ><img src="images/onepage/5sense/4_125.jpg" alt=""  /></a></div>
                                <div class="col-xs-4"><a href="images/onepage/5sense/6_1024.jpg" data-lightbox="about1" ><img src="images/onepage/5sense/6_125.jpg" alt=""  /></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>









<section id='wdr_isotope' class='dignity-page-section page-section second-page ' style='background: #FFFFFF;'>
        <div class="es_title">
            <h2  class="tc web-hcht">風格啟程 &#183;五感綻放</h2>
            <div class="title_sep"></div>
            <div class="desc  tc ">
                城市的精彩從check in行旅開始。<br/>
                緊鄰誠品生活松菸店，松菸文創園區，紅點設計博物館，信義計畫區，創意，閱讀，音樂，電影，各式選擇近在咫尺。<br/>
            </div>
            <div class="dep_dotted "></div>
        </div>


    <div class='portfolio-wraper '>
        <div class='clearfix'></div>
        <section class='inner-section'>
            <div class='container'>
                <div id='portfolio_item_wrap' class='clearfix'>
                    <div class='dignity-sandbox-controls'><a href='#'>X</a></div>
                    <div id='portfolio_item_container' class='clearfix'></div>
                </div>
                <div id='filter' class='clearfix '>
                    <div id='filter_wrapper'>
                        <ul id='portfolioFilter'>
                            <li class='filter' data-filter='all'>All</li>
                            <li class='filter web-cht' data-filter='s1'>人文風景</li>
                            <li class='filter web-cht' data-filter='s2'>藝術展開</li>
                            <li class='filter web-cht' data-filter='s3'>自然甦醒</li>
                            <li class='filter web-cht' data-filter='s4'>創意薈萃</li>
                            <li class='filter web-cht' data-filter='s5'>修習提案</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <div class='clearfix'></div>

        <section id='portfolio-wrap' class='animated' data-fx='slideInLeft'>
            <div id='portfolio_thumbs'>
                <ul id='grid' class='sortablePortfolio clearfix'>
                    <li class='mix s1 ' >
                        <a href='#' class='std-project' data-target-id='dignity-portfolio-item91'>
                            <img alt='dignissim enim nec' title='dignissim enim nec'  src='images/onepage/f1.jpg'/>
                        </a>
                        <a href='#' class='std-project' data-target-id='dignity-portfolio-item91'>
                            <div class='item_info'>
                                <h3><span>dignissim enim nec</span></h3>
                                <p><span>Image Slider</span></p>
                            </div>
                        </a>


                    </li>
                    <li class='mix s2 ' >
                        <a href='#' class='std-project' data-target-id='dignity-portfolio-item92'>
                            <img alt='dignissim enim nec' title='dignissim enim nec'  src='images/onepage/f6.jpg'/>
                        </a>
                        <a href='#' class='std-project' data-target-id='dignity-portfolio-item92'>
                            <div class='item_info'>
                                <h3><span>dignissim enim nec</span></h3>
                                <p><span>Image Slider</span></p>
                            </div>
                        </a>
                    </li>



                    <li class='mix s3' >
                        <a href='#' class='std-project' data-target-id='dignity-portfolio-item93'>
                            <img alt='dignissim enim nec' title='dignissim enim nec'  src='images/onepage/f4.jpg'/>
                        </a>
                        <a href='#' class='std-project' data-target-id='dignity-portfolio-item93'>
                            <div class='item_info'>
                                <h3><span>dignissim enim nec</span></h3>
                                <p><span>Image Slider</span></p>
                            </div>
                        </a>
                    </li>


                    <li class='mix s5 ' >
                        <a href='#' class='std-project' data-target-id='dignity-portfolio-item94'>
                            <img alt='dignissim enim nec' title='dignissim enim nec'  src='images/onepage/f5.jpg'/>
                        </a>
                        <a href='#' class='std-project' data-target-id='dignity-portfolio-item94'>
                            <div class='item_info'>
                                <h3><span>dignissim enim nec</span></h3>
                                <p><span>Image Slider</span></p>
                            </div>
                        </a>
                    </li>




                    <li class='mix s4 ' >
                        <a href='#' class='std-project' data-target-id='dignity-portfolio-item95'>
                            <img alt='dignissim enim nec' title='dignissim enim nec'  src='images/onepage/f3.jpg'/>
                        </a>
                        <a href='#' class='std-project' data-target-id='dignity-portfolio-item95'>
                            <div class='item_info'>
                                <h3><span>dignissim enim nec</span></h3>
                                <p><span>Image Slider</span></p>
                            </div>
                        </a>
                    </li>
                </ul>





                <ul class="slider">
                    <li>
                        <div id='dignity-portfolio-item91' class='hidden'>
                            <div class='row dignity-portfolio-item'>
                                <article class='col-md-7 text-center clearfix'><div id='dignity-portfolio-item91slider'  class='item_slider'>
                                        <ul class='slides'>
                                            <li><img src='images/h1.jpg' class='img-responsive' alt='dignissim enim nec' title='dignissim enim nec' /></li>
                                        </ul>
                                    </div></article>
                                <article class='col-md-5 text-left'>
                                    <div class='row light-txt medium-txt add-top-small add-bottom-small' >
                                        人文之旅，深度風景
                                    </div>
                                    <div class='row border-bottom-light add-bottom-small pad-bottom-small' ><span class='wrap-txt highlight-bg white-txt' >HTML</span><span class='wrap-txt highlight-bg white-txt' >CSS3</span><span class='wrap-txt highlight-bg white-txt' >Web Designing</span></div>
                                    <div class='row ' >給城市的探險家，喜歡深度旅行的觀察者。鄰近誠品生活松菸店，位於松山文創園區的誠品行旅，會是你旅程的最好起點。經台北市政府指定為第99處市定古蹟，這裡是台北人的秘密後花園，也是東區最大片綠地。松山菸廠規劃時即引入「工業村」概念，保存日本初現代主義的建築風格，形式簡潔，特別訂製面磚、琉璃、銅釘等建材，做工精細，散步其中可以感受昔日盛景。巴洛克花園更是不可錯過，在時間的洪流沖刷中，總有些什麼被留存下來，適宜在陽光明亮的下午走一趟巡禮之旅。</div><div class='row add-top-small' >
                                        <nav class='cl-effect-10 btn-dignity-animated'>
                                            <a data-hover='Live Preview' href='#' class='' >
                                                <span>Visit Website</span></a></nav>
                                    </div>
                                </article>
                            </div>
                        </div>
                    </li>

                    <li>
                        <div id='dignity-portfolio-item92' class='hidden'>
                            <div class='row dignity-portfolio-item'>
                                <article class='col-md-7 text-center clearfix'><div id='dignity-portfolio-item92slider'  class='item_slider'>
                                        <ul class='slides'>
                                            <li><img src='images/h2.jpg' class='img-responsive' alt='dignissim enim nec' title='dignissim enim nec' /></li>
                                        </ul>
                                    </div></article>
                                <article class='col-md-5 text-left'>
                                    <div class='row light-txt medium-txt add-top-small add-bottom-small' >
                                        藝術之旅，跨界展開
                                    </div>
                                    <div class='row border-bottom-light add-bottom-small pad-bottom-small' ><span class='wrap-txt highlight-bg white-txt' >HTML</span><span class='wrap-txt highlight-bg white-txt' >CSS3</span><span class='wrap-txt highlight-bg white-txt' >Web Designing</span></div>
                                    <div class='row ' >
                                        緊鄰誠品松菸、電影院、表演廳、書店和文創商場，這是與全方位人文音樂廳最近的旅館，結合音樂、藝術、創意，與表演藝術親密互動。由普立茲克建築獎得主伊東豊雄團隊領軍設計，結合永田音響及佐佐木睦朗構造計画等多個劇場專業團隊建構而成，提供古典音樂的原聲傳遞，也適合跨界演出、大師班、論壇講座、各式研習營、記者發表會、貴賓專屬包場活動等多功能使用。鎖定表演時段，在此感受優質專業的藝術表演。松菸店內更有黑膠音樂館，為今昔建造橋梁，提供帶得走的聽覺體驗。
                                    </div>
                                    <div class='row add-top-small' >
                                        <nav class='cl-effect-10 btn-dignity-animated'>
                                            <a data-hover='Live Preview' href='#' class='' >
                                                <span>Visit Website</span></a></nav>
                                    </div>
                                </article>
                            </div>
                        </div>
                    </li>

                    <li>
                        <div id='dignity-portfolio-item93' class='hidden'>
                            <div class='row dignity-portfolio-item'>
                                <article class='col-md-7 text-center clearfix'><div id='dignity-portfolio-item93slider'  class='item_slider'>
                                        <ul class='slides'>
                                            <li><img src='images/h5.jpg' class='img-responsive' alt='dignissim enim nec' title='dignissim enim nec' /></li>
                                        </ul>
                                    </div></article>
                                <article class='col-md-5 text-left'>
                                    <div class='row light-txt medium-txt add-top-small add-bottom-small' >
                                        自然之旅，生態甦醒
                                    </div>
                                    <div class='row border-bottom-light add-bottom-small pad-bottom-small' ><span class='wrap-txt highlight-bg white-txt' >HTML</span><span class='wrap-txt highlight-bg white-txt' >CSS3</span><span class='wrap-txt highlight-bg white-txt' >Web Designing</span></div>
                                    <div class='row ' >
                                        品嚐自然，在清晨可以看見不同的光景，每個踏出的腳步都會是旅途的紀錄。在生態池畔散步，享受清晨獨有的安靜恬淡，前身是儲水備用的消防池，今日的生態池是昆蟲與鳥禽的城居天堂，保留瑠公圳蓄水池的人文意義，也為高密度的城市提供休憩水域。松山菸廠在戰後種植大量植栽，生物棲地相當多樣化，包括熱帶、亞熱帶、暖溫帶等植物，廠區內有水塘，近年來可見夜鷺、紅冠水雞、翠鳥、小白鷺、鯽魚、鯉魚、鯰魚等生物，是相當自然的綠意環境。
                                    </div>
                                    <div class='row add-top-small' >
                                        <nav class='cl-effect-10 btn-dignity-animated'>
                                            <a data-hover='Live Preview' href='#' class='' >
                                                <span>Visit Website</span></a></nav>
                                    </div>
                                </article>
                            </div>
                        </div>
                    </li>

                    <li>
                        <div id='dignity-portfolio-item94' class='hidden'>
                            <div class='row dignity-portfolio-item'>
                                <article class='col-md-7 text-center clearfix'><div id='dignity-portfolio-item94slider'  class='item_slider'>
                                        <ul class='slides'>
                                            <li><img src='images/h3.jpg' class='img-responsive' alt='dignissim enim nec' title='dignissim enim nec' /></li>
                                        </ul>
                                    </div></article>
                                <article class='col-md-5 text-left'>
                                    <div class='row light-txt medium-txt add-top-small add-bottom-small' >
                                        創意之旅，薈萃精選
                                    </div>
                                    <div class='row border-bottom-light add-bottom-small pad-bottom-small' ><span class='wrap-txt highlight-bg white-txt' >HTML</span><span class='wrap-txt highlight-bg white-txt' >CSS3</span><span class='wrap-txt highlight-bg white-txt' >Web Designing</span></div>
                                    <div class='row ' >
                                        在電影與戲劇之外，誠品生活松菸店集聚設計師概念店與工藝工作室，新型態的營運思維，連鎖不複製，實現建築載體的更多可能。不僅是書店，更關乎生活；不僅是生活，更創造生活的種種想像。扶植在地原創品牌，統合作為發聲的平台， 專業的創作工房，巧妙呈現玻璃工藝與陶瓷工藝之美。松山文創園區內的各式展覽，設計、藝術、戲劇、音樂，吸引城市內外的創意人才，在旅行中放進一些展覽，將為您留下此時此地的限定記憶。
                                    </div>
                                    <div class='row add-top-small' >
                                        <nav class='cl-effect-10 btn-dignity-animated'>
                                            <a data-hover='Live Preview' href='#' class='' >
                                                <span>Visit Website</span></a></nav>
                                    </div>
                                </article>
                            </div>
                        </div>
                    </li>

                    <li>
                        <div id='dignity-portfolio-item95' class='hidden'>
                            <div class='row dignity-portfolio-item'>
                                <article class='col-md-7 text-center clearfix'><div id='dignity-portfolio-item95slider'  class='item_slider'>
                                        <ul class='slides'>
                                            <li><img src='images/h4.jpg' class='img-responsive' alt='dignissim enim nec' title='dignissim enim nec' /></li>
                                        </ul>
                                    </div></article>
                                <article class='col-md-5 text-left'>
                                    <div class='row light-txt medium-txt add-top-small add-bottom-small' >
                                        修習之旅，趨勢提案
                                    </div>
                                    <div class='row border-bottom-light add-bottom-small pad-bottom-small' ><span class='wrap-txt highlight-bg white-txt' >HTML</span><span class='wrap-txt highlight-bg white-txt' >CSS3</span><span class='wrap-txt highlight-bg white-txt' >Web Designing</span></div>
                                    <div class='row ' >
                                        旅行的時間可以重新來過，每日的起始隨您調配。在這裡按下暫停，聆聽自己的節奏，重新找回生活的時間感。旅行的下午是悠長無盡的，宜茶宜咖啡，當然也適宜閱讀。等一杯咖啡，從豆子開始，等待它被慢慢磨礪，散發香氣，等待它被手沖或是萃取，在時間的提煉中，等待一杯咖啡的完成。這樣的下午適合遊歷，適合隨心所欲，可以延續早晨意猶未盡的漫步，可以探索城市的更多去處，開啟心靈的旅程。
                                    </div>
                                    <div class='row add-top-small' >
                                        <nav class='cl-effect-10 btn-dignity-animated'>
                                            <a data-hover='Live Preview' href='#' class='' >
                                                <span>Visit Website</span></a></nav>
                                    </div>
                                </article>
                            </div>
                        </div>
                    </li>


                </ul>
            </div>
        </section>
    </div>
    <div class='clearfix'></div><div class='clearfix'></div>
    <section class='inner-section clearfix add-bottom add-top-half' ><div class='container'><div class='row ' ><div class='layout-column col-md-12 align-center' ><nav class='cl-effect-10 btn-dignity-animated'><a data-hover='Signup Our Newsletter' href='' class='' ><span>Don&#8217;t Miss Our Updates</span></a></nav></div></div></div></section>
    <div class='clearfix'></div></p>
</section>










    <section  id="home_activity"  class="wdr_bkimg_outter" >
        <div class="wdr_bkimg">
            <div class="es_title">
                <h2  class="tc web-hcht">藝文快訊 &#183;展演互動</h2>
                <div class="title_sep hide"></div>
                <div class="desc  tc hide">
                </div>
                <div class="dep_dotted hide"></div>
            </div>


            <div class="container">
            <div class="row">
                <div class="col-sm-2 col-xs-4 col-sm-offset-3 tc">
                    <div class="item_outter">
                        <a href="#" class="item"><i class="fa fa-paint-brush"></i></a>
                        <h3 class="">系列活動</h3>
                    </div>
                </div>
                <div class="col-sm-2 col-xs-4 tc">
                    <div class="item_outter">
                        <a href="#" class="item"><i class="fa fa-ticket"></i></a>
                        <h3 class="">展覽</h3>
                    </div>
                </div>
                <div class="col-sm-2 col-xs-4 tc">
                    <div class="item_outter">
                        <a href="#" class="item"><i class="fa fa-university"></i></a>
                        <h3 class="">園區活動</h3>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </section>




    <section id="home_room">
        <div class="es_title">
            <h2  class="tc web-hcht">客房居所</h2>
            <div class="title_sep"></div>
            <div class="desc  tc ">
                全館房間共104間，一層樓一個年代的台灣攝影作品，行旅揉合設計風格，<br/>
                依照需求及坪數，備有雅緻客房、經典客房、行政套房及人文套房，寧靜典雅，服務細緻。<br/>
            </div>
            <div class="dep_dotted "></div>
        </div>

        <a href="#" class="es_btn web-cht">優惠精選</a>

        <div  class="panel-group" id="room_accordion" role="tablist" aria-multiselectable="true">
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="hroom1">
                    <h4 class="panel-title">
                        <a role="button" data-toggle="collapse" data-parent="#room_accordion" href="#room1" aria-expanded="true" aria-controls="collapseOne"  >
                            雅緻客房
                        </a>
                    </h4>
                </div>
                <div id="room1" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="hroom1">
                    <div class="panel-body">

                        <div class="container" style="width: auto;">
                            <div class="row">
                                <div class="col-sm-8">
                                    <div class="owl-carousel room-carousel">
                                        <div><img src="images/onepage/h1.png"></div>
                                        <div><img src="images/onepage/h1.png"></div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="room_desc ">大片落地窗，城市盡入眼底，陽台收攏這座城的日夜動靜，吐納13坪的寧靜素雅。市景限定，房型分兩小床或一大床，皆附42吋高畫質電視、DVD播放機、Bose音響設備、光纖上網，Cassina設計皮椅、迷你酒吧、貼心Nespresso咖啡機，加上雜誌區，享受閱讀好時光。</div>
                                    <a href="#" class="more " >深入閱讀</a>



                                    <div class="row room_link" >
                                        <div class=" pull-left tc">
                                            <div class="item_outter">
                                                <a href="#" class="item"><i class="fa fa-video-camera"></i></a>
                                                <h3>印象</h3>
                                            </div>
                                        </div>
                                        <div class="pull-left tc">
                                            <div class="item_outter">
                                                <a href="#" class="item"><i class="fa fa-camera"></i></a>
                                                <h3>蹤跡</h3>
                                            </div>
                                        </div>
                                        <div class="pull-left tc">
                                            <div class="item_outter">
                                                <a href="#" class="item"><i class="fa fa-bullhorn"></i></a>
                                                <h3>優惠</h3>
                                            </div>
                                        </div>
                                        <div class="pull-left  tc">
                                            <div class="item_outter">
                                                <a href="#" class="item"><i class="fa fa-calendar"></i></a>
                                                <h3>訂房</h3>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="hroom2">
                    <h4 class="panel-title">
                        <a class="collapsed " role="button" data-toggle="collapse" data-parent="#room_accordion" href="#room2" aria-expanded="false" aria-controls="collapseTwo">
                           經典客房
                        </a>
                    </h4>
                </div>
                <div id="room2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="hroom2">
                    <div class="panel-body">

                        <div class="container" style="width: auto;">
                            <div class="row">
                                <div class="col-sm-8">
                                    <div class="owl-carousel room-carousel">
                                        <div><img src="images/onepage/h2.png"></div>
                                        <div><img src="images/onepage/h2.png"></div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="room_desc ">大片落地窗，城市盡入眼底，陽台收攏這座城的日夜動靜，吐納13坪的寧靜素雅。市景限定，房型分兩小床或一大床，皆附42吋高畫質電視、DVD播放機、Bose音響設備、光纖上網，Cassina設計皮椅、迷你酒吧、貼心Nespresso咖啡機，加上雜誌區，享受閱讀好時光。</div>
                                    <a href="#" class="more " >深入閱讀</a>



                                    <div class="row room_link" >
                                        <div class=" pull-left tc">
                                            <div class="item_outter">
                                                <a href="#" class="item"><i class="fa fa-video-camera"></i></a>
                                                <h3 class="">印象</h3>
                                            </div>
                                        </div>
                                        <div class="pull-left tc">
                                            <div class="item_outter">
                                                <a href="#" class="item"><i class="fa fa-camera"></i></a>
                                                <h3 class="">蹤跡</h3>
                                            </div>
                                        </div>
                                        <div class="pull-left tc">
                                            <div class="item_outter">
                                                <a href="#" class="item"><i class="fa fa-bullhorn"></i></a>
                                                <h3 class="">優惠</h3>
                                            </div>
                                        </div>
                                        <div class="pull-left  tc">
                                            <div class="item_outter">
                                                <a href="#" class="item"><i class="fa fa-calendar"></i></a>
                                                <h3 class="web-cht">訂房</h3>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="hroom3">
                    <h4 class="panel-title">
                        <a class="collapsed " role="button" data-toggle="collapse" data-parent="#room_accordion" href="#room3" aria-expanded="false" aria-controls="collapseThree">
                            行政套房
                        </a>
                    </h4>
                </div>
                <div id="room3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="hroom3">
                    <div class="panel-body">
                        <div class="container" style="width: auto;">
                            <div class="row">
                                <div class="col-sm-8">
                                    <div class="owl-carousel room-carousel">
                                        <div><img src="images/onepage/h3.png"></div>
                                        <div><img src="images/onepage/h3.png"></div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="room_desc ">大片落地窗，城市盡入眼底，陽台收攏這座城的日夜動靜，吐納13坪的寧靜素雅。市景限定，房型分兩小床或一大床，皆附42吋高畫質電視、DVD播放機、Bose音響設備、光纖上網，Cassina設計皮椅、迷你酒吧、貼心Nespresso咖啡機，加上雜誌區，享受閱讀好時光。</div>
                                    <a href="#" class="more " >深入閱讀</a>



                                    <div class="row room_link" >
                                        <div class=" pull-left tc">
                                            <div class="item_outter">
                                                <a href="#" class="item"><i class="fa fa-video-camera"></i></a>
                                                <h3 class="">印象</h3>
                                            </div>
                                        </div>
                                        <div class="pull-left tc">
                                            <div class="item_outter">
                                                <a href="#" class="item"><i class="fa fa-camera"></i></a>
                                                <h3 class="">蹤跡</h3>
                                            </div>
                                        </div>
                                        <div class="pull-left tc">
                                            <div class="item_outter">
                                                <a href="#" class="item"><i class="fa fa-bullhorn"></i></a>
                                                <h3 >優惠</h3>
                                            </div>
                                        </div>
                                        <div class="pull-left  tc">
                                            <div class="item_outter">
                                                <a href="#" class="item"><i class="fa fa-calendar"></i></a>
                                                <h3 >訂房</h3>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="hroom4">
                    <h4 class="panel-title">
                        <a class="collapsed " role="button" data-toggle="collapse" data-parent="#room_accordion" href="#room4" aria-expanded="false" aria-controls="collapseThree">
                            人文套房
                        </a>
                    </h4>
                </div>
                <div id="room4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="hroom4">
                    <div class="panel-body">

                        <div class="container" style="width: auto;">
                            <div class="row">
                                <div class="col-sm-8">
                                    <div class="owl-carousel room-carousel">
                                        <div><img src="images/onepage/h4.png"></div>
                                        <div><img src="images/onepage/h4.png"></div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="room_desc web-cht">大片落地窗，城市盡入眼底，陽台收攏這座城的日夜動靜，吐納13坪的寧靜素雅。市景限定，房型分兩小床或一大床，皆附42吋高畫質電視、DVD播放機、Bose音響設備、光纖上網，Cassina設計皮椅、迷你酒吧、貼心Nespresso咖啡機，加上雜誌區，享受閱讀好時光。</div>
                                    <a href="#" class="more " >深入閱讀</a>



                                    <div class="row room_link" >
                                        <div class=" pull-left tc">
                                            <div class="item_outter">
                                                <a href="#" class="item"><i class="fa fa-video-camera"></i></a>
                                                <h3 class="">印象</h3>
                                            </div>
                                        </div>
                                        <div class="pull-left tc">
                                            <div class="item_outter">
                                                <a href="#" class="item"><i class="fa fa-camera"></i></a>
                                                <h3 class="">蹤跡</h3>
                                            </div>
                                        </div>
                                        <div class="pull-left tc">
                                            <div class="item_outter">
                                                <a href="#" class="item"><i class="fa fa-bullhorn"></i></a>
                                                <h3 class="">優惠</h3>
                                            </div>
                                        </div>
                                        <div class="pull-left  tc">
                                            <div class="item_outter">
                                                <a href="#" class="item"><i class="fa fa-calendar"></i></a>
                                                <h3 class="">訂房</h3>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>


            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="hroom5">
                    <h4 class="panel-title">
                        <a class="collapsed " role="button" data-toggle="collapse" data-parent="#room_accordion" href="#room5" aria-expanded="false" aria-controls="collapseThree">
                            服務設施
                        </a>
                    </h4>
                </div>
                <div id="room5" class="panel-collapse collapse" role="tabpanel" aria-labelledby="hroom5">
                    <div class="panel-body">

                        <div class="container" style="width: auto;">
                            <div class="row">
                                <div class="col-sm-8">
                                    <div class="owl-carousel room-carousel">
                                        <div><img src="images/onepage/h5.png"></div>
                                        <div><img src="images/onepage/h5.png"></div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="room_desc ">大片落地窗，城市盡入眼底，陽台收攏這座城的日夜動靜，吐納13坪的寧靜素雅。市景限定，房型分兩小床或一大床，皆附42吋高畫質電視、DVD播放機、Bose音響設備、光纖上網，Cassina設計皮椅、迷你酒吧、貼心Nespresso咖啡機，加上雜誌區，享受閱讀好時光。</div>
                                    <a href="#" class="more " >深入閱讀</a>



                                    <div class="row room_link" >
                                        <div class=" pull-left tc">
                                            <div class="item_outter">
                                                <a href="#" class="item"><i class="fa fa-video-camera"></i></a>
                                                <h3 class="">印象</h3>
                                            </div>
                                        </div>
                                        <div class="pull-left tc">
                                            <div class="item_outter">
                                                <a href="#" class="item"><i class="fa fa-camera"></i></a>
                                                <h3 class="">蹤跡</h3>
                                            </div>
                                        </div>
                                        <div class="pull-left tc">
                                            <div class="item_outter">
                                                <a href="#" class="item"><i class="fa fa-bullhorn"></i></a>
                                                <h3 class="">優惠</h3>
                                            </div>
                                        </div>
                                        <div class="pull-left  tc">
                                            <div class="item_outter">
                                                <a href="#" class="item"><i class="fa fa-calendar"></i></a>
                                                <h3 class="">訂房</h3>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>


        <a href="#" class="es_btn ">線上訂房</a>
    </section>




    <section id="home_textslider"  class="wdr_bkimg_outter " >
        <div class="wdr_bkimg">
            <div class="desc">


                    <div id="wdr_oneslider" class=" owl-carousel" >
                        <div class="slide" >
                            <h3 class="">建築師 ｜ 伊東豐雄</h3>
                            <div class="sep_red_l"><img src="images/onepage/arrow.png"></div>
                            <div class="floor ">誠品行旅樣</div>
                            <div class="subtitle ">
                                Congratulation the opening of the fantastic hotel!<br/>
                                The room is like a library and so rich!
                            </div>
                            <div class="date">2015.03.30</div>
                        </div>

                        <div class="slide" >
                            <h3 class="">建築師 ｜ 伊東豐雄</h3>
                            <div class="sep_red_l"><img src="images/onepage/arrow.png"></div>
                            <div class="floor ">誠品行旅樣</div>
                            <div class="subtitle ">
                                Congratulation the opening of the fantastic hotel!<br/>
                                The room is like a library and so rich!
                            </div>
                            <div class="date">2015.03.30</div>
                        </div>


                        <div class="slide" >
                            <h3 class="">建築師 ｜ 伊東豐雄</h3>
                            <div class="sep_red_l"><img src="images/onepage/arrow.png"></div>
                            <div class="floor ">誠品行旅樣</div>
                            <div class="subtitle ">
                                Congratulation the opening of the fantastic hotel!<br/>
                                The room is like a library and so rich!
                            </div>
                            <div class="date">2015.03.30</div>
                        </div>

                </div>

            </div>
        </div>
    </section>



    <section id="home_restaurant">
        <div class="es_title">
            <h2  class="tc web-hcht">料理飲宴</h2>
            <div class="title_sep"></div>
            <div class="desc  tc ">
                從早晨六點半起，行旅的餐食就為您準備妥當，<br/>
                位於一樓的The Chapter餐廳，有著貼心的起始時間，從精緻早餐到各式道地料理一應俱全。<br/>
                The Lounge大廳書坊，也是早晚皆宜的停留選擇。<br/>
                二樓的In Between之間牛排館提供靜電乾式熟成牛排、精選藏酒，在用餐之外，也是聚餐歡飲的好選擇。<br/>
            </div>
            <div class="dep_dotted "></div>
        </div>

        <a href="#" class="es_btn ">預約洽詢</a>

        <div id="wdr_homeslider" class="wdr_owl_carousel" >
            <div class="slide" >
                <a href="#"><img src="images/onepage/r1.jpg"></a>
                <h3><a href="#" >The Lounge</a></h3>
                <div class="sep_red"></div>
                <div class="floor ">1樓</div>
                <h4 class="">大廳書坊 Lobby Lounge</h4>
                <div class="subtitle web-cht">
                    讀萬卷書，行萬里路<br/>
                    一趟自我探索的旅程
                </div>
                <div class="desc ">
                    如同受邀進入藏書豐富的起居室，空間內有近五千本藏書，原木長桌上點著色溫柔和的閱讀燈，用眼神悠遊瀏覽書架選定一本......<a href="#">深入閱讀</a>
                </div>
                <div class="btns">
                    <ul class="clear">
                        <li><a href="#"><i class="fa fa-file-text-o"></i></a></li>
                        <li><a href="#"><i class="fa fa-glass"></i></a></li>
                    </ul>
                </div>
            </div>

            <div  class="slide" >
                <a href="#"><img src="images/onepage/r2.jpg"></a>
                <h3><a href="#" >The Chapter</a></h3>
                <div class="sep_red"></div>
                <div class="floor ">1樓</div>
                <h4 class="">咖啡廳 <span class="ag_regular">Café All-day Dining</span></h4>
                <div class="subtitle web-cht">
                    晨醒時刻，亭午夜分<br/>
                    五感暫歇的心靈驛站
                </div>
                <div class="desc ">
                    仔細的花時間用餐、消磨美好時光是旅行的一部份。在這裡，清晨六點三十分就能擁有一頓完整的精緻半自助式及單點早餐。......<a href="#">深入閱讀</a>
                </div>
                <div class="btns">
                    <ul class="clear">
                        <li><a href="#"><i class="fa fa-file-text-o"></i></a></li>
                        <li><a href="#"><i class="fa fa-glass"></i></a></li>
                    </ul>
                </div>
            </div>

            <div class="slide" >
                <a href="#"><img src="images/onepage/r3.jpg"></a>
                <h3><a href="#" >In Between</a></h3>
                <div class="sep_red"></div>
                <div class="floor ">2樓</div>
                <h4>之間‧牛排館 Steakhouse</h4>
                <div class="subtitle web-cht">
                    美饌佳餚，人生況味<br/>
                    凝結滋味的旅行序曲
                </div>
                <div class="desc ">
                    在旅程之間，你為自己或者重要的人留下一個純粹的夜晚，一個需要從心底到全身都盡歡的慎重晚餐。走進這裡，觸眼所及是......<a href="#">深入閱讀</a>
                </div>
                <div class="btns">
                    <ul class="clear">
                        <li><a href="#"><i class="fa fa-file-text-o"></i></a></li>
                        <li><a href="#"><i class="fa fa-glass"></i></a></li>
                    </ul>
                </div>
            </div>

            <div  class="slide " >
                <a href="#"><img src="images/onepage/r4.jpg"></a>
                <h3><a href="#"  >The Penthouse</a></h3>
                <div class="sep_red"></div>
                <div class="floor ">16樓</div>
                <h4 class="">多功能廳 Function Room</h4>
                <div class="subtitle  web-cht">
                    私密餐敘，知識遞嬗<br/>
                    與人互動的記憶之畫
                </div>
                <div class="desc ">
                    旅途中，人與人之間的互動，必然是美好回憶中、不可或缺的一角。在這個可容納80至120人的多功能空間之中......<a href="#">深入閱讀</a>
                </div>
                <div class="btns">
                    <ul class="clear">
                        <li><a href="#"><i class="fa fa-download"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>

        <a href="#" class="es_btn ">預約洽詢</a>

    </section>






    <section id="home_bkimg"  class="wdr_bkimg_outter">
        <div class="wdr_bkimg">

        </div>
    </section>






    <section id="home_contact"  class="contactus">
        <div class="es_title">
            <h2  class="tc web-hcht">聯絡我們</h2>
            <div class="title_sep"></div>
            <div class="desc  tc ">
                若您有任何相關問題，歡迎填寫表單與我們聯繫，我們將儘速回覆，謝謝。
            </div>
            <div class="dep_dotted_g "></div>
        </div>




        <div class="contact_form container">
            <div class="row">
                <div class="col-sm-4">
                    <input type="text" name="xname"  placeholder="Name">
                    <input type="text" name="xname"  placeholder="Email">
                </div>
                <div class="col-sm-6">
                    <textarea name="msg" placeholder="Message" ></textarea>
                </div>
                <div class="col-sm-2">
                    <button type="button" class="submit ">Go</button>
                </div>
            </div>
        </div>
    </section>
</div>



<script   src="js/jquery.mb.bgndGallery.js"></script>
<script>
    (function($){
        $(document).ready(function(){



            $.mbBgndGallery.buildGallery({

                containment:"body",
                shuffle:false,
                effect:"zoom",
                timer:0000,
                effTimer:9000,
                grayScale:false,
                preserveTop:false,
                preserveWidth:false,
                controls:"#controls",
                images:[

                    "http://wdr.tw/eslite/images/onepage/home-dark-1.jpg",
                    "http://wdr.tw/eslite/images/onepage/home-dark-2.jpg",
                    "http://wdr.tw/eslite/images/onepage/home-dark-3.jpg",
                    "http://wdr.tw/eslite/images/onepage/home-dark-5.jpg"
                    /*
                    "http://designova.net/themes/wordpress/dignity/home_style_01/wp-content/uploads/2014/01/01.jpg",
                    "http://designova.net/themes/wordpress/dignity/home_style_01/wp-content/uploads/2014/01/02.jpg"
                    */

                ],
                autoStart:true
                /*
                onStart:function(){$("#controls .play").show();$("#controls .pause").hide();},
                onPause:function(){$("#controls .play").show();$("#controls .pause").hide();},
                onPlay:function(o){$("#controls .play").hide();$("#controls .pause").show();},
                onNext:function(o){o.effect="slideLeft"},
                onPrev:function(o){o.effect="slideRight"}
                */
            })


        });
    })(jQuery);
</script>

<?php
include "footer.php"
?>
