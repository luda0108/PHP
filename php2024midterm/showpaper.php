<html>
<head>
</head>
<body>
<font size="6">
        <b>Author您好，歡迎進入論文投稿網頁</b>
    </font>
    <br /><br />
    <form action="#" method="post">
    <font size="4">
            論文標題:
            <input type="text" name="title" value="" placeholder="請輸入您的論文標題" required><br />
            作者姓名：
            <input type="text" name="name" value="" placeholder="請輸入您的名字" required><br/>
            作者Email：
            <input type="text" name="contact" value="" required>
            <br><br>
            電子檔上傳：
            <input type="file" name="sFile"><br/>
            論文摘要：
            <textarea name="summary" value="" rows="10" cols="10"></textarea><br/>
            <br><input type="submit" value="送出"><br/>
            <a href='logout.php'>Logout</a>
            <br><br>
            <HR><br>
        </font>


    </form>
</body>        
<?php
if(isset($_POST["summary"])){
    echo nl2br($_POST["summary"]);
}
?>
</html>
