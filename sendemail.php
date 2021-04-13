	
		

		<?php    if (isset($_REQUEST['email']))  {      
			$admin_email = "ghmmoore@gmail.com";   
			$email = $_REQUEST['email'];   
			$subject = $_REQUEST['subject'];   
			$comment = $_REQUEST['comment'];      
			mail($admin_email, "$subject", $comment, "From:" . $email);      
			
			echo "Thank you for contacting us!";   }  else  { ?>   <form method="post">
	
   			Email: <input name="email" type="text" />
   			Subject: <input name="subject" type="text" />
   			Message:
   			<textarea name="comment" rows="15" cols="40"></textarea>
   			<input type="submit" value="Submit" />   </form>    <?php   } ?>

<?php
		/*$name = $_POST['name'];
		$email = $_POST['email'];
		$msg = $_POST['comments'];
		
		$to = "ghmmoore@gmail.com";
		$subject = "You have an order!";
		$header = "From: ".$email;
		
		
		mail($to,$subject,$msg);
		
		echo "The email sent!";
		
		
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

		$body = @"Email sent from ".$_SERVER['REMOTE_ADDR']." at ".date("d/m/Y H:1",time())."<br />
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
		<hr />"

		mail("ghmmoore@gmail.com", "You have an order!", $body, $header);*/
	

?>
