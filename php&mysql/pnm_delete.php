<?php
// var_dump($_POST);
$cohn=mysqli_connect('localhost','root','qoxmaos11','PnM');
$val="
DELETE
FROM topic
WHERE id='{$_POST['id']}';
 "; 
$val2="
alter table topic auto_increment =1;
";
$result= mysqli_query($cohn, $val);
$result2=mysqli_query($cohn, $val2);
if($result===false){
    echo '문제발생';
    error_log(mysqli_error($cohn)); /* 에러가 대놓고 뜨지 않음 */
}else if($result2===false){
    echo 'id 초기화 오류';
    error_log(mysqli_error($cohn));
} 
else{
    echo'성공 <a href="pnm.php">돌아가기</a>';
}
?>