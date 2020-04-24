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
    <link rel="stylesheet" type="text/css" href="login/css/main.css">

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
          
          <li ><a href="accepted_ureport.php">Filed Reports</a></li>
          <li><a href="report_status.php">Pending Reports</a></li>
          <li><a href="#"id="myBtn">Report Crime</a></li>
		  <li class="active"><a href="bidding.php">Bidding</a></li>

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
						table th:nth-child(1), td:nth-child(1) { min-width: 50px;  max-width: 50px; }
						table th:nth-child(2), td:nth-child(2) { min-width: 50px; max-width: 50px; }
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
								
							</div>
							<div class="tab-content">
								<div >
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
                                        
                                                                        <th>Vehicle</th>
                                                                        <th>Photo</th>
                                                                        <th>Details</th>
                                                                        <th></th>
                                                                        

                                                                        <!--<th>Status</th>-->

                                                                    </tr>
																</thead>
															</table>
														</div>
															
														<div class="table100-body js-pscroll">
															<table class="table table-hover table-striped ">
                                                            <tbody>


                                                                <?php
                                                                $cd=date('Y-m-d H:i:s');
                                                                $sel="select * from tbl_bidding,tbl_vehicle_list where tbl_vehicle_list.vehicle_id=tbl_bidding.vehicle_id and tbl_vehicle_list.vstatus=0 ";
                                                                $result=mysqli_query($con,$sel);
                                                                $rowcount=mysqli_num_rows($result);
                                                                if($rowcount>0) {
                                                                    while($row=mysqli_fetch_array($result)) {
                                                                        $e=$row['vehicle_id'];
                                                                        $ed=$row['end_date'];
                                                                        $bid_id=$row['bid_id'];
                                                                        $date1 = new DateTime("$cd"); 
                                                                        $date2 = new DateTime("$ed"); 
                                                                
                                                                        if($date1 > $date2)
                                                                        {
                                                                            $up=mysqli_query($con,"update tbl_vehicle_list set bid_status=2 where vehicle_id='$e'");
                                                                            
                                                                            $sql="select * from tbl_bid_claim where amount=(select MAX(amount) from tbl_bid_claim WHERE bid_id='$bid_id')";
                                                                            $resu=mysqli_query($con,$sql);
                                                                            $rowcoun=mysqli_num_rows($resu);
                                                                            if($rowcoun>0) {
                                                                                while($rz=mysqli_fetch_array($resu)) {
                                                                                    $lo=$rz['login_id'];
                                                                                    
                                                                                    $uu=mysqli_query($con,"update tbl_bidding set login_id=$lo where bid_id='$bid_id'");
                                                                                    
                                                                                    
                                                                                }
                                                                            }
                                                                        }
                                                                    }
                                                                }
                                                                ?>


                                                                <?php
                                                                $se="select * from tbl_reg where login_id='$l'";
                                                                $resul=mysqli_query($con,$se);
                                                                $rowcount=mysqli_num_rows($resul);
                                                                if($rowcount>0) {
                                                                        while($row=mysqli_fetch_array($resul)) {
                                                                            $p=$row['zone_id'];
                                                                        }
                                                                    }
                                                                    $sel="select * from tbl_bidding,tbl_vehicle_list,tbl_vehicle,tbl_vehicle_condition where tbl_vehicle_list.vehicle_id=tbl_bidding.vehicle_id and tbl_vehicle_condition.vcid=tbl_vehicle_list.condition_id and tbl_vehicle.vid=tbl_vehicle_list.vid and tbl_vehicle_list.zone_id='$p' and tbl_vehicle_list.vstatus=0 and tbl_vehicle_list.bid_status=1";
                                                                    $result=mysqli_query($con,$sel);
                                                                    $rowcount=mysqli_num_rows($result);
                                                                    if($rowcount>0) {
                                                                        while($row=mysqli_fetch_array($result)) {
                                                                            

                                                                    ?>

                                                                    <tr>
                                                                        
                                                                        
                                                                        <td style="text-align: center;font-size:25px"><b><?php echo $row['vehicle_type'];?></b>
                                                                        <br>
                                                                            <?php echo $row['model'];?>
                                                                        </td>
                                                                        <td>
                                                                        <?php 
                                                                            if($row['vphoto']!=""){
                                                                            $file_parts = pathinfo($row['vphoto']);
                                                                            switch($file_parts['extension'])
                                                                            {
                                                                                case "jpg":
                                                                                    ?><a href="/thuna_reporting/report/uploads/<?php echo $row['vphoto'] ?>" target="_blank"> <img  src="/thuna_reporting/report/uploads/<?php echo $row['vphoto'] ?>"width="130px" height="100"></a>
                                                                                <?php 
                                                                                break;
                                                                                case "png":
                                                                                    ?><a href="/thuna_reporting/report/uploads/<?php echo $row['vphoto'] ?>" target="_blank"> <img  src="/thuna_reporting/report/uploads/<?php echo $row['vphoto'] ?>"width="130px" height="100"></a>
                                                                                <?php 
                                                                                break;
                                                                                case "jpeg":
                                                                                    ?><a href="/thuna_reporting/report/uploads/<?php echo $row['vphoto'] ?>" target="_blank"><img  src="/thuna_reporting/report/uploads/<?php echo $row['vphoto'] ?>"width="130px" height="100"></a></td><?php 
                                                                                break;
                                                                                default:?><a href="/thuna_reporting/report/uploads/<?php echo $row['vphoto'] ?>" target="_blank">View Photo</a></td><?php 
                                                                                break;
                                                                            }
                                                                            }
                                                                            ?>
                                                                            <br>
                                                                            click to view
                                                                        </td>
                                                                        
                                                                        <td><b>Registered number:&ensp;</b> <?php echo $row['register_no'];?>&emsp;<b> KM Covered:&ensp;</b><?php echo $row['km'];?><br>
                                                                        <div style="margin-top:5px">  <b>Vehicle Condition:&ensp;</b><?php echo $row['v_condition'];?><br></div>
                                                                           
                                                                           <div style="margin-top:5px"> <div style="margin-left:-90px"><b>Basic Price:&emsp;</b></div><div style="position: absolute;font-size:20px;color:red;margin-left:210px;margin-top:-24px"><?php echo $row['price'];?>/-</div></div>
                                                                           <div style="margin-top:5px"><div style="margin-left:-90px"><b> Ending Date:&ensp;</b></div><div style="position: absolute;color:red;margin-left:215px;margin-top:-20px"><?php echo $row['end_date'];?></div></div>
                                                                        </td>
                                                                        
                                                                      
                                                                        <td>
                                                                            <form action="bid_cliam.php" method="post">
                                                                                <input class="input100" type="text" name="amount" id="amount" placeholder="Enter Your Bid Amount"style="background:#ddd"><br>
                                                                                <input type="hidden" name="vehicle_id" value="<?php echo $row['vehicle_id'] ?>">
                                                                                <input type="hidden" name="bid_id" value="<?php echo $row['bid_id'] ?>">
                                                                                <button class="btn btn-primary mr-2 mb-2 block-page-btn-example-1" type="submit"style="background-color:#4772e2;margin-top:-15px;">Claim</button>
                                                                                
                                                                            </form>
                                                                            <div style="margin-top:5px">
                                                                                <div style="text-align:left;width:70%">currently locked : 
                                                                                <?php
                                                                                    $z=$row['bid_id'];
                                                                                    $j=mysqli_query($con,"select fname,lname from tbl_reg where login_id=(select login_id from tbl_bid_claim where amount=(select MAX(amount) from tbl_bid_claim where bid_id='$z'))");
                                                                                    $m=mysqli_num_rows($j);

                                                                                            while($roz=$j -> fetch_assoc())
                                                                                            {
                                                                                                echo $roz['fname'].' '.$roz['lname'];
                                                                                            } 
                                                                                    ?>

                                                                                </div>

                                                                                <div style="text-align:left; position:relative; color:red;margin-left:250px;margin-top:-21px;width:190px">
                                                                                <!-- <div style="color:red"> -->
                                                                                 Price:
                                                                                <?php
                                                                                    $z=$row['bid_id'];
                                                                                    $j=mysqli_query($con,"select MAX(amount) as amount from tbl_bid_claim where bid_id='$z'");
                                                                                    $m=mysqli_num_rows($j);

                                                                                            while($roz=$j -> fetch_assoc())
                                                                                            {
                                                                                                echo $roz['amount'];
                                                                                            } 
                                                                                    ?>/-
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        
                                                                        
                                                                    </tr>

                                                                    <?php
                                                                    // code...
                                                                    }
                                                                    // code...
                                                                }
                                                                else{
                                                                    ?>
                                                                    <tr>
                                                                    <br>
                                                                    No Vehicle Available For Bidding.
                                                                    </tr>
                                                                    <?php
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
