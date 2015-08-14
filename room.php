<?php
include "header.php"
?>


<div id="room" style="min-height: 800px;">
    <div class="es_title">
        <h2  class="tc web-cht">經典客房</h2>
        <div class="title_sep"></div>
        <div class="desc  tc web-cht">
            大片落地窗，讓城市盡入眼底，陽台收摟這座城市的日夜動靜,吐納13坪的寧靜素雅。<br/>
            市景限定房型分為兩小床或一大床皆附42吋高畫質電視，DVD播放機Bose音響設備光纖上網<br/>
            Cassina設計皮椅，迷你酒吧，貼心Nespresso咖啡機，加上雜誌區享受閱讀好時光。<br/>
        </div>
        <div class="dep_dotted"></div>
    </div>




    <section class="container">
    <div class="row">
    <div class="room_slider_outter col-sm-12">
        <div  class="room_slider owl-carousel">
            <div><img src="images/room/room1.png" ></div>
            <div><img src="images/room/room2.jpg" ></div>
        </div>
        <div class="thumbnail_btn clear">
            <ul>
                <li><a href=""><img src="images/room/room1.png"></a></li>
                <li><a href=""><img src="images/room/room2.jpg"></a></li>
            </ul>
        </div>
    </div>
    </div>
    </section>


    <section class="container">
    <div class="room_equip">
        <div class="row ag_regular">
            <div class="col-sm-4 item">
                <i class="fa fa-heartbeat"></i>Fitness Center
            </div>
            <div class="col-sm-4 col-xs-6 item">
                <i class="fa fa-glass"></i>Free Welcome Drink
            </div>
            <div class="col-sm-4 col-xs-6 item">
                <i class="fa fa-coffee"></i>Capsule coffee
            </div>

            <div class="col-sm-4 col-xs-6 item">
                <span class="icon-wide_screen_LCD_TV"></span>HDTV
            </div>

            <div class="col-sm-4 col-xs-6 item">
                <span class="icon-bathroom"></span>Private Bathroom
            </div>

            <div class="col-sm-4 col-xs-6 item">
                <span class="icon-electronic_in-room_safe"></span>Electronic in-room safe
            </div>

            <div class="col-sm-4 col-xs-6 item">
                <span class="icon-room_service"></span>Room Service
            </div>
            <div class="col-sm-4 col-xs-6 item">
                <span class="icon-bacony_except_3F"></span>Bacony(Except 3F)
            </div>
            <div class="col-sm-4 col-xs-6 item">
                <span class="icon-free_parking"></span>Free Parking
            </div>

            <div class="col-sm-4 col-xs-6 item">
                <span class="icon-news"></span>Free Newspaper
            </div>
            <div class="col-sm-4 col-xs-6 item">
                <span class="icon-connection"></span>Free WiFi
            </div>
            <div class="col-sm-4 col-xs-6 item">
                <span class="icon-bose"></span>Bose speakers surround sound
            </div>

            <div class="col-sm-4 col-xs-6 item">
                <span class="icon-satellite_TV_service"></span> atellite TV Service
            </div>
            <div class="col-sm-4 col-xs-6 item">
                <span class="icon-drinking_water"></span>Complimentary Drinking Water
            </div>
            <div class="col-sm-4 col-xs-6 item">
                <span class="icon-hair_dryer"></span>Hair Dryer
            </div>

            <div class="col-sm-4 col-xs-6 item">
                <span class="icon-display"></span>Wide screen LCD TV
            </div>
            <div class="col-sm-4 col-xs-6 item">
                <span class="icon-DVD_player"></span>DVD player
            </div>
            <div class="col-sm-4 col-xs-6 item">
                <span class="icon-i_phone_docking_station"></span> IPhone Docking Station
            </div>
        </div>
    </div>
    </section>



        <!-- tabs left -->
        <style>
            .tabs-left > .nav-tabs > li,
            .tabs-right > .nav-tabs > li {
                float: none;
            }

            .tabs-left > .nav-tabs > li > a,
            .tabs-right > .nav-tabs > li > a {
                min-width: 74px;
                margin-right: 0;
                margin-bottom: 3px;
            }

            #room .room_tab .tabs-left > .nav-tabs {
                float: left;
                margin-right:0px;
                border-right:0px;
                width: 20%;
                border-bottom: 0px;;
            }
            #room .room_tab .tabs-left > .nav-tabs .active > a{
                border-radius: 0;;
                box-shadow: -5px 0px #b59759;
                color:#b59759;
            }

            .tabs-left > .nav-tabs > li > a {
                margin-right: -1px;
                -webkit-border-radius: 4px 0 0 4px;
                -moz-border-radius: 4px 0 0 4px;
                border-radius: 4px 0 0 4px;
            }
            .tabs-left > .nav-tabs > li:last-child a{margin-bottom:0 !important;}

            .tabs-left > .nav-tabs > li > a:hover,
            .tabs-left > .nav-tabs > li > a:focus {
                border-color: #eeeeee #dddddd #eeeeee #eeeeee;
            }

            .tabs-left > .nav-tabs .active > a,
            .tabs-left > .nav-tabs .active > a:hover,
            .tabs-left > .nav-tabs .active > a:focus {
                border-color: #ddd transparent #ddd #ddd;
                *border-right-color: #ffffff;
            }
            .tab-content{
                float:left;
                padding:15px 15px 15px 40px ;
                min-height: 213px;
                border:1px solid #ddd;
                width: 80%;
            }
        </style>
        <section class="container">

            <div clas="row">
            <div class="room_tab">
            <div class="tabbable tabs-left  clear">
                <ul class="nav nav-tabs web-cht">
                    <li class="active"><a href="#a" data-toggle="tab">基本資訊</a></li>
                    <li ><a href="#b" data-toggle="tab">生活機能</a></li>
                    <li><a href="#c" data-toggle="tab">衛浴設備</a></li>
                    <li><a href="#d" data-toggle="tab">客房餐飲</a></li>
                    <li><a href="#e" data-toggle="tab">貼心服務</a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active" id="a">1Lorem ipsum dolor sit amet, charetra varius quam sit amet vulputate.
                        Quisque mauris augue, molestie tincidunt condimentum vitae, gravida a libero.</div>
                    <div class="tab-pane" id="b">2Secondo sed ac orci quis tortor imperdiet venenatis. Duis elementum auctor accumsan.
                        Aliquam in felis sit amet augue.</div>
                    <div class="tab-pane" id="c">3Thirdamuno, ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate.
                        Quisque mauris augue, molestie tincidunt condimentum vitae. </div>
                    <div class="tab-pane" id="d">4Thirdamuno, ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate.
                        Quisque mauris augue, molestie tincidunt condimentum vitae. </div>
                    <div class="tab-pane" id="e">5Thirdamuno, ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate.
                        Quisque mauris augue, molestie tincidunt condimentum vitae. </div>
                </div>
            </div>
        <!-- /tabs -->
        </div></div>
        </section>

    <section class="container">
    <div class="room_fun">
        <div class="row">
            <div class="col-sm-2 col-xs-6 col-sm-offset-2 tc">
                <div class="item_outter">
                    <a href="#" class="item" ><i class="fa fa-video-camera"></i></a>
                    <h3 class="web-cht" >旅人印象</h3>
                </div>
            </div>
            <div class="col-sm-2 col-xs-6 tc">
                <div class="item_outter">
                    <a href="#" class="item" ><i class="fa fa-camera"></i></a>
                    <h3 class="web-cht">旅人蹤跡</h3>
                </div>
            </div>
            <div class="col-sm-2 col-xs-6 tc">
                <div class="item_outter">
                    <a href="#" class="item" ><i class="fa fa-bullhorn"></i></a>
                    <h3 class="web-cht">優惠精選</h3>
                </div>
            </div>
            <div class="col-sm-2 col-xs-6 tc">
                <div class="item_outter">
                    <a href="#" class="item" ><i class="fa fa-calendar"></i></a>
                    <h3 class="web-cht">線上訂房</h3>
                </div>
            </div>
        </div>
    </div>
    </section>

    <section class="container">
    <div class="room_related">
        <div id="wdr_owl-room" class="wdr_owl_carousel">
            <div>
                <h3 class="web-cht">雅緻客房</h3>
                <a href="#"><img src="images/sroom1.png"></a>
                <a href="#" class="more web-cht">了解更多</a>
            </div>
            <div>
                <h3 class="web-cht">行政客房</h3>
                <a href="#"><img src="images/sroom2.png"></a>
                <a href="#" class="more web-cht">了解更多</a>
            </div>
            <div>
                <h3 class="web-cht">人文客房</h3>
                <a href="#"><img src="images/sroom3.png"></a>
                <a href="#" class="more web-cht">了解更多</a>
            </div>
            <div>
                <h3 class="web-cht">雅緻客房</h3>
                <a href="#"><img src="images/sroom1.png"></a>
                <a href="#" class="more web-cht">了解更多</a>
            </div>
            <div>
                <h3 class="web-cht">行政客房</h3>
                <a href="#"><img src="images/sroom2.png"></a>
                <a href="#" class="more web-cht">了解更多</a>
            </div>
            <div>
                <h3 class="web-cht">人文客房</h3>
                <a href="#"><img src="images/sroom3.png"></a>
                <a href="#" class="more web-cht">了解更多</a>
            </div>
        </div>
    </div>
    </section >

</div>

<?php
include "footer.php"
?>
