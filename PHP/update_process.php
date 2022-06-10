<?php
rename('data/'.$_POST['old_title'], 'data/'.$_POST['title']); /* 옛 이름을 입력하고 새 이름으로 바꿔준다. */
file_put_contents('data/'.$_POST['title'], 'data/'. $_POST['detail']);
header('Location: /if2.php?id='.$_POST['title']);
?>