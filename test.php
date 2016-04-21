<?php
	if($_POST["id"] == 1){
		$fileName = "180.php";
		$text = htmlspecialchars(file_get_contents($fileName));
		sleep(1);
		#echo "<pre>$text<pre>";
		echo $fileName, nl2br($text);
	}
?>