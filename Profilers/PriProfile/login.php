
<?php
  session_start();
  if(isset($_SESSION["priusername"])){
   
  }
   else
	   header("location: index.php")
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
    <title>Principal - Home</title>
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
          echo "<h1>" . $Welcome . "<br>". $_SESSION['priusername']. "</h1>";
		  ?>
        </header>
        
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
          <li><a href="login.php" class="active"><i class="fa fa-home fa-fw" class="active"></i>Dashboard</a></li>
            <li><a href="Students Eligibility.php"><i class="fa fa-bar-chart fa-fw"></i>Check Students Eligibility</a></li>
            <li><a href="queries.php"><i class="fa fa-database fa-fw"></i>Queries</a></li>
            <li><a href="manage-users.php" ><i class="fa fa-users fa-fw"></i>Student Details</a></li>
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
                   <li>
                  <a href="../../Homepage/index.php">Home KJSIEIT-GROUP</a>
                </li>
                <li>
                  <a href="../../Drives/index.php">Drives Homepage</a>
                </li>
                <li>
                  <!-- <a href="Notif.php">Notification</a> -->
                </li>
                <li>
                  <a href="Change Password.php">Change Password</a>
                  </li>
              </ul>  
            </nav> 
          </div>
        </div>
        <div class="templatemo-content-container">
          <div class="templatemo-flex-row flex-content-row">
            <div class="templatemo-content-widget white-bg col-2">
              <i class="fa fa-times"></i>
              <div class="square"></div>
              <h2 class="templatemo-inline-block">Welcome to KJSIEIT GROUP</h2><hr>
              <p>There is a worth for everything so do logging in here. The Use of this is, You can View Student details, Check their Eligibility Criteria and U cvan look up drive details</p>    
              <p><a href="Students Eligibility.php">Check Students Eligibility</a></p>
              
              <p><a href="manage-users.php">Student Details</a></p>
              <p><a href="queries.php">Search any Details about Company </a></p>  
              <p><a href="StudentPlaced.php">Student Placed</a></p>        
            </div>
           
        </div>
          <div class="templatemo-flex-row flex-content-row">
            <div class="col-md-12">
              <div class="templatemo-content-widget orange-bg">
                <i class="fa fa-times"></i>
                <div class="media">
                  <div class="media-left">
                    <a href="drivehome.php">
                      <img class="media-object img-circle" src="images/clg_img.jpg" >
                    </a>
                  </div>
                  <div class="media-body">
                    <h2 class="media-heading text-uppercase">Company Criteria</h2>
                    <p>Click on and get the Latest Drive and Upcomming Drive Details</p>
                  </div>
                </div>
              </div>
              
            </div>
            
        </div>
        <footer class="col-md-12">
                <p>Copyright &copy; TS2538 @2020 K.J.Somaiya Institute of Engineering And Information Technology | Developed by
              <a href="http://www.kjsieit.com" target="_parent">KJSIEIT GROUP</a>
        </p>
          </footer>
      </div>
    </div>
    <!-- JS -->
    <script src="js/jquery-1.11.2.min.js"></script>
    <!-- jQuery -->
    <script src="js/jquery-migrate-1.2.1.min.js"></script>
    <!-- jQuery Migrate Plugin -->
    <script type="text/javascript" src="js/templatemo-script.js"></script>
    <!-- Templatemo Script -->
  </body>

</html>