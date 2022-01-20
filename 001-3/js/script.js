$(".menu").hover(
    function(){
        $(".sub").stop().slideDown();
    },
    function(){
        $(".sub").stop().slideUp();
    }
);
$(".tab li:eq(0)").click(
    function(){
        // $("body").css("background", "black");
        $(".tab li a").removeClass("on");
        $(".tab li:eq(0) a").addClass("on"); /* on을 싹다 없애고 첫놈만 on */
        $(".notice").show();
        $(".gallery").hide();
    }
)
$(".tab li:eq(1)").click(
    function(){
        // $("body").css("background", "white");
        $(".tab li a").removeClass("on");
        $(".tab li:eq(1) a").addClass("on");
        $(".notice").hide();
        $(".gallery").show();
    }
)
$(".notice li:eq(0)").click(
    function(){
        $("#popup").fadeIn();
    }
);
$(".close").click(
    function(){
        $("#popup").fadeOut();
    }
);
