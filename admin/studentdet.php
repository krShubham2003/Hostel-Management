
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
.accordion {
  background-color: #3D3C3A;
  color: white;
  cursor: pointer;
  padding: 18px;
  width: 100%;
  border: none;
  text-align: center;
  font-weight: bold;
  outline: none;
  font-size: 15px;
  transition: 0.4s;
}

.active, .accordion:hover {
  background-color: black;
}

.accordion:after {
  content: '\002B';
  color: #777;
  font-weight: bold;
  float: right;
  margin-left: 5px;
}

.active:after {
  content: "\2212";
}

.panel {
  padding: 0 18px;
  background-color: white;
  max-height: 0;
  overflow: hidden;
  transition: max-height 0.2s ease-out;
}
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

<button class="accordion">Hostel A</button>
<div class="panel">
  <table class="styled-table">
  <tr>
    <th>Student ID</th>
    <th>Name</th>
		<th>Mobile</th>
		<th>Year</th>
    </tr>
  <?php
    $sql = "SELECT * FROM student WHERE Hostel_id = 1 and Approval_status = 1";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
          ?> 
          <tr>
                <td> <?php echo $row['Student_id']; ?> </td>
                <td> <?php echo $row['Fname']." ".$row['Lname']; ?> </td>
                <td> <?php echo $row['Mob_no']; ?> </td>
                <td> <?php echo $row['Year_of_study']; ?> </td>
          </tr>
          <?php
  }
}else {
  ?> <tr> <td><?php
      echo "No Record";
  }
?></td></tr>
</table>
</div>
<button class="accordion">Hostel B</button>
<div class="panel">
<table class="styled-table">
  <tr>
    <th>Student ID</th>
    <th>Name</th>
		<th>Mobile</th>
		<th>Year</th>
    </tr>
  <?php
    $sql = "SELECT * FROM student WHERE Hostel_id = 2 and Approval_status = 1";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
          ?> 
          <tr>
                <td> <?php echo $row['Student_id']; ?> </td>
                <td> <?php echo $row['Fname']." ".$row['Lname']; ?> </td>
                <td> <?php echo $row['Mob_no']; ?> </td>
                <td> <?php echo $row['Year_of_study']; ?> </td>
          </tr>
          <?php
  }}
  else {
    ?> <tr> <td><?php
        echo "No Record";
    }
  ?></td></tr>
</table>
</div>
<button class="accordion">Hostel C</button>
<div class="panel">
  <table class="styled-table">
  <tr>
    <th>Student ID</th>
    <th>Name</th>
		<th>Mobile</th>
		<th>Year</th>
    </tr>
  <?php
    $sql = "SELECT * FROM student WHERE Hostel_id = 3 and Approval_status = 1";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
          ?> 
          <tr>
                <td> <?php echo $row['Student_id']; ?> </td>
                <td> <?php echo $row['Fname']." ".$row['Lname']; ?> </td>
                <td> <?php echo $row['Mob_no']; ?> </td>
                <td> <?php echo $row['Year_of_study']; ?> </td>
          </tr>
          <?php
  }}
  else {
    ?> <tr> <td><?php
        echo "No Record";
    }
  ?></td></tr>
</table>
</div>

<button class="accordion">Hostel D</button>
<div class="panel">
<table class="styled-table">
  <tr>
    <th>Student ID</th>
    <th>Name</th>
		<th>Mobile</th>
		<th>Year</th>
    </tr>
  <?php
    $sql = "SELECT * FROM student WHERE Hostel_id = 4 and Approval_status = 1";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
          ?> 
          <tr>
                <td> <?php echo $row['Student_id']; ?> </td>
                <td> <?php echo $row['Fname']." ".$row['Lname']; ?> </td>
                <td> <?php echo $row['Mob_no']; ?> </td>
                <td> <?php echo $row['Year_of_study']; ?> </td>
          </tr>
          <?php
  }}
  else {
    ?> <tr> <td><?php
        echo "No Record";
    }
  ?></td></tr>
</table>
</div>


<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight) {
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    } 
  });
}
</script>
<br>
<br>
<br>
<br>
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