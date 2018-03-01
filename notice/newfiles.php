<?php
    <input type="password" >
    for($i=1;$i<=10;$i++)
	{
		$file = fopen("./notices/".$i.".txt", "r+");
		fwrite($file, "XX-XX-XXXX\r\n");
		fwrite($file, "XX:XX --\r\n");
		fwrite($file, "HEADIG(*NO NOTICE*)\r\n");
		fwrite($file,"***no notice***");
		fclose($file);

    }
   ?>