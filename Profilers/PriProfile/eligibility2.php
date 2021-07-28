<?php
  session_start();
  if(isset($_SESSION["priusername"])){
    echo "Welcome, ".$_SESSION['priusername']."!";
  }
   else
	   header("location: index.php");
?>
<!doctype html>
    <html lang="en">
    <head>
      <link rel="stylesheet" type="text/css" href="style.css">
      <meta charset="UTF-8">
      <title>database connections</title>
    </head>
    <body>
	<center> <div>
	 
      <table  border="1" style="display: inline-block; border: 1px solid; float: left; ">
      <?php
      if(isset($_POST['submit']))
{ 
	  $branch = $_POST['Branch'];
$ssc= $_POST['ssc'];
$puaggregate = $_POST['puagg'];
$beaggregate= $_POST['beagg'];
$backlogs = $_POST['curback']; 
$hisofbk = $_POST['hob'];

mysql_connect('localhost','root','');
mysql_select_db('details');

$sql = "SELECT * FROM basicdetails WHERE Approve=1 and Branch='$branch' and SSC='$ssc' and HSC/Dip='$puaggregate' and BE='$beaggregate' and Backlogs='$backlogs' and HofBacklogs='$hisofbk'"; 




        
          while( $row = mysql_fetch_assoc($sql) )
{         
            echo
            "<tr>"."<td>".$row ['FirstName']."</td>". "</tr>";
              echo 
               "<tr>". "<td>".$row ['LastName']."</td>". "</tr>";
                echo
            
               "<tr>"."<td>".$row ['USN']."</td>". "</tr>";

               
               echo
               "<tr>"."<td>".$row ['Branch']."</td>". "</tr>";
             
             echo
               "<tr>"."<td>".$row ['10th Board']."</td>". "</tr>";
             echo
              "<tr>". "<td>".$row ['HSC/Diploma']."</td>". "</tr>";
              echo
               "<tr>"."<td>".$row ['Overall cgpi']."</td>". "</tr>";
            echo  
               "<tr>"."<td>".$row ['Backlogs']."</td>". "</tr>";
              echo
              "<tr>". "<td>".$row ['HofBacklogs']."</td>". "</tr>";
            echo
               "<tr>"."<td>".$row ['DetainYears']."</td>". "</tr>\n";
          }
}
        ?>
		</div></center>        
    
     
    </table>
	</body>
    </html>