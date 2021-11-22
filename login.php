<?php include("layouts/top.php"); ?>

<!-- login page -->
<!-- coding: Fabian -->
			
	<style>
		*{margin:0px;padding:0px;
		-webkit-box-sizing:border-box;
		box-sizing:border-box;
		}
	
		h1 {
			line-height: 2rem;
		}
		
		.signupBox{
		  width:420px;
		  margin:20px auto;
		  font-family:Arial;
		  font-style: italic;
		  font-weight: bold;
		  font-size: 20px;
		  border-radius:4px;
		  border:1px solid #ccc;
		  padding: 10px 40px 25px;
		}

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
	  
<div class="main indexMain">

   <h1 style="text-align:center;margin-top: 16rem;">Dear Client: </h1><br/>
   <h1 style="text-align:center;"></h1><br/>
   <h1 style="text-align:center;">Please login</h1><br/>
	<div class="signupBox">  
	  <form class="signupForm" method="post" action="">
	    <table>
				<tr>
					<td>Email: </td>
					<td>
						<input type="text" name="CustEmail" id="CustEmail" />
					<br/>
				</tr>
				<tr>
					<td>Password: </td>
					<td>
						<input type="password" name="CustPassword" id="CustPassword" /><br/>
					</tr>
				</tr>
			</table>
			<div class="message"></div>
			<input class="submitBtn" type="submit" value="Login" id="loginBtn" />
	  </form>
	</div>
</div>



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
		
		$("#loginBtn").bind("click", function(e){
			e.preventDefault();
			
			// strip leading and ending blanks
			// message is error message
			// front-end validation

			var CustEmail = $.trim($("#CustEmail").val());
			var CustPassword = $.trim($("#CustPassword").val());

			// clear message
			var message = "";

			// blank ckecking
			if(isEmpty([CustEmail, CustPassword])) {
				message += "<li>Email or Password can't be blank</li>";
				$(".message").html(message);
				return;
			}

			// if CustEmail format is not right or CustPassword less than 6
			if(!validateEmail(CustEmail)){
				message += "<li>The Email format is not correct.</li>";
			}
			if(message != "") {
				displayMessage(message);
				return;
			}

			var request = $.ajax({
			  url: "loginProcess.php",
			  method: "POST",
			  data: { 
			  	CustEmail : CustEmail,
			  	CustPassword : CustPassword
			  },
			  dataType: "text"
			});
			 
			request.done(function( data ) {
			
				// if return blank
				if(!$.trim(data)) {
					alert("Username or password combination incorrect.");
				} 
				else 
				{
					// if login success, reload page
					window.location = "index.php";
				}
			});
		});

	</script>

<?php include("layouts/footer.php"); ?>
