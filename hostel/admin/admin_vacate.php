
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

.styled-table th,
.styled-table td {
    padding: 12px 15px;
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
    if (isset($_POST['approved']))
    {
        $room_id = $_POST['room_id'];
        $roll = $_POST['row_id'];
        $query3 = "UPDATE room SET Allocated = '0' where Room_id = '$room_id'";
		$result3 = mysqli_query($conn,$query3);
		$query4 = "UPDATE Student SET Hostel_id = NULL, Room_id = NULL, Approval_status = '0' WHERE Student_id = '$roll'";
		$result4 = mysqli_query($conn,$query4);
		$del = "DELETE FROM vacate WHERE Student_id= '$roll'";
		$rdel = mysqli_query($conn, $del);
		$appUpdateQuery2 = "UPDATE hostel SET No_of_students= No_of_students - 1 WHERE Hostel_id = '".$_POST['hstl_id']."'";
		$appUpdateResult2 = mysqli_query($conn, $appUpdateQuery2);
		$appUpdateQuery3 = "UPDATE hostel SET current_no_of_rooms = current_no_of_rooms + 1 WHERE Hostel_id = '".$_POST['hstl_id']."'";
		$appUpdateResult3 = mysqli_query($conn, $appUpdateQuery3);
        if($result4)
        {
            echo "<script type='text/javascript'>alert('Vacated Successfully')</script>";	
        }
    }
?>

<table class="styled-table">
    <tr>
        <th>Student ID</th>
        <th>Name</th>
		<th>Mobile</th>
		<th>Year</th>
		<th>Hostel</th>
		<th>Action</th>

    </tr>

<?php

    $selectQuery = "SELECT * FROM student WHERE Student_id in(select Student_id from vacate )";
    $sql = mysqli_query($conn, $selectQuery);
    $count = mysqli_num_rows($sql);
    if ($count>0)
    {            
        while ($row = mysqli_fetch_array($sql))
        {
?>
            <tr>
                <td> <?php echo $row['Student_id']; ?> </td>
                <td> <?php echo $row['Fname']." ".$row['Lname']; ?> </td>
                <td> <?php echo $row['Mob_no']; ?> </td>
                <td> <?php echo $row['Year_of_study']; ?> </td>
                <td> <?php 
				if($row['Hostel_id'] == 1)
				echo "A";
				elseif($row['Hostel_id'] == 2)
				echo "B";
				elseif($row['Hostel_id'] == 3)
				echo "C";
				elseif($row['Hostel_id'] == 4) 
				echo "D";
				//$_SESSION['stuappid'] = $row['id']; ?> </td>
                <td>
                    <form method="post" action="">
                        <input type="hidden" name="row_id" value="<?= $row['Student_id']; ?>" />
                        <input type="hidden" name="room_id" value="<?= $row['Room_id']; ?>" />
						<input type="hidden" name="hstl_id" value="<?= $row['Hostel_id']; ?>" />
                        <button type="submit" name="approved">Approve</button>
                    </form>
                </td>
            </tr>
<?php
        }
    } else {
		?> <tr> <td><?php
        echo "No Record";
    }
?></td></tr>

</table> 
</div>


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