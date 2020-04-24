<?php
session_start();
include('config/conn.php');
$l=$_SESSION['loginid'];
$e=$_POST['vehicle_id'];
$amount=$_POST['amount'];
$bid_id=$_POST['bid_id'];
$bd=date('Y-m-d');


$ins=mysqli_query($con,"INSERT INTO tbl_bid_claim(bid_id,login_id,amount,claim_date)VALUES ('$bid_id','$l',$amount,'$bd')");
if ($ins)
{   
    echo "<script>alert('successsfully claimed')</script>";
    echo "<script>window.location.href='bidding.php'</script>";
}
 ?>