<?php
unlink('data/'.$_GET['id']);
header('Location: /if2.php');
?>