<html>
<head>
</head>
<?php
session_start();
//session_destory();
//$_SESSION["login"]="No";
echo "即將返回登入界面";
header("Refresh:3 ; url=index.php");
?>
</html>
