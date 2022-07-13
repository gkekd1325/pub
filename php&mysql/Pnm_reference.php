<?php
$cohn = mysqli_connect(
    'localhost',
    'root',
    'qoxmaos11',
    'PnM'
);
echo "<h1>List</h1>";
$sql = "SELECT * FROM topic";
$result = mysqli_query($cohn, $sql);

while($row = mysqli_fetch_assoc($result)){ /* fetch는 가져오는 역할 */
    echo "<h1>".$row['title']."</h1>";
    echo "<h3>".$row['description']."</h3>";
    echo "<h3>".$row['created']."</h3>";
}
// print_r($row);
// echo "<br>";
// echo $row['title'];
?>