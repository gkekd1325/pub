$( document ).ready( function() {
    var Offset = $( ".menu" ).offset(); /* .menu의 위치파악 */
$( window ).scroll( function() {    /* 스크롤 발생 시 함수실행 */
    if ( $( document ).scrollTop() > Offset.top ) { /* 스크롤이 메뉴위치보다 아래라면 */
    $( ".menu" ).addClass( "Fixed" ); /*menu클래스를 추가하여 고정 */
            }
    else {
    $( ".menu" ).removeClass( "Fixed" );/* 그렇지 않으면 제거 */
     }
    });
});