<?php
ini_set('display_errors', 1);
  ini_set('display_startup_errors', 1);
  error_reporting(E_ALL);
$connect = mysqli_connect("localhost", "root", ""); // Establishing Connection with Server
mysqli_select_db($connect,"placement"); // Selecting Database from Server
if(isset($_POST['submit']))
{ 
$cname = $_POST['CompanyName'];
$ctype = $_POST['Campus_Type'];
$date = $_POST['date'];

$per = $_POST['sslc'];
$puagg = $_POST['puagg'];
$beaggregate = $_POST['beagg'];
$back = $_POST['curback'];
$hisofbk = $_POST['hob'];
$breakstud = $_POST['break'];
$year = $_POST['year'];
$otherdet = $_POST['odetails'];
if($cname !=''||$date !='')
{
if($query = mysqli_query($connect,"INSERT INTO `placement`.`addpdrive`(`CompanyName`,`Campus_Type`,`Date`,`SSC`,`HSC/Dip`,`BE`,`Backlogs`,`HofBacklogs`,`DetainYears`,`Year`,`ODetails`)
		VALUES ('$cname','$ctype', '$date',  '$per', '$puagg', '$beaggregate', '$back', '$hisofbk', '$breakstud', '$year','$otherdet')")){
                      echo "<center>Data Inserted successfully...!!</center>";
		}
		else $query = mysqli_query($connect,"INSERT INTO `placement`.`addpdrive`(`CompanyName`,`Campus_Type`,`Date`,`SSC`,`HSC/Dip`,`BE`,`Backlogs`,`HofBacklogs`,`DetainYears`,`Year`,`ODetails`)
		VALUES ('$cname','$ctype', '$date',  '$per', '$puagg', '$beaggregate', '$back', '$hisofbk', '$breakstud', '$year','$otherdet')");
		echo $query;
		die("Data Updated Successfully");

	}
}
?>