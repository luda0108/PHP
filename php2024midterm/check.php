<?php

session_start();


$chairID = "chair";
$chairPWD = "123";

$reviewerID = "reviewer";
$reviewerPWD = "234";

$authorID = "author";
$authorPWD = "345";


$id = $_POST["id"];
$pwd = $_POST["pwd"];

if (($chairID == $id) && ($chairPWD == $pwd)) {
    $_SESSION["login"] = "chair";
    setcookie("chairID",$chairID);
    setcookie("chairPWD",$chairPWD);
    header("Location:chair.php");
} else if (($reviewerID == $id) && ($reviewerPWD == $pwd)) {
    $_SESSION["login"] = "reviewer";
    setcookie("reviewerID",$reviewerID);
    setcookie("reviewerPWD",$reviewerPWD);
    header("Location:reviewer.php");
}else if(($authorID == $id) && ($authorPWD == $pwd)){
    $_SESSION["login"] = "author";
    setcookie("authorID",$authorID);
    setcookie("authorPWD",$authorPWD);
    header("Location:author.php");
}else {
    $_SESSION["login"] = "fail";
    echo "帳號密碼錯誤<br>3秒後將返回登入頁面";
    header("Refresh:3;url=fail.php");
}
?>
