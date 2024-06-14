<meta charset="utf8">

<?php

$link=@mysqli_connect('localhost','root','','party');
if(!$link)
{
    die("無法開啟資料庫<br/>");
}
$SQL="SELECT * FROM danceinfo";
$result=mysqli_query($link,$SQL);

echo "<table border='1'>";
while($row=mysqli_fetch_assoc($result))
{
    echo"<tr>";
        echo "<td>".$row["no"]."</td><td>".$row["name"]."</td><td>".$row["gender"]."</td><td>".$row["date"]."</td><td>".$row["number"]."</td><td>".$row["phone"]."</td><td>".$row["email"]."</td><td>".$row["rangeInput"]."</td><td>".$row["mbti"]."</td><td>".$row["food"]."</td><td>".$row["comment"]."</td><td><a href='dancedel.php?no=".$row["no"]."'>刪除</a></td><td>修改</td>";
    echo"</tr>";
}
echo "</table>";
mysqli_close($link);

echo "</br><a href='dance.php'>新增下一筆</a></br>";
echo "<a href='logout.php'>登出</a>";
?>
