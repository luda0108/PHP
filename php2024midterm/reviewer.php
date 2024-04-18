<?php

session_start();
error_reporting(0);
if ($_SESSION["login"] == "reviewer") {
    echo "<meta charset='utf-8'>";

    echo "<font size='6'>login success</font><br/><br/>";
    echo "<font size='6'>Welcome reviewer !!</font>";
    echo "<br/><br/>";
    echo "<a href='showreview.php'>進入評論界面</a>";
    echo "<br/><br/>";
    echo "<a href='logout.php'>Logout</a>";
} else {
    echo "<font size='6'>非法登入<br>3秒後將返回登入頁面</font>";
    header("Refresh:3;url=index.php");
}
?>
