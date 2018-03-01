<meta http-equiv="refresh" content="1; URL=./filereset.html">
<meta name="keywords" content="automatic redirection">
   <?php
$a = $_POST["psw"];
if('steYgOvk05HvA'==crypt($a,'st$#&&'))
{
	   for($i=1;$i<=10;$i++)
	{
		$file = fopen("./notices/".$i.".txt", "w+");
		fwrite($file, "XX-XX-XXXX\r\n");
		fwrite($file, "XX:XX --\r\n");
		fwrite($file, "HEADIG(*NO NOTICE*)\r\n");
		fwrite($file,"***no notice***");
		fclose($file);
	}
	echo'<link rel="icon" type="image/png" href="./check.png"><h2 style="text-align: center; color: green; font-family: sans-serif;"><img src="./check.png"><br><br>NOTICES RESET: SUCCESSFUL</h2>';
}
else
    echo'<link rel="icon" type="image/png" href="./warning.png"><h2 style="text-align: center; color: red; font-family: sans-serif;"><img src="./warning.png"><br><br>RESET FAILED<br><br>INCIDENT REPORTED</h2>';
?>