<?php
// var_dump($_POST);
$cohn=mysqli_connect('localhost','root','qoxmaos11','PnM');
$val="
INSERT INTO topic (
    title,
    description,
    created
) VALUES (
    '{$_POST['title']}',  
    '{$_POST['description']}',
    NOW()
)"; /* add의 name값을 post로 전달받은 값 */
$result= mysqli_query($cohn, $val);
if($result===false){
    echo '문제발생';
    error_log(mysqli_error($cohn)); /* 에러가 대놓고 뜨지 않음 */
} else{
    echo'성공 <a href="pnm.php">돌아가기</a>';
}
?>