<?php

 require '../includes/config.inc.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Admin Page</title>
	
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
	<!--// Meta tag Keywords -->
		
	<!-- css files -->
	<link rel="stylesheet" href="../web_home/css_home/bootstrap.css"> <!-- Bootstrap-Core-CSS -->
	<link rel="stylesheet" href="../web_home/css_home/style.css" type="text/css" media="all" /> <!-- Style-CSS --> 
	<link rel="stylesheet" href="../web_home/css_home/fontawesome-all.css"> <!-- Font-Awesome-Icons-CSS -->
	<!-- //css files -->
	
	<!-- web-fonts -->
	<link href="//fonts.googleapis.com/css?family=Poiret+One&amp;subset=cyrillic,latin-ext" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
	<!-- //web-fonts -->
<style>
    .styled-table {
    border-collapse: collapse;
    margin: 25px 0;
    font-size: 0.9em;
    font-family: sans-serif;
    min-width: 95%;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
	margin-left: 20px; 
    margin-right: 20px;
}

.styled-table thead tr {
    background-color: #009879;
    color: #ffffff;
    text-align: left;
}

.styled-table th{
  font-weight: bold;
    color: #009879;
}

.styled-table th,
.styled-table td {
    padding: 12px 15px;
    text-align: left;
}

.styled-table tbody tr {
    border-bottom: 1px solid #dddddd;
}

.styled-table tbody tr:nth-of-type(even) {
    background-color: #f3f3f3;
}

.styled-table tbody tr:last-of-type {
    border-bottom: 2px solid #009879;
}

.styled-table tbody tr.active-row {
    font-weight: bold;
    color: #009879;
}
</style>
</head>

<body>
<!-- banner -->
<div class="inner-page-banner" id="home"> 	   
	<!--Header-->
	<header>
		<div class="container agile-banner_nav">
			<nav class="navbar navbar-expand-lg navbar-light bg-light">
				
				<h1><a class="navbar-brand" href="../home_manager.php">CUCEK<span class="display"></span></a></h1>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item">
							<a class="nav-link" href="../home_manager.php">Home <span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="../admin/admin_profile.php">My Profile</a>
						</li>
						<li>
						  <a class="nav-link" href="../includes/logout.inc.php">Logout</a>
						</li>
					</ul>
				</div>
			  
			</nav>
		</div>
    
	</header>
	<!--Header-->
</div>
<div>    
<?php
$query = "SELECT * FROM hostel";
$result = mysqli_query($conn, $query);

// Check if any data is returned
if (mysqli_num_rows($result) > 0) {
    echo "<table border='1' class='styled-table'>
            <tr>
                <th>Hostel ID</th>
                <th>Hostel Name</th>
                <th>Available Rooms</th>
                <th>No. of Rooms</th>
                <th>No. of Students</th>
                <th>Edit</th>
            </tr>";
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>
                <td>" . $row['Hostel_id'] . "</td>
                <td>" . $row['Hostel_name'] . "</td>
                <td>" . $row['current_no_of_rooms'] . "</td>
                <td>" . $row['No_of_rooms'] . "</td>
                <td>" . $row['No_of_students'] . "</td>
                <td><a href='admin_edit_hstl.php?id=" . $row['Hostel_id'] . "'>Update</a></td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "No data found.";
}
?>
</div>
<br>
<br>
<!-- team -->

<!-- //team -->


<!-- footer -->
<footer class="py-5">
	<div class="container py-md-5">
		<div class="footer-logo mb-5 text-center">
			<a class="navbar-brand" href="../home_manager.php" target="_blank">CUCEK <span class="display"></span></a>
		</div>
		<div class="footer-grid">
			
			<div class="list-footer">
				<ul class="footer-nav text-center">
					<li>
						<a href="../home_manager.php">Home</a>
					</li>
					
					<li>
						<a href="../admin/admin_profile.php">My Profile</a>
					</li>
					<li>
						<a href="../includes/logout.inc.php">Logout</a>
					</li>
				</ul>
			</div>
			
		</div>
	</div>
</footer>
<!-- footer -->

<!-- js-scripts -->		

	<!-- js -->
	<script type="text/javascript" src="../web_home/js/jquery-2.2.3.min.js"></script>
	<script type="text/javascript" src="../web_home/js/bootstrap.js"></script> <!-- Necessary-JavaScript-File-For-Bootstrap --> 
	<!-- //js -->
	<script type="text/javascript">
		$(document).ready(function() {
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
	<!-- //here ends scrolling icon -->
	<!-- start-smoth-scrolling -->
	<!-- HTML !-->

</body>
</html>