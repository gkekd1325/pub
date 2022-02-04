$(".menu").hover(
    function(){
        $(".sub").stop().slideDown();
        $(".nav_back").stop().slideDown();
    },
    function(){
        $(".sub").stop().slideUp();
        $(".nav_back").stop().slideUp();
    }
);

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

$(".tap li:eq(0)").click(
    function(){
        $(".notice").show();
        $(".gallery").hide();
        $(".tap li a").removeClass("on");
        $(".tap li:eq(0) a").addClass("on");
    }
);
$(".tap li:eq(1)").click(
    function(){
        $(".notice").hide();
        $(".gallery").show();
        $(".tap li a").removeClass("on");
        $(".tap li:eq(1) a").addClass("on");
    }
);