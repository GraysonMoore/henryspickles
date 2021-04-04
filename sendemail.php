<?php
	if (true) {
		/*$name = $_POST['name'];
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
		$pickup = $_POST['pickup'];*/

		$name = ['name=name'];
		$email = ['name=email'];
		$address = ['name=address'];
		$city = ['name=city'];
		$state = ['name=state'];
		$comments = ['name=comments'];
		$amount1 = ['name=amount1'];
		$amount2 = ['name=amount2'];
		$amount3 = ['name=amount3'];
		$type1 = ['name=type1'];
		$type2 = ['name=type2'];
		$type3 = ['name=type3'];
		$pickup = ['name=pickup'];
		
		$header = "Content-Type: text/html\r\nReply-To: $email\r\nFrom: $name <$email>";

		$body =
		@"Email sent from ".$_SERVER['REMOTE_ADDR']." at ".date("d/m/Y H:1",time())."<br />
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
		<hr />
		Email end";

		mail("ghmmoore@gmail.com", "A user sent you an email", $body, $header);
	}
?>
