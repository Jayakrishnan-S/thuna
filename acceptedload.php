<?php  
 $l=$_POST["id"];
 
 if(isset($l))
  {
    include('../co.php');
 ?>


                   
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
				
					<br>
					<div class="wrap-table100" style="position:fixed">
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
                                            $sql="select * from tbl_report,tbl_zone,tbl_reporter,tbl_crime_type,tbl_station where tbl_station.station_id=tbl_report.station_id and tbl_zone.zone_id=tbl_report.zone_id and tbl_crime_type.crime_id=tbl_report.crime_id and tbl_report.action=2 and tbl_report.reporter_id=tbl_reporter.reporter_id and tbl_report.report_status=0 and tbl_report.login_id='$l'";
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
                                                                ?><a href="/thuna_reporting/report/uploads/<?php echo $row['evidence'] ?>" target="_blank"> <img  src="/thuna_reporting/report/uploads/<?php echo $row['evidence'] ?>"width="100px" height="100"></a>
                                                            <?php 
                                                                break;
                                                                case "png":
                                                                ?><a href="/thuna_reporting/report/uploads/<?php echo $row['evidence'] ?>" target="_blank"> <img  src="/thuna_reporting/report/uploads/<?php echo $row['evidence'] ?>"width="100px" height="100"></a>
                                                            <?php 
                                                                break;
                                                                case "jpeg":
                                                                ?><a href="/thuna_reporting/report/uploads/<?php echo $row['evidence'] ?>" target="_blank"><img  src="/thuna_reporting/report/uploads/<?php echo $row['evidence'] ?>"width="100px" height="100"></a></td><?php 
                                                                break;
                                                                case "pdf":
                                                                ?><a href="/thuna_reporting/report/uploads/<?php echo $row['evidence'] ?>" target="_blank"><img  src="/thuna_reporting/report/uploads/pdf.png"width="80px" height="90"></a></td><?php 
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
				


<?php
  }
  else
  {
    echo '<option value="">Error</option>';
    exit;
  }
    

   ?>