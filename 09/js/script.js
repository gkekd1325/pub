$(".menu li").hover(
    function(){
        $(this).children(".sub").stop().slideDown();
    },
    function(){
        $(this).children(".sub").stop().slideUp();
    }
);
$(".tap li:eq(0)").click(
    function(){
        $(".tap li a").removeClass("on");
        $(".tap li a:eq(0)").addClass("on");
        $(".notice").show();
        $(".gallery").hide();
    }
);
$(".tap li:eq(1)").click(
    function(){
        $(".tap li a").removeClass("on");
        $(".tap li a:eq(1)").addClass("on");
        $(".notice").hide();
        $(".gallery").show();
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