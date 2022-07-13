<?php
// var_dump($_POST);
$cohn=mysqli_connect('localhost','root','qoxmaos11','PnM');

$val2="UPDATE topic 
    SET title='{$_POST['title']}', description='{$_POST['description']}'
    WHERE id='{$_POST['id']}'
";
$result2= mysqli_query($cohn, $val2);
if($result2===false){
    echo '문제발생';
    error_log(mysqli_error($cohn)); /* 에러가 대놓고 뜨지 않음 */
} else{
    echo'성공 <a href="pnm.php">돌아가기</a><br><br>';
    echo '<a href="pnm_update.php?id='.$_POST['id'].'">수정</a>';
}
?>