$(".menu li").hover(
    function(){
        $(this).children(".sub").stop().slideDown(); /* this는 현재 선택하고 있는것 */
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
$(".notice li a:eq(0)").click(
    function(){
        $("#popup").fadeIn();
    }
);
$(".box").click(
    function(){
        $("#popup").fadeOut();
    }
);