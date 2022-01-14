$(".menu").hover(
    function(){
        $(".sub").stop().slideDown();
    },
    function(){
        $(".sub").stop().slideUp();
    }
);

$(".tab1").click(
    function(){
        $(".notice").show();
        $(".gallery").hide();
    }
);
$(".tab2").click(
    function(){
        $(".gallery").show();
        $(".notice").hide();
    }
);

$(".open").click(
    function(){
        // $("#popup").show();
        $("#popup").fadeIn();
    }
);
$(".close").click(
    function(){
        // $("#popup").hide();
        $("#popup").fadeOut();
    }
);