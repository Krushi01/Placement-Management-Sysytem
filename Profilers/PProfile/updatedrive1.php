<?php
ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);
$connect = mysqli_connect("localhost", "root", ""); // Establishing Connection with Server
mysqli_select_db($connect,"updatedrive"); // Selecting Database from Server
if(isset($_POST['submit']))
{ 
$usn = $_POST['usn'];
// echo "$usn";
$name = $_POST['sname'];
$comname = $_POST['comname'];
$date = $_POST['Date'];
$attend = $_POST['Attendance'];
$wt = $_POST['WrittenTest'];
$gd = $_POST['GD'];
$tech = $_POST['Tech'];
$placed = $_POST['Placed'];
if($name !=''||$date !='')
{
if($query = mysqli_query($connect,"INSERT INTO updatedrive(USN, Name, CompanyName, Date, Attendence, WT, GD, Techical, Placed)
		VALUES('$usn', '$name', '$comname', '$date', '$attend', '$wt', '$gd', '$tech', '$placed')"))
        {
                      echo "<center>Data Inserted successfully...!!</center>";
		}
		else $query = mysqli_query($connect,"UPDATE updatedrive SET `USN` = '$usn', `Name` = '$name', `CompanyName` = '$comname', `Date` = '$date', `Attendence` = '$attend', `WT` = '$wt', `GD` = '$gd', `Techical` = '$tech', `Placed` = '$placed')");
		echo $query;
		die("Data Updated Successfully");

	}
}
?>