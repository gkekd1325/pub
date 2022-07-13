<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    a{
      text-decoration:none;
      color:rebeccapurple;
      font-weight:bold;
    }
  </style>
</head>
<body>
    <h1>글 생성</h1>    
    <form action="Pnm add_process.php" method="POST">
        <p><input type="text" name="title" placeholder="title"></p>
        <p><textarea name="description" id="" cols="30" rows="10"></textarea></p>
        <p><input type="submit"></p>
        <a href="pnm.php">돌아가기</a>
    </form>
</body>
</html>