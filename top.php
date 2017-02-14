<?php
echo '<html>';
echo '<head>';
echo '<meta http-equiv="Content-Type" content="text/html; charset="utf-8" />';
echo '<link rel="stylesheet" type="text/css" href="gonomiya.css"  />';
echo '<title>五宮鉄道オンライン予約 Excellent予約トップ</title>';
echo '</head>';
$con = mysqli_connect('iwahi01-ra63', 'root', 'P@ssw0rd');
if (!$con) {
    exit('データベースに接続できませんでした。<br />');
}

$result = mysqli_select_db($con,'exdb');
if (!$result) {
    exit('データベースを選択できませんでした。<br />');
}
$result = mysqli_query($con,'SET NAMES utf8' );
if (!$result) {
    exit('文字コードを指定できませんでした。<br />');
}

$personal_sql='select * from members where userid="'.$_POST["userid"].'"';
$result = mysqli_query($con,$personal_sql);
$data = mysqli_fetch_array($result);
echo '<form id="standard" action="referinfo.php" method="post">';
echo '<ul>';
echo '<li>';
echo '<center>';
echo '<img src="image/EXlogo.png" width="180" height=130/><br />';
echo 'Excellent予約トップ<br />';
echo $data["lastname"].' '.$data["firstname"].' 様 ようこそ<br />';
echo '</center>';
echo '</li>';
echo '<li>';
echo '<center>';
echo '<input type="hidden" name="userid" value="'.$_POST["userid"].'" />';
echo '<input type="submit" name="submit" value="個人情報照会" />';
echo '<input id="reserve" type="submit" name="submit" value="予約情報照会" /><br />';
echo '</li>';
echo '<li>';
echo ' <center>接続先(デバッグ用)<br /></center>';
echo '<center><select name="uriselector" size="1" style="width:114px" >';
echo '	<option value="APIGW">API Gateway</option>';
echo '	<option value="SV">仮想サービス</option>';
echo '</select></center></p>';
echo '</li>';
echo '</center>';
echo '<br />';
echo '</li>';
echo '<li>';
echo '</li>';
echo '</ul>';
echo '</form>';
echo '<center>';
echo '<footer>';
echo '<img src="image/GRlogo.png" width="90" height=60/><br />';
echo 'Gonomiya Railways Co., Ltd. All Rights Reserved.</center>';
echo '</footer>';
echo '</body></html>';
?>
