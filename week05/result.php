<meta charset="utf8">
<?php


if(($_POST["sName"])==""){
    echo "請輸入您的名字";
}else if(($_POST["sStudentID"])==""){
    echo "請輸入您的學號";
}else if(($_POST["sWilling"])==""){
    echo "請勾選參加意願";
}else if(($_POST["sHouse"])==""){
    echo "請點選您所屬的家";
}else{
    echo "表單填寫成功"."<br/>";
    echo "以下為您的報名結果："."<br/>";
    $name = $_POST["sName"];
    $sStudentID = $_POST["sStudentID"];
    $sWilling = $_POST["sWilling"];
    $sHouse = $_POST["sHouse"];
    echo "姓名：".$name."<br/>"."學號".$sStudentID."<br/>"."是否參加：".$sWilling."<br/>"."你是".$sHouse."的"."<br/>";
}
?>
