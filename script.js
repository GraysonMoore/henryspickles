$("#calculate").click(function() {
	var qty1 = Number($("#amount1").val());
	var qty2 = Number($("#amount2").val());
	var qty3 = Number($("#amount3").val());
	var size1 = Number($("[name=size1]").val());
	var size2 = Number($("[name=size2]").val());
	var size3 = Number($("[name=size3]").val());
	var deliverytot = Number($("[name=pickupdelivery]").val());
	var total = qty1 * size1 + qty2 * size2 + qty3 * size3 + deliverytot - 1;
	$("#total").text("Total Cost: $" + total);
	if(qty1 == 147258369) {
		$("#orderpage").html("<center><h1>Grayson knows the secret code and he is AWESOME!!!</h1></center>");
	}
});




//-------------------------------------------------------------------------------------------------------------------

/*$(document).ready(function() {

//Original
	$("#originalbutton").click(function() {
		if(typeof(Storage) !== "undefined") {
    		if (localStorage.clickcount) {
      			localStorage.clickcount = Number(localStorage.clickcount)+1;
    		} else {
      			localStorage.clickcount = 1;
    		}
    		$("#counter").text("Votes for original: " + localStorage.clickcount);
  		}
	});
	$("#counter").text("Votes for original: " + localStorage.clickcount);

//Garlic	
	$("#garlicbutton").click(function() {
		if(typeof(Storage) !== "undefined") {
    		if (localStorage.clickcounter) {
      			localStorage.clickcounter = Number(localStorage.clickcounter)+1;
    		} else {
      			localStorage.clickcounter = 1;
    		}
    		$("#counter2").text("Votes for garlic: " + localStorage.clickcounter);
  		}
	});
	$("#counter2").text("Votes for garlic: " + localStorage.clickcounter);

//Spicy
	$("#spicybutton").click(function() {
		if(typeof(Storage) !== "undefined") {
    		if (localStorage.clickcounting) {
      			localStorage.clickcounting = Number(localStorage.clickcounting)+1;
    		} else {
      			localStorage.clickcounting = 1;
    		}
    		$("#counter3").text("Votes for spicy: " + localStorage.clickcounting);
  		}
	});
	$("#counter3").text("Votes for spicy: " + localStorage.clickcounting);

});*/

/*-------------------------------------------------------------------------------*/



/*-------------------------------------------------------------------------------*/

	/*function setObject(key, value) {
	  window.localStorage.setItem(key, JSON.stringify(value));
	}
	function getObject(key) {
	  var storage = window.localStorage,
	      value = storage.getItem(key);
	  return value && JSON.parse(value);
	}
	function clearStorage() {
	  window.localStorage.clear();
	}

	// Clear inputfields and localstorage
	$("#clear").click(function() {
	  $('#txt1').val('');
	  $('#namebox').val('');
	  $('#review5').val('');
	  clearStorage();
	});
	
	function bindCmt(){
	  
	  
	  	var cmtListElement = $('#cmtlist'),
	      cmtList = getObject('cmtlist');
	  
	  //Out with the old
	  cmtListElement.empty();
	  //And in with the new
	  $.each(cmtList, function(i, k){
	    cmtListElement.append( $('<p><span><b>'+ k.name +'</b></span><br>'+ k.num + '/5<br>' + k.text + '</p>') );
	  });
	}

	//Get the comments on page ready
	$(function(){
	  bindCmt();
	});

	$("#post").click(function() { 
	  var cText = $('#txt1').val(),
	      cName = $('#namebox').val(),
	      cNum = $('#review5').val(),
	      cmtList = getObject('cmtlist');

	  if (cNum > 5 || cNum < 1) {
	  	alert("You must review 1-5");
	  } else if (cText == "" || cNum == "") {
	  	alert("You forgot to fill everything in");
	  } else {
		  if (cmtList){
		    cmtList.push({name: cName, text: cText, num: cNum});
		    setObject('cmtlist', cmtList);
		  } else { //Add a comment
		  	setObject('cmtlist', [{name: cName, text: cText, num: cNum}]);
		  }
		  $('#txt1').val('');
	  	  $('#namebox').val('');
	  	  $('#review5').val('');
		  bindCmt();
	  };
	});*/

	

/*-------------------------------------------------------------------------------



	$("#sendButton").click(function() {
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
			data = false;
		} else if(userName == "" || userEmail == "" || userAmount1 == "" || userAddress == "" || userCity == "" || userState == "") {
			data = false;
		} else if(data == true) {
			
		

			
			$.get("sendemail.php", {
				name: userName, email: userEmail, address: userAddress, city: userCity, state: userState, comments: userComments, amount1: userAmount1, amount2: userAmount2, amount3: userAmount3, pickup: userPickup, type1: userType1, type2: userType2, type3: userType3	      
			}, function(data) {
				if(data == "true") {
					$("#sendEmail").text("Sent!");
				} else {
					$("#sendEmail").text("Order!");
					alert("BAD: " + data);
				}
			});
		}
		
	});*/


	
	
