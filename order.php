<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Henry's Dill Pickles</title>
		<link rel="stylesheet" href="main.css">
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js">
		$(document).ready(function() {

			$("#sendEmail").click(function() {
				var userName = $("input[name=name]").val();
				var userEmail = $("input[name=email]").val();
				var userAddress = $("input[name=address]").val();
				var userCity = $("input[name=city]").val();
				var userState = $("input[name=state]").val();
				var userComments = $("input[name=comments]").val();
				var userPickup = $("input[name=pickup]").val();
				var userAmount1 = $("input[name=amount1]").val();
				var userAmount2 = $("input[name=amount2]").val();
				var userAmount3 = $("input[name=amount3]").val();
				var userType1 = $("input[name=type1]").val();
				var userType2 = $("input[name=type2]").val();
				var userType3 = $("input[name=type3]").val();
				var quantity1 = Number($("#amount1").val());
				var quantity2 = Number($("#amount2").val());
				var quantity3 = Number($("#amount3").val());

				if(quantity1 > 20 || quantity2 > 20 || quantity3 > 20) {
					alert("I know pickles are good, but you can only buy 20 pickles at once");
				} else if(userName == "" || userEmail == "" || userAmount1 == "" || userAddress == "" || userCity == "" || userState == "") {
					alert("Form not complete");
				} else {
					$("#sendEmail").text("Sending...");
					$.post("sendemail.php", {
						name: userName, email: userEmail, address: userAddress, city: userCity, state: userState, comments: userComments, amount1: userAmount1, amount2: userAmount2, amount3: userAmount3, pickup: userPickup, type1: userType1, type2: userType2, type3: userType3
					}, function(data) {
						if(data == "true") {
							$("#sendEmail").text("Sent!");
						} else {
							$("#sendEmail").text("Send");
						}
					});
				}
			});

		});
		</script>
	</head>

	<body>
		<div class="body">
			<section>
				<a href="index.html"><img src="Images/Logo2.png"></a>
				<h1 class="head">Henry's Dill Pickles</h1>
				<div class="links">
					<ul>
						<li id="l"><a href="index.html">HOME</a></li>
						<li id="l">ORDER</li>
						<li id="l"><a href="review.html">REVIEWS</a></li>
						<li id="l"><a href="survey.html">SURVEY</a></li>
					</ul>
				</div>
			</section>
			<br>
			<h2 class="orderhead">Cost per Pint Jar: $5</h2>
			<p class="optional2">Payment collected upon pickup or delivery</p><br>
			<div class="emailInfo">

				<label for="emailTo" class="name">Full Name:</label><br>
				<input type="text" id="emailTo" name="name"><br><br>
				
				<label for="emailFrom" class="email">Your Email:</label><br>
				<input type="email" id="emailFrom" name="email"><br><br>

				<label for="address" class="address">Your Address:</label><br><br>
				<div class="dress1">
					<label for="address">Street Address:</label><br>
					<input type="text" id="address" name="address"><br>
				</div>
				<div class="dress2">
					<label for="city">City:</label><br>
					<input type="text" id="city" name="city"><br>
				</div>
				<div class="dress3">
					<label for="state">State:</label><br>
					<input type="text" id="state" name="state"><br><br>
				</div><br><br><br>

				<label for="comments">Comments or Questions?</label><br>
				<textarea id="comments" name="comments" cols="30" rows="8"></textarea><br><br><br>

				<label for="pickup" class="pickup">Pickup or Delivery?</label><br>
				<p class="optional">Local Deliveries Only!</p>
				<p class="optional">$1 Extra For Delivery</p>
				<div class="selector">
					<select name="pickup" id="pickup">
						<option id="pickup1" name="pickuptot" value="1">Pickup</option>
						<option id="delivery" name="delivery" value="2">Delivery</option>
					</select>
				</div>
				<p id="demo"></p><br><br>
			</div>

			<div class="orders">
				<div class="order1">
					<form class="form1">
						<label for="amount1" class="amount1title">Order #1:</label>
						<p class="optional">*required</p>
						<label for="amount1">Qty: </label>
						<input type="number" id="amount1" name="amount1" min="1"max="20"><br><br>

						<label for="type1">Type: </label>
						<select id="type1" name="type1">
							<option>Original</option>
							<option>Garlic</option>
							<option>Spicy</option>
						</select>
					</form>
				</div>

				<div class="order2">
					<form>
						<label for="amount2" class="amount2title">Order #2:</label>
						<p class="optional">*optional</p>
						<label for="amount2">Qty: </label>
						<input type="number" id="amount2" name="amount2" min="1"max="20"><br><br>

						<label for="type2">Type: </label>
						<select id="type2" name="type2">
							<option>Original</option>
							<option>Garlic</option>
							<option>Spicy</option>
						</select>
					</form>
				</div>

				<div class="order3">
					<form class="form3">
						<label for="amount3" class="amount3title">Order #3:</label>
						<p class="optional">*optional</p>
						<label for="amount3">Qty: </label>
						<input type="number" id="amount3" name="amount3" min="1"max="20"><br><br>

						<label for="type3">Type: </label>
						<select id="type3" name="type3">
							<option>Original</option>
							<option>Garlic</option>
							<option>Spicy</option>
						</select>
					</form>
				</div>
			</div><br>
			<svg height="20" width="750">
  				<line x1="30" y1="0" x2="750" y2="0" style="stroke:rgb(0,0,0);stroke-width:5" />
			</svg>
			<div class="cost">
				<button id="calculate">Calculate Cost</button><br>
				<h2 id="total">Total Cost: $0</h2>
			</div>
			<br><br>
			<button class="sendButton" id="sendEmail" name="sendButton">Order!</button>
			<footer>&copy; 2021 Grayson Moore</footer>
		</div>
		
		
	</body>

</html>
