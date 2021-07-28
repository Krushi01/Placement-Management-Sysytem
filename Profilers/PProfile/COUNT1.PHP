<?php
  session_start();
 if (isset($_SESSION['pusername'])){
    
	
	   }
   else {
	   header("location: index.php");
   }
   
?>
<!DOCTYPE html>
<html>
<head>
</head>
<body>
	<div class="bg">
  <div class="templatemo-content-container">
          <div class="templatemo-content-widget no-padding">
            <div class="panel panel-default table-responsive">
			<table class="table table-striped table-bordered templatemo-user-table">
                <thead>
                  <tr>            
                    <td><a class="white-text templatemo-sort-by"> USN </a></td>
                    <td><a  class="white-text templatemo-sort-by"> Name </a></td>
                    <td><a  class="white-text templatemo-sort-by">Company Name </a></td>
                    <td><a  class="white-text templatemo-sort-by">Date </a></td>
					   <td><a  class="white-text templatemo-sort-by">Attendance </a></td>
                       <td><a  class="white-text templatemo-sort-by">WT</a></td>
   <td><a  class="white-text templatemo-sort-by">GD </a></td>               
   <td><a  class="white-text templatemo-sort-by">Technical </a></td>
   <td><a  class="white-text templatemo-sort-by">Placed </a></td>
  				  </thead>
			   </tr>			   
<center>
<?php
			
$con = mysqli_connect('localhost','root','');
mysqli_select_db($con,'placement');
if(isset($_POST['submit']))
{ 
$cname = $_POST['cname'];

$date= $_POST['date'];
// $query = "SELECT Attendence from updatedrive where Attendence=1 and CompanyName='$cname' and Date='$date'";
$query = "SELECT count(*) FROM updatedrive WHERE  `Attendence`='1' AND (`CompanyName` LIKE '%$cname%' or `Date` LIKE '%$date%')";

// echo $query;
$RESULT=mysqli_query($con,$query);
$data=mysqli_fetch_assoc($RESULT);
echo "<br>Number of Students Attended&nbsp:&nbsp";
// echo $data['count(Attendence)'];

$query1 = "SELECT * FROM updatedrive WHERE `Attendence`='1' AND (`CompanyName` LIKE '%$cname%' or `Date` LIKE '%$date%')";
//echo $query1;
$sql = mysqli_query($con,$query1);
$row = mysqli_fetch_assoc($sql);
// while($row)
// {
	            print "<tr>"; 	
    echo '<td>'.$row['USN'].'</td>';	
	echo '<td>'.$row['Name'].'</td>';		
	echo '<td>'.$row['CompanyName'].'</td>';	
	echo '<td>'.$row['Date'].'</td>';	
    echo '<td>'.$row['Attendence'].'</td>';		
	echo '<td>'.$row['WT'].'</td>';	
	echo '<td>'.$row['GD'].'</td>';	 
	echo '<td>'.$row['Techical'].'</td>';		
	echo '<td>'.$row['Placed'].'</td>';	
	
print "</tr>"; 

}
?>
</center>
</tbody>
              </table>  
			  </div>
			  </div>
			  </div>
</div>
</body>
</html>