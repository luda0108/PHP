<html>

<head>

</head>

<body>
    <?php
    error_reporting(0);
    session_start();
    if ($_SESSION["login"] != null) {
        session_destroy();
    }
    ?>
    <form method="post" action="check.php">

        <?php
        if (isset($_COOKIE["chairID"])) {
            setcookie("chairID", $chairID, time() + (60 * 60 * 24 * 7));
            setcookie("chairPWD", $chairPWD, time() + (60 * 60 * 24 * 7));
            echo "<br/>";
            echo "請輸入id:<input type = 'text'name='id' value='" . $_COOKIE["chairID"] . "'><br/>";
            echo "輸入password:<input type = 'password' name='pwd' value='" . $_COOKIE["chairPWD"] . "'><br/>";
            echo "<input type='submit'>";
            echo "<input type='reset'><br />";
        } else if (isset($_COOKIE["reviewerID"])) {
            setcookie("reviewerID", $reviewerID, time() + (60 * 60 * 24 * 7));
            setcookie("reviewerPWD", $reviewerPWD, time() + (60 * 60 * 24 * 7));
            echo "<br/>";
            echo "請輸入id:<input type = 'text'name='id' value='" . $_COOKIE["reviewerID"] . "'><br/>";
            echo "輸入password:<input type = 'password' name='pwd' value='" . $_COOKIE["reviewerPWD"] . "'><br/>";
            echo "<input type='submit'>";
            echo "<input type='reset'><br />";
        } else if (isset($_COOKIE["authorID"])) {
            setcookie("authorID", $authorID, time() + (60 * 60 * 24 * 7));
            setcookie("authorPWD", $authorPWD, time() + (60 * 60 * 24 * 7));
            echo "<br/>";
            echo "請輸入id:<input type = 'text'name='id' value='" . $_COOKIE["authorID"] . "'><br/>";
            echo "輸入password:<input type = 'password' name='pwd' value='" . $_COOKIE["authorPWD"] . "'><br/>";
            echo "<input type='submit'>";
            echo "<input type='reset'><br />";
        } else {
            echo "<font size='5'>請輸入id:<input type = 'text'name='id'> </font><br/>";
            echo "<font size='5'>輸入password:<input type = 'password'name='pwd'> </font><br/><br>";
            echo "<input type='submit'>";
            echo "<input type='reset'><br />";
        }
        ?>

    </form>
</body>

</html>
