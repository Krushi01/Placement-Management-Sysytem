<?php
  session_start();
 if (isset($_SESSION['pusername'])){
    echo "Welcome, ".$_SESSION['pusername']."!";
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
    <title>QUERIES</title>
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
<?php
mysqli_connect('localhost','root','');
mysqli_select_db('details');
if(isset($_POST['s2']))
{ 
$Susn = $_POST['susn'];
$RESULT = mysqli_query("SELECT * FROM basicdetails WHERE USN='$Susn'");
$row = mysqli_fetch_assoc($RESULT);
echo "<br><h3>Details of Student '$Susn'&nbsp:&nbsp";
echo "</h3>";
            print "<center><tr>"; 
	print "<br><td>First Name :";
    echo $row['FirstName'];
	print "<br></td><td>Last Name :"; 
	echo $row['LastName'];	
	print "<br></td><td>USN :"; 
	echo $row['USN'];
	
	print "<br></td><td>Branch :"; 
	echo $row['Branch'];	
	print "<br></td><td>SSLC Percentage :";
	echo $row['SSC'];
	print "<br></td><td>PU/Diploma Percentage :";
	echo $row['HSC/Dip'];
	print "<br></td><td>BE Aggregate :";
	echo $row['BE'];
	print "<br></td><td>Current Backlogs :";
	echo $row['Backlogs'];
	print "<br></td><td>History of Backlogs :";
	echo $row['HofBacklogs'];
	print "<br></td><td>Detain Years :";
	echo $row['DetainYears'];
print "</td></tr></center>"; 
}
?>
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