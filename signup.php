<?php include("layouts/top.php"); ?>

<!-- signup page -->
<!-- coding: Fabian Isaza Cifuentes -->
			
	<style>
		*{margin:0px;padding:0px;
		-webkit-box-sizing:border-box;
		box-sizing:border-box;
		}
	
		h1 {
			line-height: 2rem;
		}
		
		.signupBox{
		  width:500px;
		  margin:20px auto;
		  font-family:Arial;
		  font-style: italic;
		  font-weight: bold;
		  font-size: 20px;
		  border-radius:4px;
		  border:1px solid #ccc;
		  padding: 10px 40px 25px;
		}

		table {margin: auto;}

		table tr {height: 4rem;}

		table tr td:first-child{font-size: 1.6rem;padding-right: 2rem;}
		
		.signupForm input {
			border: 1px solid #ddd;font-size: 1.6rem;line-height: 1.4rem;padding: .2rem 1rem;
		}

		.submitBtn {
			background-color: #2e8eff;height: 40px;color: #FFF;width: 100%;
			font-size: 18px;border-radius: 4px;margin-top: 2rem;border: 0px;
			cursor: pointer;
		}

	</style>

<?php include("layouts/header.php"); ?>

<main class="main indexMain">

   <h1 style="text-align:center;margin-top: 14rem;">Dear Client: </h1><br/>
   <h1 style="text-align:center;">We are glad you want to book with Travel Experts</h1><br/>
   <h1 style="text-align:center;">Please enter your information</h1><br/>
	  
	  
	<div class="signupBox">  
	  <form class="signupForm" method="post" action="customerregist.php">
	    <table>
				<tr>
					<td>* First Name:</td>
					<td>
						<input type="text" name="CustFirstName" id="CustFirstName" /><br/>
					</td>
				</tr>
				<tr>
					<td>* Last Name: </td>
					<td>
					<input type="text" name="CustLastName" id="CustLastName" /><br/>
					</td>
				</tr>
				<tr>
					<td>* Email: </td>
					<td>
						<input type="text" name="CustEmail" id="CustEmail" />
					<br/>
				</tr>
				<tr>
					<td>* Password: </td>
					<td>
						<input type="password" name="CustPassword" id="CustPassword" /><br/>
					</tr>
				</tr>
				<!-- <tr>
					<td>Address: </td>
					<td>
						<input type="text" name="CustAddress" id="CustAddress" /><br/>
					</td>
				</tr>
				<tr>
					<td>City: </td>
					<td>
						<input type="text" name="CustCity" id="CustCity" /><br/>
					</td>
				</tr>
				<tr>
					<td>Province: </td>
					<td>
						<input type="text" name="CustProv" id="CustProv" /><br/>
					</td>
				</tr>
				<tr>
					<td>Postal: </td>
					<td>
						<input type="text" name="CustPostal" id="CustPostal" /><br/>
					</td>
				</tr>
				<tr>
					<td>Country: </td>
					<td>
						<input type="text" name="CustCountry" id="CustCountry" /><br/>
					</td>
				</tr> -->
			</table>
			<div class="message"></div>
			<input class="submitBtn" type="submit" value="Create Account" id="signUpBtn" />
	  </form>
	</div>

</main>



<main class="searchContainer">
	<div>Searching results</div>
	<div class="loadingSpinner">
		<img src="images/icons/loading_spinner.gif" alt="loading">
	</div>
	<div class="searchContainerAppend">
		<!-- ajex return json object, parse json object and display the contents -->
	</div>
</main>

	<script>
		
		$("#signUpBtn").bind("click", function(e){
			e.preventDefault();

			// strip leading and ending blanks
			// message is error message
			// front-end validation

			var CustEmail = $.trim($("#CustEmail").val());
			var CustPassword = $.trim($("#CustPassword").val());
			var CustFirstName = $.trim($("#CustFirstName").val());
			var CustLastName = $.trim($("#CustLastName").val());

			// clear message
			var message = "";

			// blank ckecking, isEmpty accept an array;
			// if(isEmpty([email, password])) {
			// 	message += "<li>Email or Password can't be blank</li>";
			// 	displayMessage(message);
			// 	return;
			// }

			// if email format is not right or password less than 6
			// if(!validateEmail(email)){
			// 	message += "<li>The email format is not correct.</li>";
			// }
			// if(password.length < 6) {
			// 	message += "<li>Password should be at least 6 characters length.</li>";
			// }
			// if(message != "") {
			// 	displayMessage(message);
			// 	return;
			// }

			var request = $.ajax({
			  url: "signupProcess.php",
			  method: "POST",
			  data: { 
			  	CustEmail : CustEmail,
			  	CustPassword : CustPassword,
			  	CustFirstName : CustFirstName,
			  	CustLastName : CustLastName
			  },
			  dataType: "text"
			});
			 
			request.done(function( data ) {
				// alert(data);
			  if(data == 5) {
			  	message += "<li>Email or Password can't be blank</li>";
			  	$(".message").html(message);
			  } else if(data == 4){
			  	message += "<li>The email format is not correct.</li>";
			  	$(".message").html(message);
			  } else if(data == 3){
			  	message += "<li>Password should be at least 6 characters length.</li>";
			  	$(".message").html(message);
			  }  else if(data == 2){
			  	message += "<li>This email has been used, please change another one.</li>";
			  	$(".message").html(message);
			  } else if(data == 1){
			  	window.location = "index.php";
			  } else {
			  	message += "<li>Created failed (Please contact to administrator.)</li>";
			  	$(".message").html(message);
			  }
			});
			 
			request.fail(function( jqXHR, textStatus ) {
			  message += "<li>Created failed (Please contact to administrator.)</li>";
			  $(".message").html(message);
			});

		});

	</script>

<?php include("layouts/footer.php"); ?>