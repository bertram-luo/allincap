$(document).ready(function(){
    function o(){
        ($("#hero")).height(m);
        $("#hero .bg").height(m);
        if (m > 400 && 1e3 > m) {
            ($(".section")).css("min-height",m);
            ($(".section > .content")).css("min-height",m);
        } else {
            $("#whoami") .css("min-height", m);
            $("#whoami > .content").css("min-height", m);
            $("#news") .css("min-height", m);
            $("#news > .content").css("min-height", m);
            $("#contact") .css("min-height", m);
            $("#contact> .content").css("min-height", m);
        }
        
    }
    function setNav(o){
        (o >= 0.5 * m  && o < m + $("#whoami").height()) ? $("header.change").addClass("white-logo") : $("header.change").removeClass("white-logo"),o >= (m + $("#whoami").height()) ? $("header.change").addClass("fixed") : $("header.change").removeClass("fixed");
    }
    function n(){
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
    function caseSlider(){
       $("#aitechSlider.flexslider").flexslider({ 
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

        $("#aitechSlider .flex-viewport").before($("#aitechSlider .flex-control-nav"));
       $("#aientainSlider.flexslider").flexslider({ 
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

        $("#aientainSlider .flex-viewport").before($("#aientainSlider .flex-control-nav"));
    }

    function t(){
        $(".section").waypoint(function(o){
            var e = this.element.id;
            u.find("a.active").removeClass("active"),
            u.find('a[href="#' + e + '"]').addClass("active")
        })
    }
    function a(){

        var lastRadius = 0;
        var lastPosition = "";
        var lastFilter = "";
        $(window).scroll(function() {
            var o = $(window).scrollTop();
            n = o / m
               ,e = n * 10;

           if (o <= m) {
               if (lastPosition != "fixed"){
                   lastPosition = "fixed";
                   $("#hero .bg-box").css({"position":"fixed", "top": "0px"});
               }
               if (o < 0.1 * m){
                   if (lastRadius != 0){
                       lastRadius = 0
                       $("#hero .bg").css({"filter": "initial"});
                   }
               } else {
                   if (lastRadius != parseInt(e)){
                        lastRadius = parseInt(e);
                        $("#hero .bg").css({"filter": "blur(" + 2 * lastRadius + "px)"});
                   }
               }
           } else {
               if (lastRadius != 20){
                   lastRadius = 20;
                   $("#hero .bg").css({"filter": "blur(20px)"});
               }
               if (lastPosition != "absolute"){
                   lastPosition = "absolute";
                   $("#hero .bg-box").css({ "position": "absolute", "top": m + "px"});
               }
           }
        })
    }

    function l() {
        $("html").addClass("modal").css("padding-right", v),
        g.find(".modal-body").empty(),
        g.addClass("loading").fadeIn("fast", function() {
            g.focus()
        });
        var o = !1
    }


    function c() {
        g.fadeOut("fast", function() {
            g.removeClass("is_blog"),
            g.find(".modal-body").empty()
        }),
        $("html").removeClass("modal").css("padding-right", 0)
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
        setTimeout(function(){
            $("#aientainSlider.flexslider").css("display", "none")
            $("body").removeClass("page_loading")
        }, 500);
    }
    function f(){
        o(),
        $("body").hasClass("home"),
        setTimeout(function(){
            $("#aientainSlider.flexslider").css("display", "none")
            $("body").removeClass("page_loading")
        }, 500);
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
    modal_body = $("#popup_pp .modal-body"),
    $(window).scroll(function(){
        var o = $(window).scrollTop();
        setNav(o);
    });

    $(".more_company.show_pp").click(function(o){
        o.preventDefault(),
        l(),
        g.removeClass("loading");
        console.log($(this).find(".message_wrapper"));
        $(this).find(".message_wrapper").clone().appendTo(modal_body).fadeIn(800);
    });


      $("#close_pp, #popup_pp").click(function(o) {
          o.preventDefault(),
          c()
      }),





      $("#news .news_list a.pop").on("click", function(o) {
          o.preventDefault();
          var e = $(this).attr("href")
          , n = window.location.pathname;
      l(),
      //g.find(".modal-body").load(e, function() {
      //    g.removeClass("loading").addClass("is_blog")
      //})
      g.find(".modal-body").append("<iframe src="+e+"></iframe>");
      g.removeClass("loading").addClass("is_blog");
      }),

























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

    $("#case-swap>button").on("click",function(){
        if ($(this).hasClass("active")){
            return;
        }
        $(this).siblings().removeClass("active");
        $(this).addClass("active");
        if ($(this).hasClass("aitech")){
            $("#aientainSlider.flexslider").css("display", "none");
            $("#aitechSlider.flexslider").css("display", "block");
        } else {
            $("#aitechSlider.flexslider").css("display", "none");
            $("#aientainSlider.flexslider").css("display", "block");
        }
    });





    var b = [{
        context: "small",
        match: function(){
            setNav($(window).scrollTop()),
            caseSlider(),
            a(),
            r(),
            n(),
            d()
        },
        unmatch: function(){
            f(),
            i()
        }
    }, {
        context: "standard",
        match: function(){
            setNav($(window).scrollTop()) ,
            caseSlider(),
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
