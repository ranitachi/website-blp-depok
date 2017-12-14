"use strict";

var app_landing = {    
    header: 
    {
        height: function(){        
            if($("#header > .header-content").outerHeight(true) < $(window).outerHeight(true)){
                $("#header").height($(window).outerHeight(true));
            }else{
                $("#header").height("auto");
            }
        },
        scroll: function(){                        
            $(window).scroll(function(){
                if($(window).width() > 992){
                    if($(window).scrollTop() > 100) {
                        $("#header .header").addClass("fixed animated fadeInDown");
                    } else {
                        $("#header .header").removeClass("fixed fadeInDown");
                    }
                }else{
                    $("#header .header").removeClass("fixed fadeInDown");
                }
            });            
        },
        navigation: function(){
            var self = this;                        
            $(".navigation-toggle").on("click",function(){
                $("#header .header .navigation").toggleClass("show");
                self.height();
            });
            
            $(".navigation a").on("click",function(){
                var href = $(this).attr("href");
                $("html, body").animate({
                    scrollTop: $(href).offset().top
                }, 500);
            });
                                    
        }
    }
    
};

$(function(){        
    app_landing.header.height();       
    app_landing.header.scroll();       
    app_landing.header.navigation();
});

$(window).resize(function(){            
    app_landing.header.height();
});

var delayBeforeFire = (function(){
    var timer = 0;
    
    return function (callback, ms) {
        clearTimeout(timer);
        timer = setTimeout(callback, ms);
    };
})();