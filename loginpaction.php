<?php
$b = $_POST["heading"];
$a = $_POST["psw"];
if('stybhlcYgwSPk'==crypt($a,'st$#&&') && (($b<=17312030 && $b>=17312001) || $b==17119002 || $b==17118066))
{
	echo '<meta http-equiv="refresh" content="2; URL=https://photos.app.goo.gl/f7t1XUxkSqDMoDjW2">
    <meta name="keywords" content="automatic redirection">';
	echo'<link rel="icon" type="image/png" href="./notice/check.png"><h2 style="text-align: center; color: green; font-family: sans-serif;"><img src="./notice/check.png"><br><br>Login: Successful<br>Redirecting...</h2>';
}
else{
	echo '<meta http-equiv="refresh" content="3; URL=./loginp.php">
    <meta name="keywords" content="automatic redirection">';
    echo '<link rel="icon" type="image/png" href="./notice/warning.png"><h2 style="text-align: center; color: red; font-family: sans-serif;"><img src="./notice/warning.png"><br><br>Wrong Credentials<br>Login: Failed<br><br>INCIDENT REPORTED</h2>';
}
?>