<?php

/*session_start ();*/		
		if(isset($_POST["sendform"])){
			$formname = htmlspecialchars ($_POST["formname"]);
			$formemail = htmlspecialchars ($_POST["formemail"]);
			$formphone = htmlspecialchars ($_POST["formphone"]);
			$formcountry = htmlspecialchars ($_POST["formcountry"]);
			$formregion = htmlspecialchars ($_POST["formregion"]);
			
			/*$_SESSION["formname"] = $formname;
			$_SESSION["formemail"] = $formemail;
			$_SESSION["formphone"] = $formphone;
			$_SESSION["formcountry"] = $formcountry;
			$_SESSION["formregion"] = $formregion;*/
			
			if(strlen($formname) == 0) {
				$error_formname = "Введите ваше имя";
				$error = true;
			}
			
		}
            $to = "orange.eyes@mail.ru";
			$from = "noreply@tnt-test.ru";
			$subject = "?utf-8?B?".base64_encode($subject)."?=";
			$headers = "Form: $formname\r\nReply-to: $formname\r\nContent-type: text/plain; charset=utf\r\n";
			mail($to, $subject, $message, $headers);
			
			$redir = $_SERVER['HTTP_REFERER']."?mail=1";
			header("Location: $redir");

?>