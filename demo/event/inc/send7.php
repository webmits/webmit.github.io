<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
	include('config.php');
		$name = htmlspecialchars(trim($_POST['name']));
		$phone = htmlspecialchars(trim($_POST['phone']));
		$email = htmlspecialchars(trim($_POST['email']));		
		
		if($name != ''&& $phone != ''){
		$header = "Content-type: text/html; charset=utf-8 \r\n";
		$header = "From:$sitename\r\n";
		$thm = "$theme7";
		$msg="
Имя: $name
Телефон: $phone
E-mail: $email";
		$mail_to="$mail";
		if(mail($mail_to, $thm, $msg, $header));
		echo "yes";		
		}else{
			echo "Имя и/или телефон не введены";		
		}
}else{
	echo "прямой запрос запрещен";	
}
?>