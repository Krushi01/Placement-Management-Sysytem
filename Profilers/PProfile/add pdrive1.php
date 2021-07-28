<?php
ini_set('display_errors', 1);
  ini_set('display_startup_errors', 1);
  error_reporting(E_ALL);
$connect = mysqli_connect("localhost", "root", ""); // Establishing Connection with Server
mysqli_select_db($connect,"addpdrive"); // Selecting Database from Server
if(isset($_POST['submit']))
{ 
$cname = $_POST['compny'];
$date = $_POST['date'];


$per = $_POST['ssc'];
$puagg = $_POST['puagg'];
$beaggregate = $_POST['beagg'];
$back = $_POST['curback'];
$hisofbk = $_POST['hob'];
$breakstud = $_POST['break'];
$otherdet = $_POST['odetails'];
if($cname !=''||$date !='')
{
    if($query = mysqli_query($connect,"INSERT INTO addpdrive(CompanyName, Date,  SSCAgg, HSCDIPLOMAgg, BEAgg, CurrentBacklogs, HistoryBacklogs, BreakStudies, otherDetails)
		VALUES ('$cname', '$date',$per', '$puagg', '$beaggregate', '$back', '$hisofbk', '$breakstud', '$otherdet')")){
                      echo "<center>Drive Inserted successfully</center>";
		}
		else die("FAILED");
}
}
?>