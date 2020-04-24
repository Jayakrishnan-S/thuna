<?php
session_start();
if(isset($_SESSION['loginid'])){
	$l=$_SESSION['loginid'];
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
	
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="table_style/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="table_style/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="table_style/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="table_style/vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="table_style/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="table_style/vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="table_style/css/util.css">
	<link rel="stylesheet" type="text/css" href="table_style/css/main.css">
	
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
          
          <li class="active"><a href="accepted_ureport.php">Filed Reports</a></li>
          <li><a href="report_status.php">Pending Reports</a></li>
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

					<style>
						table th:nth-child(1), td:nth-child(1) { min-width: 100px;  max-width: 100px; }
						table th:nth-child(2), td:nth-child(2) { min-width: 100px; max-width: 100px; }
						table th:nth-child(3), td:nth-child(3) { min-width: 130px; max-width: 130px; }
						table th:nth-child(4), td:nth-child(4) { min-width: 130px; max-width: 130px; }
						table th:nth-child(5), td:nth-child(5) { min-width: 130px;  max-width: 130px; }
						table th:nth-child(6), td:nth-child(6) { min-width: 100px; max-width: 100px; }
						table th:nth-child(7), td:nth-child(7) { min-width: 100px; max-width: 100px; }
						table th:nth-child(8), td:nth-child(8) { min-width: 100px; max-width: 100px; }
						table th:nth-child(9), td:nth-child(9) { min-width: 100px;  max-width: 100px; }
						table th:nth-child(10), td:nth-child(10) { min-width: 150px; max-width: 150px; }
						table th:nth-child(11), td:nth-child(11) { min-width: 100px; max-width: 100px; }
						table th:nth-child(12), td:nth-child(12) { min-width: 100px; max-width: 100px; }
					</style>

	<!-- Hero section -->
	<section class="hero-section">
	
			<div class="hs-item set-bg"data-setbg="img/bg3.jpg" >
				<div class="container">	
				
					<div class="app-main__outer">
						<div class="app-main__inner">
							<div  style="position: absolute;margin-top:-370px">
								<ul class="body-tabs body-tabs-layout tabs-animated body-tabs-animated nav" >
									<li class="nav-item">
										<a rnole="tab" class="nav-link active" id="tab-0" data-toggle="tab" href="#tab-content-0">
										<button id="b1" class="btn-wide mb-2 mr-2 btn btn-shadow btn-outline-primary btn-lg" value="100">Approved reports</button>
										</a>
									</li>
									<li class="nav-item">
										<a role="tab" class="nav-link" id="tab-1" data-toggle="tab" href="#tab-content-1">
										<button id="b2" class="btn-wide mb-2 mr-2 btn btn-shadow btn-outline-primary btn-lg">Direct Action Taken</button>
										</a>
									</li>
									<li class="nav-item">
										<a role="tab" class="nav-link" id="tab-2" data-toggle="tab" href="#tab-content-2">
										<button id="b3" class="btn-wide mb-2 mr-2 btn btn-shadow btn-outline-primary btn-lg"value="100">Rejected Reports</button>
										</a>
									</li>
									
								</ul>
							</div>
							<div class="tab-content">
								<div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
									<div class="row">
										<div class="col-lg-12">
											<style>
												#b1{
													border-color:#e9ecef59;
													color:#f2f2f2;
													border-width:1.5px;	
													/* background-color:#003d7f; */
												}
												#b2{
													border-color:#e9ecef59;
													color:#f2f2f2;
													border-width:1.5px;	
												}
												#b3{
													border-color:#e9ecef59;
													color:#f2f2f2;
													border-width:1.5px;	
												}
											</style>
											<div style="height=425px;background-color:transperent;position:absolute;margin-top:-300px">
												<div class="wrap-table100" id="det" style="position:relative;" >
													<div class="table100 ver2 m-b-110">
														<div class="table100-head">
															<table class="table-bordered" >
																<thead style="background: white;position: sticky;top: 0;box-shadow: 0 2px 2px -1px rgba(0, 0, 0, 0.4);">
																	<tr>
																		<th>Reporter Type</th>
																		<th>Crime Type</th>
																		<th>City</th>
																		<th>Zone</th>
																		<th>Station Area</th>
																		<th>Reported Date</th>
																		<th>Incident Date</th>
																		<th>Incident Time</th>
																		<th>Evidence</th>
																		<th>Details</th>
																		<th>FIR</th>
																	</tr>
																</thead>
															</table>
														</div>
														<br>	
														<div class="table100-body js-pscroll">
															<table class="table table-hover table-striped table-bordered">
																<tbody>
																	<?php
																	$sql="select * from tbl_report,tbl_zone,tbl_reporter,tbl_crime_type,tbl_station where tbl_station.station_id=tbl_report.station_id and tbl_zone.zone_id=tbl_report.zone_id and tbl_crime_type.crime_id=tbl_report.crime_id and tbl_report.reporter_id=tbl_reporter.reporter_id and  tbl_report.report_status=0 and tbl_report.action=1 and quick_status=1 and tbl_report.login_id=".$_SESSION['loginid'];
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
																			<td><?php echo $row['station_name'];?></td>
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
																						?><a href="/thuna_reporting/report/uploads/<?php echo $row['evidence'] ?>" target="_blank"> <img  src="/thuna_reporting/report/uploads/<?php echo $row['evidence'] ?>"width="59px" height="59px"></a>
																					<?php 
																						break;
																						case "png":
																						?><a href="/thuna_reporting/report/uploads/<?php echo $row['evidence'] ?>" target="_blank"> <img  src="/thuna_reporting/report/uploads/<?php echo $row['evidence'] ?>"width="59px" height="59px"></a>
																					<?php 
																						break;
																						case "jpeg":
																						?><a href="/thuna_reporting/report/uploads/<?php echo $row['evidence'] ?>" target="_blank"><img  src="/thuna_reporting/report/uploads/<?php echo $row['evidence'] ?>"width="59px" height="59px"></a></td><?php 
																						break;
																						case "pdf":
																						?><a href="/thuna_reporting/report/uploads/<?php echo $row['evidence'] ?>" target="_blank"><img  src="/thuna_reporting/report/uploads/pdf.png"width="52px" height="59px"></a></td><?php 
																						break;
																						default:?><a href="/thuna_reporting/report/uploads/<?php echo $row['evidence'] ?>" target="_blank">view evidence</a></td><?php 
																						break;
																					}
																				}
																				else{
																					echo "no evidence available";
																					
																				}
																					?>
																			</td>
																			<td><?php echo $row['details'];?></td>
																			<td>
																			<?php 
																			$r=$row['report_id'];
																			$sel="select * from tbl_fir where report_id='$r'";
																			$resul=mysqli_query($con,$sel);
																			$rowcount=mysqli_num_rows($resul);
																			if($rowcount>0) {
																				while($ro=mysqli_fetch_array($resul)) {
									
																			?>
																				
																				<a href="/thuna_reporting/report/uploads/<?php echo $ro['fir'] ?>" target="_blank">view FIR</a>																		
																				<?php 
																				}
																				}
																				else{
																					echo "FIR not generated";
																					
																				}
																				?>
																			
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
																</tbody>
															</table>
														</div>
													</div>	
												</div>
											</div>	
											
										</div>
										



									</div>

								</div>
								<div class="tab-pane tabs-animation fade" id="tab-content-1" role="tabpanel">
									<div class="row">
										<div class="col-lg-12">
										
											<div style="height=425px;background-color:transperent;position:absolute;margin-top:-300px">

												<div class="wrap-table100" id="det" style="position:relative; " >
													<div class="table100 ver2 m-b-110">
														<div class="table100-head">
															<table class="table-bordered" >
																<thead style="background: white;position: sticky;top: 0;box-shadow: 0 2px 2px -1px rgba(0, 0, 0, 0.4);">
																	<tr>

																	<th>Reporter Type</th>
																	<th>Crime Type</th>
																	
																	<th>Zone</th>
																	<th>Station Area</th>
																	<th>Reported Date</th>
																	<th>Incident Date</th>
																	<th>Incident Time</th>

																	
																	<th>Details</th>
																	<th>FIR</th>
																	</tr>
																</thead>
															</table>
														</div>
														<br>	
														<div class="table100-body js-pscroll">
															<table class="table table-hover table-striped table-bordered">
																<tbody>
																<?php
																	$sel="select *,tbl_report.city as rcity from tbl_report,tbl_zone,tbl_reporter,tbl_crime_type,tbl_station,tbl_login,tbl_reg where tbl_zone.zone_id=tbl_report.zone_id and tbl_crime_type.crime_id=tbl_report.crime_id and tbl_report.reporter_id=tbl_reporter.reporter_id and tbl_report.station_id=tbl_station.station_id and tbl_report.login_id=tbl_login.login_id and tbl_reg.login_id=tbl_login.login_id and tbl_report.action=1 and tbl_report.quick_status=2 and tbl_report.login_id=".$_SESSION['loginid'];
																	$result=mysqli_query($con,$sel);
																	$rowcount=mysqli_num_rows($result);
																	if($rowcount>0) {
																		while($row=mysqli_fetch_array($result)) {

																	?>


																	<tr>

																		<td><?php echo $row['reporter_type'];?></td>
																		<td><?php echo $row['crime_type'];?></td>
																		
																		<td><?php echo $row['zone'];?></td>
																		<td><?php echo $row['station_name'];?></td>
																		<td><?php echo $row['reporting_date'];?></td>
																		<td><?php echo $row['incident_date'];?></td>
																		<td><?php echo $row['incident_time'];?></td>
																		
																		<td><?php echo $row['details'];?></td>



																		<td >
																		
																		<?php
																		$r=$row['report_id'];
																		$sel="select * from tbl_fir where report_id='$r'";
																		$resul=mysqli_query($con,$sel);
																		$rowcount=mysqli_num_rows($resul);
																		if($rowcount>0) {
																			while($ro=mysqli_fetch_array($resul)) {
								   
																		 ?>
																			
																			<a href="/thuna_reporting/report/uploads/<?php echo $ro['fir'] ?>" target="_blank">view FIR</a>																		
																			<?php 
																			}
																			}
																			else{
																				echo "FIR not generated";
																				
																			}
																					   ?>
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
																</tbody>
															</table>
														</div>
													</div>	
												</div>	
											</div>
										</div>
										

										
									</div>

								</div>
								<div class="tab-pane tabs-animation fade" id="tab-content-2" role="tabpanel">
									<div class="row">
									
										<div class="col-lg-12">
											<div style="height=425px;background-color:transperent;position:absolute;margin-top:-300px">

												<div class="wrap-table100" id="det" style="position:relative;" >
													<div class="table100 ver2 m-b-110">
														<div class="table100-head">
															<table class="table-bordered" >
																<thead style="background: white;position: sticky;top: 0;box-shadow: 0 2px 2px -1px rgba(0, 0, 0, 0.4);">
																	<tr>
																		<th>Reporter Type</th>
																		<th>Crime Type</th>
																		<th>City</th>
																		<th>Zone</th>
																		<th>Station Area</th>
																		<th>Reported Date</th>
																		<th>Incident Date</th>
																		<th>Incident Time</th>
																		<th>Evidence</th>
																		<th>Details</th>
																		<th>Rejected Reason</th>
																	</tr>
																</thead>
															</table>
														</div>
														<br>	
														<div class="table100-body js-pscroll">
															<table class="table table-hover table-striped table-bordered">
																<tbody>
																	<?php
																	$sql="select * from tbl_report,tbl_zone,tbl_reporter,tbl_crime_type,tbl_station where tbl_station.station_id=tbl_report.station_id and tbl_zone.zone_id=tbl_report.zone_id and tbl_crime_type.crime_id=tbl_report.crime_id and tbl_report.action=2 and tbl_report.reporter_id=tbl_reporter.reporter_id and tbl_report.report_status=0 and tbl_report.login_id=".$_SESSION['loginid'];
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
																		<td><?php echo $row['station_name'];?></td>
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
																						?><a href="/thuna_reporting/report/uploads/<?php echo $row['evidence'] ?>" target="_blank"> <img  src="/thuna_reporting/report/uploads/<?php echo $row['evidence'] ?>"width="59px" height="59px"></a>
																					<?php 
																						break;
																						case "png":
																						?><a href="/thuna_reporting/report/uploads/<?php echo $row['evidence'] ?>" target="_blank"> <img  src="/thuna_reporting/report/uploads/<?php echo $row['evidence'] ?>"width="59px" height="59px"></a>
																					<?php 
																						break;
																						case "jpeg":
																						?><a href="/thuna_reporting/report/uploads/<?php echo $row['evidence'] ?>" target="_blank"><img  src="/thuna_reporting/report/uploads/<?php echo $row['evidence'] ?>"width="59px" height="59px"></a></td><?php 
																						break;
																						case "pdf":
																						?><a href="/thuna_reporting/report/uploads/<?php echo $row['evidence'] ?>" target="_blank"><img  src="/thuna_reporting/report/uploads/pdf.png"width="52px" height="59px"></a></td><?php 
																						break;
																						default:?><a href="/thuna_reporting/report/uploads/<?php echo $row['evidence'] ?>" target="_blank">view evidence</a></td><?php 
																						break;
																					}
																				}
																					?>
																		</td>

																		<td><?php echo $row['details'];?></td>
																								<td><?php echo $row['reason'];?></td>	



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
																</tbody>
															</table>
														</div>
													</div>	
												</div>
											</div>
										</div>
										

									</div>

								</div>
								<div class="tab-pane tabs-animation fade" id="tab-content-3" role="tabpanel">
									<div class="row">
										

										<div class="col-lg-12">
											<div class="main-card mb-3 card">
												<div class="card-body"><h5 class="card-title">Sizing</h5>
													<div class="text-center">
														<button class="mb-2 mr-2 btn btn-dashed btn-outline-primary btn-lg">Large</button>
														<button class="mb-2 mr-2 btn btn-dashed btn-outline-primary">Normal</button>
														<button class="mb-2 mr-2 btn btn-dashed btn-outline-primary btn-sm">Small</button>
													</div>
												</div>
											</div>
										</div>
									</div>

								</div>
								<div class="tab-pane tabs-animation fade" id="tab-content-4" role="tabpanel">
									<div class="row">
										<div class="col-lg-12">
											<div class="main-card mb-3 card">
												<div class="card-body"><h5 class="card-title">Color States</h5>
													<button class="mb-2 mr-2 btn btn-gradient-primary">Primary</button>
													<button class="mb-2 mr-2 btn btn-gradient-secondary">Secondary</button>
													<button class="mb-2 mr-2 btn btn-gradient-success">Success</button>
													<button class="mb-2 mr-2 btn btn-gradient-info">Info</button>
													<button class="mb-2 mr-2 btn btn-gradient-warning">Warning</button>
													<button class="mb-2 mr-2 btn btn-gradient-danger">Danger</button>
													<button class="mb-2 mr-2 btn btn-gradient-focus">Focus</button>
													<button class="mb-2 mr-2 btn btn-gradient-alternate">Alt</button>
													<button class="mb-2 mr-2 btn btn-gradient-light">Light</button>
													<button class="mb-2 mr-2 btn btn-gradient-dark">Dark</button>
													<button class="mb-2 mr-2 btn btn-gradient-link">link</button>
												</div>
											</div>
										</div>
										
									</div>
								
								</div>
							</div>

						</div>
					
					</div>
				</div>
			</div>
		
	</section>
	<!-- Hero section end -->

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
	<script
  src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
  <script type="text/javascript" src="admin/assets/scripts/main.cba69814a806ecc7945a.js"></script>


	</body>
</html>

<style>
  .error{
    color:#e36969;
  }
</style>



<script src="table_style/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="table_style/vendor/bootstrap/js/popper.js"></script>
	<script src="table_style/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="table_style/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="table_style/vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
	<script>
		$('.js-pscroll').each(function(){
			var ps = new PerfectScrollbar(this);

			$(window).on('resize', function(){
				ps.update();
			})
		});
			
		
	</script>
<!--===============================================================================================-->
	<script src="table_style/js/main.js"></script>



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

}
else {
  echo "<script>window.location.href='index.php'</script>";
}
 ?>
