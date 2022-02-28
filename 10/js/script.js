// $(".menu li").hover(
//     function(){
//         $(this).children(".sub").stop().slideDown()
//     },
//     function(){
//         $(this).children(".sub").stop().slideUp()
//     }
// );

$(".menu li").click(
    function(){
        $(".sub").stop().slideUp();
        $(this).children(".sub").stop().slideToggle(); /*내가 클릭하는 것에
        슬라이드 토글(한번 누르면 커지고 꺼짐) */
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