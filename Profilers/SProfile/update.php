<?php
  session_start();
  if(isset($_SESSION["pusername"])){
   
  }
   else
	   header("location: index.php")
?>
<!DOCTYPE html>
<html lang="en">
  
  <head>
    <!--favicon-->
        <link rel="shortcut icon" href="../favicon.ico" type="image/icon">
        <link rel="icon" href="../favicon.ico" type="image/icon">
      
    <link rel="shortcut icon" href="favicon.ico" type="image/icon">
    <link rel="icon" href="favicon.ico" type="image/icon">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Preferences</title>
    <meta name="description" content="">
    <meta name="author" content="templatemo">
    
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,700' rel='stylesheet' type='text/css'>
    <link href="../css/font-awesome.min.css" rel="stylesheet">
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/templatemo-style.css" rel="stylesheet">
    
  </head>
  <body>
    <!-- Left column -->
    <div class="templatemo-flex-row">
      <div class="templatemo-sidebar">
        <header class="templatemo-site-header">
          <div class="square"></div>
          
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
            <li>
              <a href="login.php"><i class="fa fa-home fa-fw"></i>Dashboard</a>
            </li>
            <!-- <li>
              <a href="#"><i class="fa fa-bar-chart fa-fw"></i>Placement Drives</a>
            </li> -->
            <li>
              <a href="#" class="active"><i class="fa fa-sliders fa-fw"></i>Preferences</a>
            </li>
            <li>
              <a href="logout.php"><i class="fa fa-eject fa-fw"></i>Sign Out</a>
            </li>
          </ul>  
        </nav>
      </div>
      <!-- Main content --> 
      
        
            <form action="updatedrive1.php" class="templatemo-login-form" method="post" enctype="multipart/form-data">
              <div class="row form-group">
                
				<div class="col-lg-6 col-md-6 form-group">
                  <label for="USN">USN</label>
                  <input type="text" name="usn" class="form-control" id="inputusn" placeholder="">
                </div>
                
				<div class="col-lg-6 col-md-6 form-group">
                  <label for="Name">Student Name</label>
                  <input type="text"  name="sname" class="form-control" id="inputName" placeholder="">
                </div>
				
				<div class="col-lg-6 col-md-6 form-group">
                  <label for="Name">Company Name</label>
                  <input type="text"  name="comname" class="form-control" id="inputName" placeholder="">
                </div>
				
				<div class="col-lg-6 col-md-6 form-group">
                  <label for="DOB">Date</label>
                  <input type="date" name="Date" class="form-control" id="DOB" placeholder="DD/MM/YYYY">
                </div>
				
				<div class="col-lg-6 col-md-6 form-group">
                  <label for="Attendance">Attendence</label>
			    <select name="Attendance" class="form-control">
                    <option value="select">Y/N</option>
                    <option value="1">Y</option>
			        <option value="0">N</option>
				</select>
                 </div>
                <div class="col-lg-6 col-md-6 form-group">
                  <label for="written test">Written Test</label>
				<select name="WrittenTest" class="form-control">
                    <option value="select">Y/N</option>
                    <option value="1">Y</option>
			        <option value="0">N</option>
			    </select>                 
                </div>
				<div class="col-lg-6 col-md-6 form-group">
                  <label for="Group disscussion"> Group Disscussion</label>
				<select name="GD" class="form-control">
                    <option value="select">Y/N</option>
                    <option value="1">Y</option>
			        <option value="0">N</option>
				</select> 
                </div>				
                <div class="col-lg-6 col-md-6 form-group">
                  <label for="Technical">Technical</label>
                 	<select name="Tech" class="form-control">
                    <option value="select">Y/N</option>
                    <option value="1">Y</option>
			        <option value="0">N</option>
			    </select>
                </div>
				<div class="col-lg-6 col-md-6 form-group">
                  <label class="control-label templatemo-block">Placed</label>
                  <select name="Placed" class="form-control">
                    <option value="select">Y/N</option>
                    <option value="1">Y</option>
                    <option value="0">N</option>                   
                  </select>
				  </div>
				  <br>				  
              
            </form>
          </div>
          
          </footer>
        </div>
      </div>
    </div>
    <!-- JS -->
    <script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>
    <!-- jQuery -->
    <script type="text/javascript" src="js/bootstrap-filestyle.min.js"></script>
    <!-- http://markusslima.github.io/bootstrap-filestyle/ -->
    <script type="text/javascript" src="js/templatemo-script.js"></script>
    <!-- Templatemo Script -->
  </body>
</html>