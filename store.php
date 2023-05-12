<?php
	$link = $_POST['mailHere'];
	echo $link;
	$file=fopen("URLSAVE.txt", "w") or die("PROBLEM");
	fwrite($file, $link);
	fclose($file);
?>
