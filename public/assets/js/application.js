$(document).ready(function(){
    function o(){
        m > 400 && 1e3 > m && ($("#hero")).height(m),
        ($(".section")).css("min-height",m),
        ($(".section > .content")).css("min-height",m),
        $("#hero .bg").height(m);
    }
    function e(o){
        (o >= 0.5 * m  && o < m + $("#whoami").height()) ? $("header.change").addClass("white-logo") : $("header.change").removeClass("white-logo"),o >= (m + $("#whoami").height()) ? $("header.change").addClass("fixed") : $("header.change").removeClass("fixed")
    }
    function n(){
       $("#slider.flexslider").flexslider({ 
            animation: "slide",
            controlNav: "thumbnails",
            slideshowSpeed: 4e3,
            pauseOnHover: !0,
            start: function(){
                $(".flex-control-thumbs li").first().addClass("active"),
                $(".flex-active-slide").addClass("slide-active")
                t()//TODO
            },
            before: function(){
                $(".flex-control-thumbs li.active").removeClass("active");
            },
            after: function(){
                $(".flex-control-thumbs img.flex-active").parent("li").addClass("active"),
                $(".slide-active").removeClass("slide-active")
                $(".flex-active-slide").addClass("slide-active")

            }
        });

        $("#cases #slider .flex-viewport").before($("#cases #slider .flex-control-nav"));

       $("#newsSlider.flexslider").flexslider({ 
            animation: "slide",
        })
       $("#investTeam.flexslider").flexslider({ 
            animation: "slide",
        })
       $("#consultTeam.flexslider").flexslider({ 
            animation: "slide",
        })
    }
    function i(){

       $("#slider.flexslider").flexslider({ 
            animation: "slide",
            controlNav: "thumbnails",
            slideshowSpeed: 4e3,
            pauseOnHover: !0,
            start: function(){
                $(".flex-control-thumbs li").first().addClass("active"),
                $(".flex-active-slide").addClass("slide-active")
                t()//TODO
            },
            before: function(){
                $(".flex-control-thumbs li.active").removeClass("active");
            },
            after: function(){
                $(".flex-control-thumbs img.flex-active").parent("li").addClass("active"),
                $(".slide-active").removeClass("slide-active")
                $(".flex-active-slide").addClass("slide-active")

            }
        });

       $("#cases #slider .flex-viewport").before($("#cases #slider .flex-control-nav"));
    }
    function t(){
        $(".section").waypoint(function(o){
            var e = this.element.id;
            u.find("a.active").removeClass("active"),
            u.find('a[href="#' + e + '"]').addClass("active")
        })
    }
    function a(){
        








    }















    function s(){
        $("header").removeClass("mobile_open")
    }
    function r(){
        $("#menu_control").on("click", function(){
            0 == u.height() ? $("header").addClass("mobile_open") : $("header").removeClass("mobile_open")
        });
    }
    function d(){
        o(),
        $("body").removeClass("page_loading")
    }
    function f(){
        o(),
        $("body").hasClass("home"),


        $("body").removeClass("page_loading")
    }











    function h() {
        var o = $("<div>").css({
            visibility: "hidden",
            width: 100,
            overflow: "scroll"
        }).appendTo("body")
          , e = $("<div>").css({
      width: "100%"
          }).appendTo(o).outerWidth();
          return o.remove(),
          100 - e
    }
    var u = $("#main_nav")
    , fu = $("#floating")
    , m = $(window).height()
    , v = h()
    , g = $("#popup_pp");
modal_body = $("popup_pp .modal-body"),
    $(window).scroll(function(){
        var o = $(window).scrollTop();
        e(o);
    });

































    u.on("click", "a", function(o){
        o.preventDefault();
        var e = $(this).attr("href");
        '#service' == e ? $.scrollTo(e, 800, {
            offset: -10 
        }, function(){}) : $.scrollTo(e, 800, function(){}),
        s()
    }),
    fu.on("click", "div", function(o){
        o.preventDefault();
        var e = $($(this).find("a")[0]).attr("href");
        '#service' == e ? $.scrollTo(e, 800, {
            offset: -10 
        }, function(){}) : $("html, body").stop(true, true),$.scrollTo(e, 800, function(){})
    }),
    $("#arrow a").on("click", function(o){
        o.preventDefault(),
        $.scrollTo('#whoami', 800)
    }),
    $("#logo_nav").on("click", function(o){
        o.preventDefault(),
        $.scrollTo(0, 800, function(){
            s()
        })
    });




    $("#cases button").on("click",function(){
        $(this).siblings().removeClass("active");
        $(this).addClass("active");
    });





    var b = [{
        context: "small",
        match: function(){
            e($(window).scrollTop()),
            r(),
            n(),
            d()
        },
        unmatch: function(){
            f(),
            i(),
            a()
        }
    }, {
        context: "standard",
        match: function(){
            e($(window).scrollTop()) ,
            i(),
            a(),
            f()
        },
        unmatch: function(){
            r(),
            n()
        }
    }];
    MQ.init(b)
});
