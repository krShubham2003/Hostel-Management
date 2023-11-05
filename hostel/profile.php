<?php
		  require 'includes/config.inc.php';
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>User Profile</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- js -->
<script src="web_profile/js/jquery-2.1.3.min.js" type="text/javascript"></script>
<script type="text/javascript" src="web_profile/js/sliding.form.js"></script>
<!-- //js -->
<link href="web_profile/css/style.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="web_profile/css/font-awesome.min.css" />
<link rel="stylesheet" href="web_profile/css/smoothbox.css" type='text/css' media="all" />
<link href="//fonts.googleapis.com/css?family=Pathway+Gothic+One" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>

<script type="application/x-javascript">
	addEventListener("load", function () {
		setTimeout(hideURLbar, 0);
	}, false);

	function hideURLbar() {
		window.scrollTo(0, 1);
	}
</script>
<!--// Meta tag Keywords -->

<link href="web_home/css_home/slider.css" type="text/css" rel="stylesheet" media="all">

<!-- css files -->
<link rel="stylesheet" href="web_home/css_home/bootstrap.css"> <!-- Bootstrap-Core-CSS -->
<link rel="stylesheet" href="web_home/css_home/style.css" type="text/css" media="all" /> <!-- Style-CSS -->
<link rel="stylesheet" href="web_home/css_home/fontawesome-all.css"> <!-- Font-Awesome-Icons-CSS -->
<!-- //css files -->

<!-- testimonials css -->
<link rel="stylesheet" href="web_home/css_home/flexslider.css" type="text/css" media="screen" property="" /><!-- flexslider css -->
<!-- //testimonials css -->

<!-- web-fonts -->
<link href="//fonts.googleapis.com/css?family=Poiret+One&amp;subset=cyrillic,latin-ext" rel="stylesheet">
<!-- //web-fonts -->


</head>
<body>
	<!-- banner -->
		<div class="banner" id="home">
			<div class="cd-radial-slider-wrapper">

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
<br><br><br><br><br>
	<div class="main">
		<div id="navigation" style="display:none;" class="w3_agile">
			<ul>
				<li class="selected">
					<a href="#"><i class="fa fa-list-ul" aria-hidden="true"></i><span>Info</span></a>
				</li>
			</ul>
		</div>
		<div id="wrapper" class="w3ls_wrapper w3layouts_wrapper">
			<div id="steps" style="margin:0 auto;" class="agileits w3_steps">
				<form id="formElem" name="formElem" action="#" method="post" class="w3_form w3l_form_fancy">
					<fieldset class="step agileinfo w3ls_fancy_step">
						<legend>Personal Info</legend>
						<div class="abt-agile">
							<div class="abt-agile-left">
							</div>
							<div class="abt-agile-right">

								<h3><?php echo $_SESSION['fname']." ".$_SESSION['lname']; ?></h3>
								<h5>Student</h5>
								<ul class="address">
									<li>
										<ul class="address-text">
											<li><b>Roll No </b></li>
											<li>: <?php echo $_SESSION['roll']; ?></li>
										</ul>
									</li>
									<li>
										<ul class="address-text">
											<li><b>PHONE </b></li>
											<li>: <?php echo $_SESSION['mob_no']; ?></li>
										</ul>
									</li>
									<li>
										<ul class="address-text">
											<li><b>DEPT </b></li>
											<li>: <?php echo $_SESSION['department']; ?></li>
										</ul>
									</li>
									<li>
										<ul class="address-text">
											<li><b>YEAR OF STUDY </b></li>
											<li>: <?php echo $_SESSION['year_of_study']; ?></li>
										</ul>
									</li>
									<li>
										<ul class="address-text">
											<li><b>Application Status </b></li>
											
											<li>: <?php 
				$selectQuery = "SELECT * FROM student WHERE Student_id= '".$_SESSION['roll']."'";
				$rejUpdateResult = mysqli_query($conn,$selectQuery);
				$count = mysqli_num_rows($rejUpdateResult);          
        $row = mysqli_fetch_array($rejUpdateResult);
	$Approval_status =  $row['Approval_status'];
	$selectQuery1 = "SELECT * FROM student WHERE Student_id= '".$_SESSION['roll']."'";
				$rejUpdateResult1 = mysqli_query($conn,$selectQuery1);
				$row1 = mysqli_fetch_array($rejUpdateResult1);
	?>
			  <?php
				if($Approval_status == 1)
				echo "Alloted";
				elseif($Approval_status == 2)
				echo "Rejected";
				elseif($Approval_status == 3)
				echo "Pending";
				elseif($Approval_status == 0)
				echo "_____";
				 ?> </li>
										</ul>
									</li>
									<li>
										<ul class="address-text">
											<li><b>Hostel </b></li>
											<li>: <?php if($row['Hostel_id'] == 1 && $row['Approval_status'] == 1 )
				echo "A";
				elseif($row['Hostel_id'] == 2  && $row['Approval_status'] == 1)
				echo "B";
				elseif($row['Hostel_id'] == 3  && $row['Approval_status'] == 1)
				echo "C";
				elseif($row['Hostel_id'] == 4  && $row['Approval_status'] == 1) 
				echo "D"; 
				else
				echo "____"?></li></ul>
									</li>
				                    <li>
										<ul class="address-text">
											<li><b>Room No </b></li>
											<li>: <?php 
											if($row['Room_id'] != NULL)
											{
												$selectQuery2 = "SELECT * FROM room WHERE Room_id= ".$row['Room_id']."";
												$rejUpdateResult2 = mysqli_query($conn,$selectQuery2);
												$row2 = mysqli_fetch_array($rejUpdateResult2);
												echo $row2['Room_No'];
											}
											else
											{
												echo "____";
											}		
												?></li>
										</ul>
									</li>
										</ul>
									</li>
								</ul>
							</div>
								<div class="clear"></div>
						</div>
				</fieldset>
				</form>
			</div>
		</div>

	</div>
	<script type="text/javascript" src="web_profile/js/smoothbox.jquery2.js"></script>
</body>
</html>
