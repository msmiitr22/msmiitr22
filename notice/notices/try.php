<?php
    $file = fopen("1.txt" , "r");
	$content=fread($file,filesize("1.txt"));
    fclose($file);
    $file = fopen("new.txt","w");
    fwrite($file, $content);
    fclose($file);

?>