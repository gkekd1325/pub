<?php
function print_list(){
    $list=scandir('./data');
            // echo "<li>$list[0]</li>";
            // echo "<li>$list[1]</li>";
            // echo "<li>$list[2]</li>";
            // echo "<li>$list[3]</li>";
            // echo "<li>$list[4]</li>";
            // echo "<li>$list[5]</li>";
            $i=0;
            while($i < count($list)){ /* 파일 숫자만큼 실행 */
                if($list[$i]!='.'){
                    if($list[$i]!='..'){
                        echo "<li><a href=\"write.php?id=$list[$i]\">$list[$i]</a></li>";
                    }   
                }
                $i=$i+1;
                
            }
}
function print_if(){
            if(isset($_GET['id'])){ /* isset은 값이 있는지 없는지를 봄 */
                echo $_GET['id'];
            } else{
                echo "Additional page";
            }
}
function print_if2(){
    $str="is Lorem ipsum dolor sit amet consectetur 
            adipisicing elit. Non praesentium deleniti eveniet, 
            ducimus similique vero repudiandae accusamus ipsa rerum 
            natus labore molestiae earum blanditiis suscipit vel recusandae 
            rem a odit!";
            if(isset($_GET['id'])){ /* isset은 값이 있는지 없는지를 봄 */
                echo $_GET['id'];
            } else{
                echo "추가페이지로 오셨습니다."."<br>";
                $str="Please write a text.";
            }
            echo nl2br(" ".$str);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><a href="if2.php">HOME</a></h1>
    <ol>
        <?php
            
            print_list();
        ?>
        
    </ol>
    <a href="write.php">create</a>
    <?php
        if(isset($_GET['id'])) { ?> 
            <a href="update.php?id=<?=$_GET['id']?>">update</a> <!-- 메인페이지가 아닌 id가 있을때만 나온다 -->
        <?php } ?>
    <h2>
        <?php
            print_if();
        ?>
    </h2>
    <?php
    // echo file_get_contents("data/".$_GET['id']);
        print_if2()
    ?>
    <form action="create.php" method="post">
        <p><input type="text" name="title" placeholder="제목입력"></p>
        <p><textarea name="detail" id="" cols="30" rows="10"></textarea></p>
        <input type="submit">
    </form>
</body>
</html>