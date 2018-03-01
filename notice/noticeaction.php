<meta http-equiv="refresh" content="3; URL=./admin.html">
<meta name="keywords" content="automatic redirection">
<?php
$b = $_POST["heading"];
$a = $_POST["psw"];
$c = $_POST["contents"];
date_default_timezone_set('Asia/Calcutta');
$d = date("h:i:s a");
$e = date("d/m/Y");
if('steYgOvk05HvA'==crypt($a,'st$#&&'))
{
	$data = array("","","","","","","","","","",);
	for($i=0;$i<=8;$i++)
	{
		$file1 = fopen("./notices/".($i+1).".txt", "r");
		$data[$i]=fread($file1,filesize("./notices/".($i+1).".txt"));

		$file2 = fopen("./notices/".($i+2).".txt","r");
		$data[$i+1]=fread($file2,filesize("./notices/".($i+2).".txt"));
		fclose($file1);
		fclose($file2);
		$file1 = fopen("./notices/".($i+1).".txt","w");
		fwrite($file1, $data[$i+1]);
	}
	$file = fopen("./notices/10.txt","w+");
	fwrite($file, $d."\r\n");
	fwrite($file, $e."\r\n");
	fwrite($file, $b."\r\n");
	fwrite($file,$c);
	fclose($file);
    echo'<link rel="icon" type="image/png" href="./check.png"><h2 style="text-align: center; color: green; font-family: sans-serif;"><img src="./check.png"><br><br>POSTED</h2>';
}
else
    echo'<link rel="icon" type="image/png" href="./warning.png"><h2 style="text-align: center; color: red; font-family: sans-serif;"><img src="./warning.png"><br><br>NOT POSTED<br><br>INCIDENT REPORTED</h2>';
?>