<?php
	
	/* Send E-mail */
	
	/*
		
		\r - возврат каретки
		\n - переход на новую строку
		
	*/
	
	$message = "Текст сообщения...";
	$to = "myadmin@local.host";
	$from ="usercom@local.host";
	$subject = "Тема сообщения...";
	
	//"=?utf-8?B?" кодировка сообщения, также необходимо указывать.  "=?windows-1251?B?" если кирилица
	//base64_encode специальное кодирование которое разработали с целью корректрой передачи данных по протоколу которые не поддержывают 8bit-ю передачу данных
	$subject = "=?utf-8?B?".base64_encode($subject)."?=";
	
	//Content-type: необходимо указывать всегда. text/html в случае письма с html </>
	$headers = "From: $from\r\nReplay-to: $from\r\nContent-type: text/palin; charset=utf-8\r\n";
	
	//отправка письма с помощью mail
	$a = mail($to, $subject, $message, $headers);
	if($a){
		echo "<p>Letter sent...</p>";
	}
	else echo "Letter Was not sent!";	
?>
<title>Send E-mail PHP</title>