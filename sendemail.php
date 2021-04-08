<?php
	if(count($_POST) > 0) {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$address = $_POST['address'];
		$city = $_POST['city'];
		$state = $_POST['state'];
		$comments = $_POST['comments'];
		$amount1 = $_POST['amount1'];
		$amount2 = $_POST['amount2'];
		$amount3 = $_POST['amount3'];
		$type1 = $_POST['type1'];
		$type2 = $_POST['type2'];
		$type3 = $_POST['type3'];
		$pickup = $_POST['pickup'];
		
		$header = "Content-Type: text/html\r\nReply-To: $email\r\nFrom: $name <$email>";

		$body = /*@"Email sent from ".$_SERVER['REMOTE_ADDR']." at ".date("d/m/Y H:1",time())."*/<br />
		<hr />
		$amount1
		$type1
		$amount2
		$type2
		$amount3
		$type3
		$pickup
		$address
		$city
		$state
		$comments
		<hr />;

		if(mail("ghmmoore@gmail.com", "You have an order!", $body, $header)) {
			die("true");
		} else {
			die("There was an error");
		}
	}
?>
