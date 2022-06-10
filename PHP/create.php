<?php
file_put_contents('data/'.$_POST['title'], $_POST['detail']);
header('Location: /if2.php?id='.$_POST['title']); /* 사용자를 이 주소로 보낼 수 있다. */
?>