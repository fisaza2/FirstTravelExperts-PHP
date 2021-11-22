<?php include("layouts/top.php"); ?>
<link rel="stylesheet" type="text/css" href="css/index.css">
<?php include("layouts/header.php"); ?>

<!-- contact page -->
<!-- coding: Fisaza2  -->

<main class="main indexMain" style="margin-top: 10rem;">
	<h1>Contact Us</h1>

	<div>
		<h2>Locations</h2>

		<table border='1px' width= "100%";>
			<thead>
				<tr>
					<th>Location</th>
					<th>Address</th>
					<th>Phone</th>
					<th>Email</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>Calgary</td>
					<td>1907 26th Ave SW<br />
					Calgary, AB T2T 1E4<br />
					CANADA</td>
					<td>403-555-1234</td>
					<td><a href="mailto:calgary@travelexperts.ca">Email Calgary</a></td>
				</tr>
				<tr>
					<td>Okotoks</td>
					<td>200 Southridge Dr <br />
					Okotoks, AB T1S 0B2<br />
					CANADA</td>
					<td>403-555-2468</td>
					<td><a href="mailto:Okotoks@travelexperts.ca">Email Okotoks</a></td>
				</tr>
			
			</tbody>
		</table>
	</div>
	
	<div id="map" style="width: 100%; height: 500px;margin-top: 4rem;"></div>

	 
<div>
<h2>Agents</h2>
	<div class="agent">
		<!-- <figure>
			<img src="calgaryAgent.jpeg" alt="Joe Gebbia">
		</figure>
 -->		<div>
		<h3>
			Joe Gebbia<br>
			<small>Head Calgary Sales Agent</small>
		</h3>
		<p>
			Spicy jalapeno corned beef pork loin boudin drumstick picanha turkey doner beef short ribs prosciutto t-bone turducken sausage ham leberkas. Filet mignon burgdoggen pig, beef ribs jowl capicola alcatra pastrami picanha kevin ground round. Ball tip venison porchetta drumstick, swine jowl t-bone. <strong>Burgdoggen kielbasa sirloin meatball</strong> drumstick cupim. Shankle boudin pastrami ribeye biltong burgdoggen brisket jerky ball tip doner alcatra strip steak meatball corned beef. Landjaeger frankfurter pork chop doner spare ribs, prosciutto corned beef. Ball tip drumstick cupim pig, pancetta tongue sirloin strip steak shank ham.
		</p>
		</div>
	</div>
	
	<br />

	<div class="agent">
		<!-- <figure>
			<img src="OkotoksAgent.jpeg" alt="Brian Chesky">
		</figure> -->
		<div>
		<h3>
			Brian Chesky<br>
			<small>Head Okotoks Sales Agent</small>
		</h3>
		<p>
			<strong>Spicy jalapeno</strong> corned beef pork loin boudin drumstick picanha turkey doner beef short ribs prosciutto t-bone turducken sausage ham leberkas. Filet mignon burgdoggen pig, beef ribs jowl capicola alcatra pastrami picanha kevin ground round. Ball tip venison porchetta drumstick, swine jowl t-bone. Burgdoggen kielbasa sirloin meatball drumstick cupim. Shankle boudin pastrami ribeye biltong burgdoggen brisket jerky ball tip doner alcatra strip steak meatball corned beef. Landjaeger frankfurter pork chop doner spare ribs, prosciutto corned beef. Ball tip drumstick cupim pig, pancetta tongue sirloin strip steak shank ham.
		</p>
		</div>
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

<script src="https://maps.googleapis.com/maps/api/js?key=xxxxxxxxxxxxxxxxxxxxxxxx=initMap" async defer></script>
<script type="text/javascript">
   
   function initMap() {
     // Create a map object and specify the DOM element for display.
     var map = new google.maps.Map(document.getElementById('map'), {
       center: {lat: 51.044270, lng: -114.062019},
       scrollwheel: false,
       zoom: 8
     });
   }
 </script>

<?php include("layouts/footer.php"); ?>
