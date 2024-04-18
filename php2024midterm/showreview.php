<html>
<head>
</head>
<body>
<font size="6">
        <b>Reviewer您好，歡迎進入論文評論網頁</b>
    </font>
    <br /><br />
    <form action="#" method="post">
    <font size="4">
            論文評審決定:
            <input type="radio" name="review" value="Accept">Accept
            <input type="radio" name="review" value="Minor Revision">Minor Revision
            <input type="radio" name="review" value="Major Revision">Major Revision
            <input type="radio" name="review" value="Reject">Reject
            <br><br>
            論文評論評語：
            <textarea name="comment" value="" rows="10" cols="50"></textarea><br/>
            <br><input type="submit" value="送出"><br/>
            <a href='logout.php'>登出</a>
            <br><br>
            <HR><br>
        </font>


    </form>
</body>        
<?php
if(isset($_POST["comment"])){
    echo nl2br($_POST["comment"]);
}
?>
</html>
