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

<section class="contact py-5">
	<div class="container">
		<h2 class="heading text-capitalize mb-sm-5 mb-4"> Application Form </h2>
			<div class="mail_grid_w3l">
				<form action="vacate_rooms.php" method="post">
					<div class="row">
						<div class="col-md-6 contact_left_grid" data-aos="fade-right">
							<div class="contact-fields-w3ls">
								<input type="text" name="Name" placeholder="Name" value="<?php echo $_SESSION['fname']." ".$_SESSION['lname']; ?>" required="" disabled="disabled">
							</div>
							<div class="contact-fields-w3ls">
								<input type="text" name="roll_no" placeholder="Roll Number" value="<?php echo $_SESSION['roll']?>" required="" disabled="disabled">
							</div>
							<div class="contact-fields-w3ls">
								<input type="password" name="pwd" placeholder="Password" required="">
							</div>
						</div>
							<input type="submit" name="submit" value="Click to Apply">
						</div>
					</div>

				</form>
			</div>
	</div>
</section>

<?php
if(isset($_POST['submit']))
{
	$roll = $_SESSION['roll'];
	$password = $_POST['pwd'];
	$query = "SELECT * FROM Student WHERE Student_id = '$roll'";
     $result = mysqli_query($conn,$query);
     if($row = mysqli_fetch_assoc($result))
	 {

		$query2 = "SELECT * FROM vacate WHERE Student_id = '$roll'";
        $result2 = mysqli_query($conn,$query2);
		if(mysqli_num_rows($result2) == 0)
		{
			$pwdCheck = password_verify($password, $row['Pwd']);
			if($pwdCheck == false)
			{
					echo "<script type='text/javascript'>alert('Incorrect Password!!')</script>";
			}
			else if($pwdCheck == true and $row['Approval_status'] == '1' ) 
			{
					$query3 = "INSERT INTO vacate (Student_id) VALUES ('$roll')";
					$result3 = mysqli_query($conn,$query3);
					if($result3)
					{
						echo "<script type='text/javascript'>alert('Application sent successfully')</script>";
					}
			}
			else if($row['Approval_status'] == '0' or is_null($row['Approval_status']) or $row['Approval_status'] == '2' or $row['Approval_status'] == '3')
			{
				    echo "<script type='text/javascript'>alert('You don\\'t have a Allocated Room')</script>";
			}
			else
			{
				    echo "<script type='text/javascript'>alert('Error')</script>";
			}
		}
		else
		{
				    echo "<script type='text/javascript'>alert('You have Already applied for vacting the Room')</script>";
		}	
    }

}

?>

<br><br>
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

