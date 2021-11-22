<?php include("layouts/top.php"); ?>
<link rel="stylesheet" type="text/css" href="css/index.css">
<?php include("layouts/header.php"); ?>

<!-- booking successful -->
<!-- coding: Fabian -->

<section class="brandingContainer">
	<div><img src="images/kv1.jpg" alt="Branding Photo"></div>
	<div><img src="images/kv2.jpg" alt="Branding Photo"></div>
	<div><img src="images/kv3.jpg" alt="Branding Photo"></div>
</section>
<main class="main indexMain" style="text-align: center;">
	<div style="margin-top: 6rem;">
		<h1>Congratulations!</h1>
		<h2>Your booking was successful.</h2>
		<h2>We will contact you soon.</h2>
		<a href="index.php" title="home">
			<div class="btn" style="margin-top: 4rem;width: 20rem;">Back to home</div>
		</a>
		<a href="dashboard.php" title="dashboard">
			<div class="btn" style="margin-top: 4rem;width: 20rem;">Check booking</div>
		</a>
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

<?php include("layouts/footer.php"); ?>
