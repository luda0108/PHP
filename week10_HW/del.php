<?php
$no=$_GET["no"];
echo "刪除第".$no."筆資料"."</br>";

$link=@mysqli_connect('localhost','root','','party');
if(!$link)
{
    die("無法開啟資料庫<br/>");
}

$SQL="DELETE FROM danceinfo WHERE No='$no'";
if($result=mysqli_query($link,$SQL))
{
    echo "</br>刪除成功";
}
echo "</br>"."<a href='sql.php'>查看完整資訊</a></br>";
echo "<a href='logout.php'>登出</a>";
mysqli_close($link);

?>
