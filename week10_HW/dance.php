<html>
<head>
<title>
-dancing party-
</title>
<meta charset="utf8">
</head>
<font color="#0267C1"><h1><center>
IM dance registration<br>
</font></h1></center>
<center><font color="#D65108"><h2>000級資管系畢業舞會報名表</h2></font></center>
<hr color="#591F0A">
<strong>詳細資訊</strong>
<table border="1">
    <tr><th>年級</th><th>時間</th><th>地點</th><th>配戴手環顏色</th></tr>
    <tr><td>大四</td><td><span style="color:#D65108">6/30(五) 9.am~12.pm</span></td><td>活動禮堂</td><td><span style="color:#ED2839">白色</span></td></tr>
    <tr><td>碩二</td><td><span style="color:#D65108">6/30(五) 9.am~12.pm</span></td><td>活動禮堂</td><td><span style="color:#8806CE">藍色</span></td></tr>
</table>
<hr color="#EFA00B">
<strong>舞會注意事項</strong>
<ul>
    <li>請穿著正式服裝(洋裝或西裝)</li>
    <li>室內禁止吸菸</li>
    <li>不可自帶酒精飲料</li>
    <li>入場時間固定，請勿遲到</li>
    <li>攜帶外系同學一人限帶二位</li>
</ul>
<hr color="#591F0A">
<strong>報名資料</strong>
<form action="dancedb.php" method="post">
姓名：<input type="text" name="name" value="" placeholder="輸入中文全名">
<br>
性別：<input type="radio" name="gender" value="男">男
<input type="radio" name="gender" value="女">女
<br>
生日：<input type="date" name="date" value="">
<br>
禮服的顏色：<input type="color" name="color" value="">
<br>
請上傳在學證明：<input type="file" name="file">
<br>
同行人數：<input type="number"  name="number" placeholder="幾人" min="0" max="2">
<br>
聯絡電話：<input type="text" name="phone" value="" placeholder="手機號碼">
聯絡信箱：<input type="email" name="email" value="" placeholder="學校信箱即可">
<br>

<br>
MBTI人格:<br>
<select name="mbti" multiple>
<option value="ESTP">ESTP</option>
<option value="ESFP">ESFP</option>
<option value="ISTP">ISTP</option>
<option value="ISFP">ISFP</option>
<option value="ESTJ">ESTJ</option>
<option value="ESFJ">ESFJ</option>
<option value="ISTJ">ISTJ</option>
<option value="ISFJ">ISFJ</option>
<option value="ENTJ">ENTJ</option>
<option value="ENTP">ENTP</option>
<option value="INTJ">INTJ</option>
<option value="INTP">INTP</option>
<option value="ENFJ">ENFJ</option>
<option value="ENFP">ENFP</option>
<option value="INFJ">INFJ</option>
<option value="INFP">INFP</option>
</select><br>
飲食備註：
<input type="checkbox" name="food[]" value="大豆類過敏">大豆類過敏
<input type="checkbox" name="food[]" value="乳製品過敏">乳製品過敏
<input type="checkbox" name="food[]" value="酒精過敏">麩質過敏
<input type="checkbox" name="food[]" value="酒精過敏">酒精過敏
<input type="checkbox" name="food[]" value="吃素">吃素
<input type="checkbox" name="food[]" value="蛋奶素">蛋奶素
<input type="checkbox" name="food[]" value="不喝飲料者">不喝飲料者
<input type="checkbox" name="food[]" value="無">無
<br>
其他特殊飲食習慣：<textarea name="comment" rows="1" cols="40" placeholder="無請填無"></textarea>
<br><br>

<small>個人資料僅供報名使用</small>
<input type="submit" value="送出表單">
<input type="reset" value="清除表單">

</form>
<?php
echo "<a href='logout.php'>登出</a>";
?>
</html>
