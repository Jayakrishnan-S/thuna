<?php
session_start();
if(isset($_SESSION['loginid'])){
	include('config/conn.php');
	 ?>
<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>Thuna-reports</title>
	<meta charset="UTF-8">
	<meta name="description" content="Cloud 83 - hosting template ">
	<meta name="keywords" content="cloud, hosting, creative, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->
	<link href="img/favicon.ico" rel="shortcut icon"/>

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/magnific-popup.css"/>
	<link rel="stylesheet" href="css/owl.carousel.min.css"/>
	<link rel="stylesheet" href="css/style.css"/>
	<link rel="stylesheet" href="css/animate.css"/>
	<link rel="stylesheet" type="text/css" href="report/css/montserrat-font.css">
	<link rel="stylesheet" type="text/css" href="report/fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
	<link rel="stylesheet" href="report/css/style.css"/>


	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<!-- Header section -->
	<header class="header-section">
		<div class="container">
			<a href="#" class="site-logo">
				<img src="img/logo.png" alt="logo">
			</a>
			<!-- Switch button -->
			<div class="nav-switch">
				<div class="ns-bar"></div>
			</div>
			<div class="header-right">
				<ul class="main-menu">
          <li ><a href="user_home.php">Home</a></li>
					
					<li><a href="accepted_ureport.php">Filed Reports</a></li>
					<li class="active"><a href="report_status.php">Pending Reports</a></li>
					<li><a href="#"id="myBtn">Report Crime</a></li>
					<li><a href="bidding.php">Bidding</a></li>

						<li ><a href="change_password/feedback.php">Feedback</a></li>
				</ul>
				<div class="header-btns">

					<a href="change_password/change_password.php" class="site-btn sb-c1">change password</a>
					<a href="logout.php" class="site-btn sb-c2">Logout</a>
		<!--			<a href="register/reg.php" class="site-btn sb-c3">Register</a> -->
				</div>
			</div>
		</div>
	</header>
	<!-- Header section end -->


	<!-- Hero section -->
	<section class="hero-section">
		<div class="hero-slider owl-carousel">

			<div class="hs-item set-bg" data-setbg="img/bg3.jpg" >
				<div class="container">
          			<div>
						<?php
						if (isset($_GET['msg'])) {
						$msg=$_GET['msg'];
						echo "<label style='color:red' id='message'>$msg</label>";
						// echo "<p id='msg'>$msg</p>";
						}

						?>
						<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
						<script type="text/javascript">
						$(document).ready(function(){
							$("span[id$='message']").fadeOut("slow");
						});
						</script>
						<p>
							<font size="4">
							Completed Complaints</font>
						</p>
          			</div>
					<table style="width: 100%; background-color:white" id="example2" class="table table-hover table-striped table-bordered">
						<thead>
							<tr>
								<th>Reporter Type</th>
								<th>Crime Type</th>
								<th>City</th>
								<th>Zone</th>
								
								<th>Reported Date</th>
								<th>Incident Date</th>
								<th>Incident Time</th>

								<th>Evidence</th>
								<th>Details</th>
								<th></th>

								<!--<th>Status</th>-->

							</tr>
						</thead>
						<tbody>
							<?php
							$sql="select * from tbl_report,tbl_zone,tbl_reporter,tbl_crime_type where tbl_zone.zone_id=tbl_report.zone_id and tbl_crime_type.crime_id=tbl_report.crime_id and tbl_report.action=0 and tbl_report.reporter_id=tbl_reporter.reporter_id and tbl_report.report_status=0 and tbl_report.quick_status='1' and tbl_report.login_id=".$_SESSION['loginid'];
							$result=mysqli_query($con,$sql);
							$rowcount=mysqli_num_rows($result);
							if($rowcount>0) {
								while($row=mysqli_fetch_array($result)) {

								?>

								<tr>

									<td><?php echo $row['reporter_type'];?></td>
									<td><?php echo $row['crime_type'];?></td>
									<td><?php echo $row['city'];?></td>
									<td><?php echo $row['zone'];?></td>
									
									<td><?php echo $row['reporting_date'];?></td>
									<td><?php echo $row['incident_date'];?></td>
									<td><?php echo $row['incident_time'];?></td>

									<td style="font-size: 15px;">
									<?php 
                                        if($row['evidence']!=""){
                                          $file_parts = pathinfo($row['evidence']);
                                          switch($file_parts['extension'])
                                          {
                                              case "jpg":
                                                ?><a href="/thuna_reporting/report/uploads/<?php echo $row['evidence'] ?>" target="_blank">view evidence</a>
                                            <?php 
                                              break;
                                              case "png":
                                                ?><a href="/thuna_reporting/report/uploads/<?php echo $row['evidence'] ?>" target="_blank">view evidence</a>
                                            <?php 
                                              break;
                                              case "jpeg":
                                                ?><a href="/thuna_reporting/report/uploads/<?php echo $row['evidence'] ?>" target="_blank">view evidence</a></td><?php 
                                              break;
                                              case "pdf":
                                                ?><a href="/thuna_reporting/report/uploads/<?php echo $row['evidence'] ?>" target="_blank">view evidence</a></td><?php 
                                              break;
                                              default:?><a href="/thuna_reporting/report/uploads/<?php echo $row['evidence'] ?>" target="_blank">view evidence</a></td><?php 
                                              break;
                                          }
                                        }
                                          ?></td>

									<td><?php echo $row['details'];?></td>

									<td>
										<form action="#" method="post">

											<input type="hidden" name="report_id" value="<?php echo $row['report_id'] ?>">
											<button class="btn btn-primary mr-2 mb-2 block-page-btn-example-1" name="cancel" id="cancel" type="submit"style="background-color:red">Cancel</button>
										</form>
									</td>
								</tr>
								<?php
									// code...
								}
								// code...
								}
								else {
								echo"<tr><td colspan='10'><font color='red'>no data found !</font></td></tr>";
								// echo "no data found";
								}

								?>
						</tfoot>
					</table>
					<div>
						<p>  
							<font size="4">
							Incompleted reports</font>
						</p>
					</div>
					<table style="width: 100%; background-color:white; " id="example2" class="table table-hover table-striped table-bordered">
						<thead>
							<tr>
								<th>Reporter Type</th>
								<th>Crime Type</th>
								
								<th>Zone</th>
								
								<th>Reported Date</th>
								<th>Incident Date</th>
								<th>Incident Time</th>

								
								<th></th>

								<!--<th>Status</th>-->

							</tr>
						</thead>
						<tbody>
							<?php
							$sql="select * from tbl_report,tbl_zone,tbl_reporter,tbl_crime_type where tbl_zone.zone_id=tbl_report.zone_id and tbl_crime_type.crime_id=tbl_report.crime_id and tbl_report.action=0 and tbl_report.reporter_id=tbl_reporter.reporter_id and tbl_report.report_status=0 and tbl_report.quick_status='0' and tbl_report.login_id=".$_SESSION['loginid'];
							$result=mysqli_query($con,$sql);
							$rowcount=mysqli_num_rows($result);
							if($rowcount>0) {
								while($row=mysqli_fetch_array($result)) {

								?>

								<tr>

									<td><?php echo $row['reporter_type'];?></td>
									<td><?php echo $row['crime_type'];?></td>
									
									<td><?php echo $row['zone'];?></td>
									
									<td><?php echo $row['reporting_date'];?></td>
									<td><?php echo $row['incident_date'];?></td>
									<td><?php echo $row['incident_time'];?></td>

									

									<td>
										<form action="report/report.php" method="GET">

											<input type="hidden" name="msg" value="<?php echo $row['rtime'] ?>">
											
											<button class="btn btn-primary mr-2 mb-2 block-page-btn-example-1" name="addd" id="addd" type="submit"style="background-color:#0062cc">Add details</button>
										</form>
									</td>
								</tr>
								<?php
									// code...
								}
								// code...
								}
								else {
								echo"<tr><td colspan='10'><font color='red'>no data found !</font></td></tr>";
								// echo "no data found";
								}

								?>
						</tfoot>
					</table>
				</div>
			</div>
		</div>
	</section>
	<!-- Hero section end -->







	<!-- About section end -->


	<!-- Milestones section -->

	<!-- Milestones section end -->



	<!-- Banner section -->
<!--	<section class="banner-section set-bg" data-setbg="img/banner-bg.jpg">
		<div class="container">
			<div class="banner-card">
				<h2>We are here to help you get started</h2>
				<h6>Sed ultrices interdum libero, laoreet facilisis dui fringilla ut. </h6>
				<a href="" class="site-btn sb-c3">Start</a>
			</div>
		</div>
	</section> -->
	<!-- Banner section end -->


	<!-- Footer top section -->
		<!-- Footer top section end -->


	<div id="myModal" class="modal" >
		<div class="modal-content">
			<span class="close">&times;</span>
			<div class="form-v10-content" style="width:500px;">
				<form class="form-detail" method="post" id="myform" enctype="multipart/form-data" onSubmit="return validation()">
					<div class="form-right">
						<h2>REPORT CRIME</h2>
						<div class="form-row form-row-2">
							<select name="reporter" id="reporter" onchange="change_reporter()" autocomplete="off" required>
								<option value="reporter" disabled selected>Reporter Type</option>
								<?php
								$sqlreporter=mysqli_query($con,"select * from tbl_reporter");
								$numreporter=mysqli_num_rows($sqlreporter);
								for ($i=0; $i <$numreporter ; $i++) {
									$row=mysqli_fetch_array($sqlreporter);

								?>
								<option value="<?php echo $row['reporter_id']; ?>"><?php echo $row['reporter_type']; ?></option>
								<?php }  ?>
							</select>
							<span class="select-btn">
								<i class="zmdi zmdi-chevron-down"></i>
							</span>
						</div>
						<div class="form-row form-row-2">
							<select name="crime" id="crime" onchange="change_crime()" autocomplete="off" required>
								<option value="crime" disabled selected>Crime Type</option>
								<?php
								$sqlcrime=mysqli_query($con,"select * from tbl_crime_type where type_status='0'");
								$numcrime=mysqli_num_rows($sqlcrime);
								for ($i=0; $i <$numcrime ; $i++) {
									$row=mysqli_fetch_array($sqlcrime);

								?>
								<option value="<?php echo $row['crime_id']; ?>"><?php echo $row['crime_type']; ?></option>
								<?php }  ?>
							</select>
							<span class="select-btn">
								<i class="zmdi zmdi-chevron-down"></i>
							</span>
						</div>
						<div class="form-group">
							<div class="form-row form-row-3">
								<select name="zone" id="zoned" onchange="change_zone()" autocomplete="off" required>
									<option value="place" disabled selected>Zone Location</option>
									<?php
										$sqlzone=mysqli_query($con,"select * from tbl_zone where zone_status='0'");
										$numzone=mysqli_num_rows($sqlzone);
										for ($i=0; $i <$numzone ; $i++) {
											$row=mysqli_fetch_array($sqlzone);
									?>
									<option value="<?php echo $row['zone_id']; ?>"><?php echo $row['zone']; ?></option>
									<?php }  ?>
								</select>
								<span class="select-btn">
									<i class="zmdi zmdi-chevron-down"></i>
								</span>
							</div>
							<div class="form-row form-row-4" id="station">
								<select name="station" id="stations" autocomplete="off" required>
									<option value="place" disabled selected>Station Area</option>
									
											
								</select>
								<span class="select-btn">
									<i class="zmdi zmdi-chevron-down"></i>
								</span>
							</div>
						</div>
						<div class="form-group">
							<div class="form-row form-row-3">
							<input placeholder="incident date" name="idate" class="idate" type="text" autocomplete="off"  onfocus="(this.type='date')" onblur="(this.type='text')" id="idate" required>
							</div>
						<div class="form-row form-row-4">
							<input placeholder="incident time" name="time" class="dob" type="text" autocomplete="off"  onfocus="(this.type='time')" onblur="(this.type='text')" id="time" required>
						</div>
						</div>
						<div class="form-row-last">
							<input type="submit" autocomplete="off"  name="report" class="register" value="Report Quickly">
							<input style="margin-left:20px"type="submit" autocomplete="off"  name="add" class="register" value="Add Details">
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>



	<style>
body {font-family: Arial, Helvetica, sans-serif;}

/* The Modal (background) */
.modal {
display: none; /* Hidden by default */
position: fixed; /* Stay in place */
z-index: 1; /* Sit on top */
padding-top: 100px; /* Location of the box */


width: 100%; /* Full width */
height: 100%; /* Full height */
overflow: auto; /* Enable scroll if needed */
background-color: rgb(0,0,0); /* Fallback color */
background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
background-color: #fefefe;
background-color: rgba(0,0,0,0);
margin-top: -120px;
left:500px;


width: 33%;
}

/* The Close Button */
.close {
color: #aaaaaa;
float: right;
font-size: 28px;
font-weight: bold;
}

.close:hover,
.close:focus {
color: #000;
text-decoration: none;
cursor: pointer;
}
</style>




<script>

var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");


// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal
btn.onclick = function() {
modal.style.display = "block";
}


// When the user clicks on <span> (x), close the modal
span.onclick = function() {
	modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
if (event.target == modal) {
modal.style.display = "none";
}
}
</script>



	<!-- Footer section -->
	<footer class="footer-section">
		<div class="container">
			<div class="footer-nav">
				<ul>
          <li><a href="user_home.php">Home</a></li>
					<li><a href="aboutlog.php">About us</a></li>
					<li><a href="accepted_ureport.php">Filed Reports</a></li>
					<li><a href="report_status.php">Pending Reports</a></li>
					<li><a href="#">Report Crime</a></li>

				</ul>
			</div>
			<div class="copyright">
				<p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Jayakrishnan S
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
</p>
			</div>
		</div>
	</footer>
	<!-- Footer section end -->


	<!--====== Javascripts & Jquery ======-->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/circle-progress.min.js"></script>
	<script src="js/main.js"></script>

	</body>
</html>
<script type="text/javascript">
function change_zone()
{
  var xmlhttp=new XMLHttpRequest();
  xmlhttp.open("GET","ajax.php?zone="+document.getElementById("zoned").value,false);
  xmlhttp.send(null);

  document.getElementById("station").innerHTML=xmlhttp.responseText;

}
</script>
<style>
  .error{
    color:#e36969;
  }
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.17.0/dist/jquery.validate.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="report/report.js"></script>
<?php
if (isset($_POST['add'])) {
	$reporter=$_POST['reporter'];
	$crime=$_POST['crime'];
	$zone=$_POST['zone'];
	$station=$_POST['station'];
	$idate=$_POST['idate'];
	$time=$_POST['time'];
	$rdate=date('Y-m-d');
	$rtime=time('H:i:s');
	$ins=mysqli_query($con,"INSERT INTO tbl_report(reporter_id, crime_id,
	zone_id,station_id,reporting_date,rtime, incident_date, incident_time,login_id,quick_status)
	VALUES ('$reporter','$crime','$zone','$station','$rdate','$rtime','$idate','$time',".$_SESSION['loginid'].",'0')");
	

	if (!$ins)
	{
		echo "<script>alert('error occured')</script>";
		// code...
	}
	else
	{
	echo "<script>window.location.href='report/report.php?msg=$rtime'</script>";
	}
}
if (isset($_POST['report'])) {
	$reporter=$_POST['reporter'];
	$crime=$_POST['crime'];
	$zone=$_POST['zone'];
	$station=$_POST['station'];
	$idate=$_POST['idate'];
	$time=$_POST['time'];
	$rdate=date('Y-m-d');
	$rtime=time('H:i:s');
	$ins=mysqli_query($con,"INSERT INTO tbl_report(reporter_id, crime_id,
	zone_id,station_id,reporting_date,rtime, incident_date, incident_time,login_id,quick_status)
	VALUES ('$reporter','$crime','$zone','$station','$rdate','$rtime','$idate','$time',".$_SESSION['loginid'].",'0')");
	if (!$ins)
	{
		echo "<script>alert('not reported')</script>";
		// code...
	}
	else
	{
	echo "<script>alert('quick submission of your complaint is processed.')</script>";
	echo "<script>window.location.href='report_status.php'</script>";
	}
}
if (isset($_POST['cancel'])) {
  $r=$_POST['report_id'];
  $sql="UPDATE tbl_report set report_status=1 where report_id=".$r;
  $res=mysqli_query($con,$sql) or die(mysqli_error($con));
  if($res)
  {
    echo "<script>window.location.href='report_status.php'</script>";
  }
  // code...
}
}
else {
  echo "<script>window.location.href='index.php'</script>";
}
 ?>
