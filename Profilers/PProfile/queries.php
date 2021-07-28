<?php
  session_start();
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
    <title>Queries</title>
    <meta name="description" content="">
    <meta name="author" content="templatemo">   
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,700' rel='stylesheet' type='text/css'>
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/templatemo-style.css" rel="stylesheet">   
    
  </head>
  <body>  
    <!-- Left column -->
    <div class="templatemo-flex-row">
      <div class="templatemo-sidebar">
        <header class="templatemo-site-header">
          <div class="square"></div>
          <?php
		  $Welcome = "Welcome";
          echo "<h1>" . $Welcome . "<br>". $_SESSION['pusername']. "</h1>";
		 echo "<br>";		 		
		  ?>
        </header>
              
        <!-- Search box -->
        <form class="templatemo-search-form" role="search">
          <div class="input-group">
              <button type="submit" class="fa fa-search"></button>
              <input type="text" class="form-control" placeholder="Search" name="srch-term" id="srch-term">           
          </div>
        </form>
        <div class="mobile-menu-icon">
            <i class="fa fa-bars"></i>
          </div>
        <nav class="templatemo-left-nav">          
          <ul>
         <ul>
            <li><a href="login.php" ><i class="fa fa-home fa-fw"></i>Dashboard</a></li> 
            <li><a href="Placement Drives.php"><i class="fa fa-home fa-fw"></i>Placement Drives</a></li>           
            <li><a href="manage-users.php" ><i class="fa fa-users fa-fw"></i>View Students</a></li>
			<li><a href="#" class="active"><i class="fa fa-users fa-fw"></i>Queries</a></li>
      <li><a href="Students Eligibility.php"><i class="fa fa-sliders fa-fw"></i>Students Eligibility Status</a></li>
            <li><a href="logout.php"><i class="fa fa-eject fa-fw"></i>Sign Out</a></li>
          </ul>  
        </nav>
      </div>
      <!-- Main content --> 
      <div class="templatemo-content col-1 light-gray-bg">
        <div class="templatemo-top-nav-container">
          <div class="row">
            <nav class="templatemo-top-nav col-lg-12 col-md-12">
              <ul class="text-uppercase">
               <li><a href="../../Homepage/index.php">Home KJSIEIT-PMS</a></li>
                <li><a href="../../Drives/index.php">Drives Home</a></li>
                <!-- <li><a href="Notif.php">Notification</a></li> -->
                <li><a href="Change Password.php">Change Password</a></li>
              </ul>  
            </nav> 
          </div>
        </div>		
        <div class="templatemo-content-container">
		<div class="templatemo-content-widget no-padding">		
		<center><ul>
					
					<div>
					<li><h3>Company Queries : &nbsp <a href="comsearch.php" class="templatemo-blue-button">Click Here</a></h3></li></div>
					<br><br><br>
					
					</ul>		
		</div>
		</div>
          <footer class="text-right">
            <p>Copyright &copy; 2005-2018 KJSIEIT-PMS
            | Developed by <a href="http:// www.kjsieit.com" target="_parent">KJSIEIT Technologies</a></p>
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