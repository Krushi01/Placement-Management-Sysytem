<?php
  session_start();
  	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);
 if (isset($_SESSION['pusername'])){
    
	   }
   else {
	   header("location: index.php");
  }  
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!--favicon-->
        <link rel="shortcut icon" href="favicon.ico" type="image/icon">
        <link rel="icon" href="favicon.ico" type="image/icon">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">  
    <title>Manage Students</title>
    <meta name="description" content="">
    <meta name="author" content="templatemo">
    
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,700' rel='stylesheet' type='text/css'>
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/templatemo-style.css" rel="stylesheet">
    
    
  </head>  
  <body>
  <div class="bg">
  <div class="templatemo-content-container">
          <div class="templatemo-content-widget no-padding">
            <div class="panel panel-default table-responsive">
			<table class="table table-striped table-bordered templatemo-user-table">
                <thead>
                  <tr>            
                    <td><a class="white-text templatemo-sort-by">First Name </a></td>
                    <td><a  class="white-text templatemo-sort-by">Last Name </a></td>
                    <td><a  class="white-text templatemo-sort-by">USN </a></td>
                                
   <td><a  class="white-text templatemo-sort-by">Branch </a></td>
   <td><a  class="white-text templatemo-sort-by">SSC </a></td>
   <td><a  class="white-text templatemo-sort-by">HSC/Dip </a></td>
			      <td><a  class="white-text templatemo-sort-by">BE </a></td>
			      <td><a  class="white-text templatemo-sort-by">Backlogs </a></td>
				     <td><a class="white-text templatemo-sort-by">History Of Backlogs </a></td>
				     <td><a  class="white-text templatemo-sort-by">Detain Years </a></td> 
				  </thead>
			   </tr>			   
 <?php
 $num_rec_per_page=15;		
$con = mysqli_connect('localhost','root','');
mysqli_select_db($con,'placement');
if(isset($_POST['s1']))
{ 
$Sname = $_POST['sname'];
$query = "SELECT count(*) FROM basicdetails WHERE  `Approve`='1' AND (`FirstName` LIKE '%$Sname%' or `LastName` LIKE '%$Sname%')";
$RESULT = mysqli_query($con,$query);
$data=mysqli_fetch_assoc($RESULT);
echo "<br><h3>Number of Students with Name '$Sname'&nbsp:&nbsp";
echo $data['count(*)'];
echo "</h3>"; 
$query1 = "SELECT * FROM basicdetails WHERE `Approve`='1' AND (`FirstName` LIKE '%$Sname%' or `LastName` LIKE '%$Sname%')";
//echo $query1;
$sql = mysqli_query($con,$query1);
$row = mysqli_fetch_assoc($sql);
// if($RESULT)
// {
// while($row)
// {
	            print "<tr>"; 
print "<td>" . $row['ApprovalDate'] . "</td>";  
print "<td>" . $row['FirstName'] . "</td>"; 
print "<td>" . $row['LastName'] . "</td>"; 
print "<td>" . $row['USN'] . "</td>";  
print "<td>" . $row['Branch'] . "</td>"; 
print "<td>" . $row['SSC'] . "</td>"; 
print "<td>" . $row['HSC/Dip'] . "</td>"; 
print "<td>" . $row['BE'] . "</td>";
print "<td>" . $row['Backlogs'] . "</td>";
print "<td>" . $row['HofBacklogs'] . "</td>";
print "<td>" . $row['DetainYears'] . "</td>";




print "</tr>";
// }
}
// }
?>

     </tbody>
              </table>  
			  </div>
			  </div>
			  </div>
        
 <footer class="text-right">
            
					<p>Copyright &copy; 2015 KJSIEIT-PMS | Developed by
              <a href="http://www.kjsieit.com" target="_parent">KJSIEIT Technologies</a>
			
          </footer>         
        </div>
      </div>
    </div>    
    <!-- JS -->
    <script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>      <!-- jQuery -->
    <script type="text/javascript" src="js/templatemo-script.js"></script>      <!-- Templatemo Script -->
    <script>
      $(document).ready(function(){
        // Content widget with background image
        var imageUrl = $('img.content-bg-img').attr('src');
        $('.templatemo-content-img-bg').css('background-image', 'url(' + imageUrl + ')');
        $('img.content-bg-img').hide();        
      });
    </script>
</body>
</html>