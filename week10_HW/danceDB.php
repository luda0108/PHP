<meta charset="utf8">
<?php

$link=@mysqli_connect('localhost','root','','party');
if(!$link)
{
    die("無法開啟資料庫<br/>");
}
$name=$_POST["name"];
echo "姓名：".$name."<br>";

$gender=$_POST["gender"];
echo "性別：".$gender."<br>";

$date=$_POST["date"];
echo "生日：".$date."<br>";

$number=$_POST["number"];
echo "同行人數：".$number."<br>";

$phone=$_POST["phone"];
echo "聯絡電話：".$phone."<br>";

$email=$_POST["email"];
echo "聯絡信箱：".$email."<br>";

$mbti=$_POST["mbti"];
echo "MBTI人格：".$mbti."<br>";

$food=$_POST["food"];
echo "飲食備註：",$checkfood=implode(",",$food),"<br/>";

$comment=$_POST["comment"];
if(isset($_POST["comment"]))
{
    echo "其他特殊飲食習慣：".$comment."</br>";
}

$SQL="INSERT INTO danceinfo(name,gender,date,number,phone,email,rangeInput,mbti,food,comment) VALUES('$name','$gender','$date','$number','$phone','$email','$rangeInput','$mbti','$checkfood','$comment')";
if($result=mysqli_query($link,$SQL))
{
    echo "</br>新增成功";
}
echo "</br><a href='sql.php'>查看舞會名單</a>";
echo "</br><a href='logout.php'>登出</a>";
mysqli_close($link);

?>
