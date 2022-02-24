$(".menu li").hover(
    function(){
        $(this).children(".sub").stop().fadeIn();
    },
    function(){
        $(this).children(".sub").stop().fadeOut();
    }
);
$(".notice li:eq(0)").click(
    function(){
        $("#popup").fadeIn();
    }
);
$(".box").click(
    function(){
        $("#popup").fadeOut();
    }
);