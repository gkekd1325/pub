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
    body{background-color: powderblue;}
  </style>
</head>
<body>
    <h1>PHP & MySql</h1>
    <ol>
      <?php
      $cohn = mysqli_connect(
        'localhost',
        'root',
        'qoxmaos11',
        'PnM'
      );
      $sql = "SELECT * FROM topic";
      $result = mysqli_query($cohn, $sql); /* 쿼리 문을 서버로 전송한다. */
      while($row = mysqli_fetch_assoc($result)){
        echo "<li><a href=\"pnm_update.php?id={$row['id']}\">".$row['title']."</a></li>";
        // echo "<li><a href=\"pnm.php?id={$row['description']}\">".$row['title']."</a></li>";
      } 
      
      ?>
    </ol>
    <?php
    if(isset($_GET['id'])){ /* id값이 있어야 뜸 */
        $sql2="SELECT * FROM topic WHERE id={$_GET['id']}";
        $result2=mysqli_query($cohn, $sql2);
        $row2=mysqli_fetch_array($result2);
      }
    ?>
    <h1>수정페이지</h1>
    <form action="Pnm update_process.php" method="POST">
        <input type="hidden" name="id" value="<?=$_GET['id']?>">
        <p><input type="text" name="title" value="<?=$row2['title']?>"></p>
        <p><textarea name="description" id="" cols="30" rows="10"><?=$row2['description']?></textarea></p>
        <p><input type="submit"></p>
        <a href="pnm.php">돌아가기</a>
    </form>
</body>
</html>