<?php include("layouts/top.php"); ?>
<link rel="stylesheet" type="text/css" href="css/index.css">
<?php include("layouts/header.php"); ?>

<!-- index page -->
<!-- coding: Xianhgui Guo (Aaron) -->
<!-- coding: Fabian Isaza Cifuentes -->
<!-- coding: Agata Konopka -->
<!-- coding: Steve Muir -->

<section class="brandingContainer">
	<div><img src="images/kv1.jpg" alt="Branding Photo"></div>
	<div><img src="images/kv2.jpg" alt="Branding Photo"></div>
	<div><img src="images/kv3.jpg" alt="Branding Photo"></div>
</section>
<main class="main indexMain">
	<section>
		<div class="rowTitleContainer">
			<div class="title">Most Popular</div>
			<div class="moreContainer">
				<a href="#" title="Check more">
					<a href="list.php"><span>See all </span></a>
					<svg viewBox="0 0 18 18" aria-hidden="true" focusable="false" style="fill: currentcolor; height: 10px; width: 10px;">
						<path 
						fill-rule="evenodd" 
						d="M4.293 1.707A1 1 0 1 1 5.708.293l7.995 8a1 1 0 0 1 0 1.414l-7.995 8a1 1 0 1 1-1.415-1.414L11.583 9l-7.29-7.293z">
						</path>
					</svg>
				</a>
			</div>
		</div>
		<div class="row indexRow">
			<div class="topBox">
				<a href="content.php?PackageId=1" title="details"><img src="images/categories/demo/1.jpg" alt="Check Details"></a>
			</div>
			<div class="topBox">
				<a href="content.php?PackageId=2" title="details"><img src="images/categories/demo/2.jpg" alt="Check Details"></a>
			</div>
			<div class="topBox">
				<a href="content.php?PackageId=3" title="details"><img src="images/categories/demo/3.jpg" alt="Check Details"></a>
			</div>
			<div class="topBox">
				<a href="content.php?PackageId=4" title="details">
					<video class="video_poster" loop="" autoplay="" muted="" data-reactid="21" playsinline="true" poster="images/categories/demo/4.jpg">
						<source type="video/mp4" src="images/categories/demo/4.mp4" data-reactid="22">
						poster
					</video>
				</a>
			</div>
		</div>
	</section>
	<section>
		<div class="rowTitleContainer">
			<div class="title">North America</div>
			<div class="moreContainer">
				<a href="#" title="Check more">
					<a href="list.php?PkgSectionID=1"><span>See all </span></a>
					<svg viewBox="0 0 18 18" aria-hidden="true" focusable="false" style="fill: currentcolor; height: 10px; width: 10px;">
						<path 
						fill-rule="evenodd" 
						d="M4.293 1.707A1 1 0 1 1 5.708.293l7.995 8a1 1 0 0 1 0 1.414l-7.995 8a1 1 0 1 1-1.415-1.414L11.583 9l-7.29-7.293z">
						</path>
					</svg>
				</a>
			</div>
		</div>
		<div class="row indexRow">

			<?php

				$sql = "SELECT * FROM packages WHERE PkgSectionID = 1 LIMIT 4";
				$posts = Posts::find_by_sql($sql);

			?>

			<?php foreach($posts as $post) { ?>
				<div class="innerBox">
					<a href="content.php?PackageId=<?php echo $post->PackageId; ?>" title="details">
						<div class="photoBox">
							<img class="animImg" src="images/posts/<?php echo $post->PkgPhotoDirectory; ?>" alt="Check Details">
						</div>
						<div class="title"><?php echo $post->PkgName; ?></div>
						<div class="desc"><?php echo $post->PkgDesc; ?></div>
						<div class="price">$ <?php echo str_replace(".0000","",$post->PkgBasePrice); ?> CAD</div>
						<div class="dateBox">
							<div class="startDate"><span class="tag">From</span><?php echo $post->PkgStartDate; ?></div>
							<div class="endDate"><span class="tag">To</span><?php echo $post->PkgEndDate; ?></div>
						</div>
					</a>
				</div>

			<?php } ?>

		</div>
	</section>
	<section>
		<div class="rowTitleContainer">
			<div class="title">Europe</div>
			<div class="moreContainer">
				<a href="#" title="Check more">
					<a href="list.php?PkgSectionID=2"><span>See all </span></a>
					<svg viewBox="0 0 18 18" aria-hidden="true" focusable="false" style="fill: currentcolor; height: 10px; width: 10px;">
						<path 
						fill-rule="evenodd" 
						d="M4.293 1.707A1 1 0 1 1 5.708.293l7.995 8a1 1 0 0 1 0 1.414l-7.995 8a1 1 0 1 1-1.415-1.414L11.583 9l-7.29-7.293z">
						</path>
					</svg>
				</a>
			</div>
		</div>
		<div class="row indexRow">

			<?php

				$sql = "SELECT * FROM packages WHERE PkgSectionID = 2 LIMIT 4";
				$posts = Posts::find_by_sql($sql);

			?>

			<?php foreach($posts as $post) { ?>
				<div class="innerBox">
					<a href="content.php?PackageId=<?php echo $post->PackageId; ?>" title="details">
						<div class="photoBox">
							<img class="animImg" src="images/posts/<?php echo $post->PkgPhotoDirectory; ?>" alt="Check Details">
						</div>
						<div class="title"><?php echo $post->PkgName; ?></div>
						<div class="desc"><?php echo $post->PkgDesc; ?></div>
						<div class="price">$ <?php echo str_replace(".0000","",$post->PkgBasePrice); ?> CAD</div>
						<div class="dateBox">
							<div class="startDate"><span class="tag">From</span><?php echo $post->PkgStartDate; ?></div>
							<div class="endDate"><span class="tag">To</span><?php echo $post->PkgEndDate; ?></div>
						</div>
					</a>
				</div>

			<?php } ?>
		
		</div>
	</section>
	<section>
		<div class="rowTitleContainer">
			<div class="title">South America</div>
			<div class="moreContainer">
				<a href="#" title="Check more">
					<a href="list.php?PkgSectionID=3"><span>See all </span></a>
					<svg viewBox="0 0 18 18" aria-hidden="true" focusable="false" style="fill: currentcolor; height: 10px; width: 10px;">
						<path 
						fill-rule="evenodd" 
						d="M4.293 1.707A1 1 0 1 1 5.708.293l7.995 8a1 1 0 0 1 0 1.414l-7.995 8a1 1 0 1 1-1.415-1.414L11.583 9l-7.29-7.293z">
						</path>
					</svg>
				</a>
			</div>
		</div>
		
		<div class="row indexRow">

			<?php

				$sql = "SELECT * FROM packages WHERE PkgSectionID = 3 LIMIT 4";
				$posts = Posts::find_by_sql($sql);

			?>

			<?php foreach($posts as $post) { ?>
				<div class="innerBox">
					<a href="content.php?PackageId=<?php echo $post->PackageId; ?>" title="details">
						<div class="photoBox">
							<img class="animImg" src="images/posts/<?php echo $post->PkgPhotoDirectory; ?>" alt="Check Details">
						</div>
						<div class="title"><?php echo $post->PkgName; ?></div>
						<div class="desc"><?php echo $post->PkgDesc; ?></div>
						<div class="price">$ <?php echo str_replace(".0000","",$post->PkgBasePrice); ?> CAD</div>
						<div class="dateBox">
							<div class="startDate"><span class="tag">From</span><?php echo $post->PkgStartDate; ?></div>
							<div class="endDate"><span class="tag">To</span><?php echo $post->PkgEndDate; ?></div>
						</div>
					</a>
				</div>

			<?php } ?>
		
		</div>
	</section>
	<section>
		<div class="rowTitleContainer">
			<div class="title">Asia</div>
			<div class="moreContainer">
				<a href="#" title="Check more">
					<a href="list.php?PkgSectionID=4"><span>See all </span></a>
					<svg viewBox="0 0 18 18" aria-hidden="true" focusable="false" style="fill: currentcolor; height: 10px; width: 10px;">
						<path 
						fill-rule="evenodd" 
						d="M4.293 1.707A1 1 0 1 1 5.708.293l7.995 8a1 1 0 0 1 0 1.414l-7.995 8a1 1 0 1 1-1.415-1.414L11.583 9l-7.29-7.293z">
						</path>
					</svg>
				</a>
			</div>
		</div>
		
		<div class="row indexRow">

			<?php

				$sql = "SELECT * FROM packages WHERE PkgSectionID = 4 LIMIT 4";
				$posts = Posts::find_by_sql($sql);

			?>

			<?php foreach($posts as $post) { ?>
				<div class="innerBox">
					<a href="content.php?PackageId=<?php echo $post->PackageId; ?>" title="details">
						<div class="photoBox">
							<img class="animImg" src="images/posts/<?php echo $post->PkgPhotoDirectory; ?>" alt="Check Details">
						</div>
						<div class="title"><?php echo $post->PkgName; ?></div>
						<div class="desc"><?php echo $post->PkgDesc; ?></div>
						<div class="price">$ <?php echo str_replace(".0000","",$post->PkgBasePrice); ?> CAD</div>
						<div class="dateBox">
							<div class="startDate"><span class="tag">From</span><?php echo $post->PkgStartDate; ?></div>
							<div class="endDate"><span class="tag">To</span><?php echo $post->PkgEndDate; ?></div>
						</div>
					</a>
				</div>

			<?php } ?>
		
		</div>
	</section>
	<section>
		<div class="rowTitleContainer">
			<div class="title">Africa</div>
			<div class="moreContainer">
				<a href="#" title="Check more">
					<a href="list.php?PkgSectionID=5"><span>See all </span></a>
					<svg viewBox="0 0 18 18" aria-hidden="true" focusable="false" style="fill: currentcolor; height: 10px; width: 10px;">
						<path 
						fill-rule="evenodd" 
						d="M4.293 1.707A1 1 0 1 1 5.708.293l7.995 8a1 1 0 0 1 0 1.414l-7.995 8a1 1 0 1 1-1.415-1.414L11.583 9l-7.29-7.293z">
						</path>
					</svg>
				</a>
			</div>
		</div>
		
		<div class="row indexRow">

			<?php

				$sql = "SELECT * FROM packages WHERE PkgSectionID = 5 LIMIT 4";
				$posts = Posts::find_by_sql($sql);

			?>

			<?php foreach($posts as $post) { ?>
				<div class="innerBox">
					<a href="content.php?PackageId=<?php echo $post->PackageId; ?>" title="details">
						<div class="photoBox">
							<img class="animImg" src="images/posts/<?php echo $post->PkgPhotoDirectory; ?>" alt="Check Details">
						</div>
						<div class="title"><?php echo $post->PkgName; ?></div>
						<div class="desc"><?php echo $post->PkgDesc; ?></div>
						<div class="price">$ <?php echo str_replace(".0000","",$post->PkgBasePrice); ?> CAD</div>
						<div class="dateBox">
							<div class="startDate"><span class="tag">From</span><?php echo $post->PkgStartDate; ?></div>
							<div class="endDate"><span class="tag">To</span><?php echo $post->PkgEndDate; ?></div>
						</div>
					</a>
				</div>

			<?php } ?>
		
		</div>
	</section>
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
	var desc = $(".desc");
	for(var i=0; i<desc.length; i++) {
			
		var t = $(desc[i]).html();
		if(t.length >= 98) {
			$(desc[i]).html($.trim(t.substring(0, 100)) + "...");
		}

	}

	var title = $(".title");
	for(var i=0; i<title.length; i++) {
			
			var t = $(title[i]).html();
			if(t.length >= 22) {
			$(title[i]).html($.trim(t.substring(0, 22)) + "...");
		}
	}

	
</script>

<?php include("layouts/footer.php"); ?>