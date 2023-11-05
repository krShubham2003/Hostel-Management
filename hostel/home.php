
<?php

 require 'includes/config.inc.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Hostel</title>
	
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<script type="application/x-javascript">
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>

	<!-- css files -->
	<link rel="stylesheet" href="web_home/css_home/bootstrap.css"> <!-- Bootstrap-Core-CSS -->
	<link rel="stylesheet" href="web_home/css_home/style.css" type="text/css" media="all" /> <!-- Style-CSS --> 
	<link rel="stylesheet" href="web_home/css_home/fontawesome-all.css"> <!-- Font-Awesome-Icons-CSS -->
	<!-- //css files -->
	
	<!-- web-fonts -->
	<link href="//fonts.googleapis.com/css?family=Poiret+One&amp;subset=cyrillic,latin-ext" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
	<!-- //web-fonts -->
	
</head>

<body>

<!-- banner -->
<div class="inner-page-banner" id="home"> 	   
	<!--Header-->
	<header>
		<div class="container agile-banner_nav">
			<nav class="navbar navbar-expand-lg navbar-light bg-light">
				
				<h1><a class="navbar-brand" href="home.php">CUCEK<span class="display"></span></a></h1>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item">
							<a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="vacate_rooms.php">Vacate Room</a>
						</li>
						
						<li class="nav-item">
							<a class="nav-link" href="profile.php">My Profile</a>
						</li>
						<li>
								<a class="nav-link" href="includes/logout.inc.php">Logout</a>
						</li>
					</ul>
				</div>
			  
			</nav>
		</div>
	</header>
	<!--Header-->
</div>
<!-- //banner --> 
<!-- banner-bottom -->
	<div class="banner-bottom">
		<div class="container-fluid">
			<div class="banner_bottom_agile_grids">
				<div class="row wthree_banner_bottom_right_grids pr-sm-3">
					<div class="col-lg-3 col-sm-6 banner_bottom_right_grid">
						<div class="view view-tenth">
							<div class="agile_text_box">
								<i class="fas fa-bed" aria-hidden="true"></i>
								<h3> Apply for A-Hostel</h3>
								<p>A Hostel</p>
							</div>
							<div class="mask">
								<a href="application_formA.php?id=A"><img src="web_home/images/s1.jpg" class="img-responsive" alt="" /></a>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-sm-6 mt-sm-0 mt-3 banner_bottom_right_grid">
						<div class="view view1 view-tenth">
							<div class="agile_text_box">
								<i class="fas fa-bed" aria-hidden="true"></i>
								<h3>Apply for B-Hostel</h3>
								<p>B Hostel</p>
							</div>
							<div class="mask">
								<a href="application_formB.php?id=B"><img src="web_home/images/s2.jpg" class="img-responsive" alt="" /></a>
							</div>
						</div>
					</div>
				
					<div class="col-lg-3 col-sm-6 mt-lg-0 mt-3 banner_bottom_right_grid">
						<div class="view view2 view-tenth">
							<div class="agile_text_box">
								<i class="fas fa-bed" aria-hidden="true"></i>
								<h3>Apply for C-Hostel</h3>
								<p>C Hostel</p>
							</div>
							<div class="mask">
								<a href="application_formC.php?id=C"><img src="web_home/images/s3.jpg" class="img-responsive" alt="" /></a>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-sm-6 mt-lg-0 mt-3 banner_bottom_right_grid">
						<div class="view view3 view-tenth">
							<div class="agile_text_box">
								<i class="fas fa-bed" aria-hidden="true"></i>
								<h3>Apply for D-Hostel</h3>
								<p>D Hostel</p>
							</div>
							<div class="mask">
								<a href="application_formD.php?id=D"><img src="web_home/images/s4.jpg" class="img-responsive" alt="" /></a>
							</div>
						</div>
					</div>
					<div class="clearfix"> </div>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
</div>
<!-- banner-bottom -->

<br>
<br>


<!-- footer -->
<footer class="py-5">
	<div class="container py-md-5">
		<div class="footer-logo mb-5 text-center">
			<a class="navbar-brand" href="home.php" target="_blank">CUCEK <span class="display"></span></a>
		</div>
		<div class="footer-grid">
			
			<div class="list-footer">
				<ul class="footer-nav text-center">
					<li>
						<a href="home.php">Home</a>
					</li>
					<li>
						<a href="profile.php">Profile</a>
					</li>
					<li>
						<a class="nav-link" href="includes/logout.inc.php">Logout</a>
					</li>
				</ul>
			</div>
			
		</div>
	</div>
</footer>
<!-- footer -->

<!-- js-scripts -->		

	<!-- js -->
	<script type="text/javascript" src="web_home/js/jquery-2.2.3.min.js"></script>
	<script type="text/javascript" src="web_home/js/bootstrap.js"></script> <!-- Necessary-JavaScript-File-For-Bootstrap --> 
	
	<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
						
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
	<!-- //here ends scrolling icon -->
	<!-- start-smoth-scrolling -->
	
<!-- //js-scripts -->
</body>
</html>