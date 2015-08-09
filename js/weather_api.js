(function($){
    $(document).ready(function(){

        var wajax = 'http://api.openweathermap.org/data/2.5/weather?q=taipei&units=metric';

            $.ajax({
                url:  wajax,
                context: document.body
            }).done(function(data) {


                    var now = Date.now();
                    var timeswitch = {
                        sunrise:"",
                        sunset:""
                    };
                    if(String(data.sys.sunrise).length!=13){
                        timeswitch.sunrise = String(data.sys.sunrise)+"000";
                    }

                    var xsunset="";
                    if(String(data.sys.sunset).length!=13){
                        timeswitch.sunset = String(data.sys.sunset)+"000";
                    }

                   // console.log(now);
                   // console.log(timeswitch);

                    console.log(data);


                    if(now>Number(timeswitch.sunrise) && now<Number(timeswitch.sunset)){
                        console.log("daytime");
                    }else{
                        console.log("night");
                    }

                    var today = new Date();
                    var dd = today.getDate();
                    if(String(dd).length<2){dd = "0"+dd;}
                    var mm = today.getMonth()+1;
                    if(String(mm).length<2){mm = "0"+mm;}
                    var yyyy = today.getFullYear();
                    var all_date = yyyy+"/"+mm+"/"+dd;
                    console.log(all_date);

                    var f =data.main.temp*9/5+32;

                    $(".footer .weather").html(all_date+" "+String(data.main.temp).substring(0,2)+"°C"+" / "+String(f).substring(0,4)+"°F" );


                    console.log(f);

                });
    });
})(jQuery);