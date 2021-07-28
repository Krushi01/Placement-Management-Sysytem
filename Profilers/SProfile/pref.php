<?php
  session_start();
  ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);			

  if($_SESSION["username"]){
    echo "Welcome, ".$_SESSION['username']."!";
  }
   else {
	   header("location: index.php");
}
   
?>
<?php
$connect = mysqli_connect("localhost", "root", ""); // Establishing Connection with Server
mysqli_select_db($connect,"placement"); // Selecting Database from Server
if(isset($_POST['submit']))
{ 
$fname = $_POST['Fname'];
$lname = $_POST['Lname'];
$USN = $_POST['USN'];

$branch = $_POST['Branch'];
$per = $_POST['SSC'];
$puagg = $_POST['Puagg'];
$beaggregate = $_POST['Beagg'];
$back = $_POST['Backlogs'];
$hisofbk = $_POST['History']; 
$detyear = $_POST['Dety'];
{
	if($USN == $USN)
    {
    if($query = mysqli_query($connect,"INSERT INTO `basicdetails` ( `FirstName`, `LastName`, `USN`, 'Branch`, `SSC`, `HSC/Dip`, `BE`, `Backlogs`, `HofBacklogs`, `DetainYears`, `Approve`) 
          VALUES ('$fname', '$lname', '$USN',  '$branch', '$per', '$puagg', '$beaggregate', '$back', '$hisofbk', '$detyear', '0')"))
    {
				echo "<center>Details has been received successfully...!!</center>";
      }
	  
     
		else echo "FAILED";
}

else{
	$query = mysqli_query($connect,"INSERT INTO `basicdetails`(`FirstName`, `LastName`, `USN`,   `Branch`, `SSC`, `HSC/Dip`, `BE`, `Backlogs`, `HofBacklogs`, `DetainYears`, `Approve`) 
          VALUES ('$fname', '$lname', '$USN',  '$branch', '$per', '$puagg', '$beaggregate', '$back', '$hisofbk', '$detyear', '0')");
				echo "<center>Details has been received successfully...!!</center>";
	  
}
}
}
?>


<?php
$connect = mysqli_connect("localhost", "root", ""); // Establishing Connection with Server
mysqli_select_db($connect,"placement"); // Selecting Database from Server
if(isset($_POST['update']))
{ 
$fname = $_POST['Fname'];
$lname = $_POST['Lname'];
$USN = $_POST['USN'];

// $sun = $_SESSION["username"];

$branch = $_POST['Branch'];
$per = $_POST['Percentage'];
$puagg = $_POST['Puagg'];
$beaggregate = $_POST['Beagg'];
$back = $_POST['Backlogs'];
$hisofbk = $_POST['History']; 
$detyear = $_POST['Dety'];

if($USN !='')
{
	// if($USN == $sun)
	// {
		
	$sql = mysqli_query($connect,"SELECT * FROM `placement`.`basicdetails` WHERE `USN`='$USN'");
	if(mysqli_num_rows($sql) == 1)
	{
  
		// if()
               // {
		$query = mysqli_query($connect,"UPDATE `placement`.`basicdetails` SET `FirstName`='$fname', `LastName`='$lname',  `Branch`= '$branch', `SSC`='$per', `HSC/Dip`='$puagg', `BE`='$beaggregate', `Backlogs`='$back', `HofBacklogs`='$hisofbk', `DetainYears`='$detyear' ,`Approve`='0'
           WHERE `basicdetails`.`USN` = '$USN'");
				echo "<center>Data Updated successfully...!!</center>";
               // }
	  
            // else echo "<center>FAILED</center>";
		
	}	
	else
	{
	 echo "<center>NO record found for update</center>";
	}
// else
// 	{
// 	echo "<center>enter your usn only</center>";
// }
}
}

?>