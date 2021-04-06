<script>
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
			alert("Form not completed");
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
