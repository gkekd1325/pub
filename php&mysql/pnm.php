<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <title>WEB</title>
  </head>
  <style>
    a{
      text-decoration:none;
      color:rebeccapurple;
      font-weight:bold;      
    }
    .main_menu a{line-height: 40px;}
    #rtqr{display: flex; width: 70%; margin: 0 auto; padding-top: 5%;}
    .left{width: 40%; margin-left: 5%;}
    .right{width: 60%;}
    header{
      width: 100%;
      background-color: black;
      color: white;
      margin: 0;
      padding: 0;
    }
    header a{color: white; line-height: 100px; padding: 0 20px;}
    *{margin: 0; padding: 0;}
    .menu{display: flex; justify-content: space-around;}
  </style>
  <body>
  <header><h1><a href="pnm.php">PHP & MySql</a></h1></header>
    <div id="rtqr">
    <div class="left">
    
    <h3>Click the menu</h3>
    <div class="main_menu">
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
        echo "<li><a href=\"pnm.php?id={$row['id']}\">".$row['title']."</a></li>";
        // echo "<li><a href=\"pnm.php?id={$row['description']}\">".$row['title']."</a></li>";
      } 
      
      ?>
    </ol>
    </div>
    
    <?php
    echo "<br>";
    $article =array(
      'title'=>'Welcome',
      'description'=>'Hello world!'
    );
    if(isset($_GET['id'])){ /* id값이 있어야 뜸 */
      $sql2="SELECT * FROM topic WHERE id={$_GET['id']}";
      $result2=mysqli_query($cohn, $sql2);
      $row2=mysqli_fetch_array($result2);
      $article['title'] =$row2['title'];
      $article['description']=$row2['description'];
      $update='<a href="Pnm_update.php?id='.$_GET['id'].'">수정</a>'; //특정 리스트를 선택하고 수정해야하므로 id 파라미터로 전달      
      $delete='        
        <form action="pnm_delete.php" method="POST" name="delete">
        <p><input type="hidden" name="id" value="'.$_GET['id'].'"></p>
        <p><input type="submit" value="삭제" class="del" onclick="con()"></p>        
        </form>   
      ';      
    }
    
    
    ?>
    <div class="menu">
        <a href="Pnm_add.php">추가</a>
        <a href="Pnm_reference.php">조회</a>
        <?=$update ?> <!-- 클릭 시 수정앵커가 뜸 -->
        <?=$delete ?>
    </div>
    
    </div>
    

    <div class="right">
    <h2>제목 : <?=$article['title'] ?></h2>
    내용: <?= $article['description'].'<br><br>'?>
    <?=print_r($article) ?>
    <!-- <?php
    echo "<h3>".$_GET['id']."</h3>"; /* id - description */
    
    ?> -->
    </div>
    </div>          
    <script>      
      function con(){
        var a=document.delete;
        if(confirm('삭제 하시겠습니까?')){
          return true;
        }else{
          a.action="pnm.php?id=<?= $_GET['id']?>";
        }
        
      }
    </script>
  </body>
</html>