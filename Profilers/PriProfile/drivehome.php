<?php
  session_start();
 if (isset($_SESSION['priusername'])){
     }
   else {
     header("location: index.php");
   }
   
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!--favicon-->
        <link rel="shortcut icon" href="../favicon.ico" type="image/icon">
        <link rel="icon" href="../favicon.ico" type="image/icon">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">  
  
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
          <?php
      $Welcome = "Welcome";
          echo "<h1>" . $Welcome . "<br>". $_SESSION['priusername']. "</h1>";
     echo "<br>";
    
      ?>
        </header>
        
        <div class="mobile-menu-icon">
            <i class="fa fa-bars"></i>
          </div>
       
        </nav> -->
      </div>
      <!-- Main content --> 
      <div class="templatemo-content col-1 light-gray-bg">
        <div class="templatemo-top-nav-container">
          <div class="row">
            
          </div>
        </div>
        <div class="templatemo-content-container">
          <div class="templatemo-content-widget no-padding">
            <div class="panel panel-default table-responsive">
              <table class="table table-striped table-bordered templatemo-user-table">
                <thead>
                  <tr>
              
                    <td><a class="white-text templatemo-sort-by">Company Name </a></td>
                    <td><a  class="white-text templatemo-sort-by">Date </a></td>
                    
             <td><a  class="white-text templatemo-sort-by">SSC</a></td>
                       <td><a  class="white-text templatemo-sort-by">HSC/Dip </a></td>
   <td><a  class="white-text templatemo-sort-by">BE</a></td> 
    <td><a  class="white-text templatemo-sort-by">CTC</a></td>             
   <td><a  class="white-text templatemo-sort-by">Backlogs</a></td>
   <td><a  class="white-text templatemo-sort-by">History of Backlogs </a></td>
 
            <td><a  class="white-text templatemo-sort-by">Deatin years</a></td>
           
           
             
            
          </thead>
         </tr>
         
         <?php
      
$num_rec_per_page=15;
$connect = mysqli_connect('localhost','root','');
mysqli_select_db($connect,'placement');
if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; }; 
$start_from = ($page-1) * $num_rec_per_page; 
$sql = "SELECT * 
From addpdrive

-- WHERE a.CompanyName = u.CompanyName AND a.Date = u.Date GROUP BY u.ComapnyName
 LIMIT $start_from, $num_rec_per_page"; 
$rs_result = mysqli_query($connect,$sql); //run the query

while ($row = mysqli_fetch_array($rs_result)) 
{ 
?>
            <tr> 

<td><p><?php echo $row['CompanyName']; ?></p> </td>
<td><p><?php echo $row['Date']; ?> </p> </td> 

<td><p><?php echo $row['SSC'] ; ?></p>  </td> 
<td><p><?php echo $row['HSC/Dip']; ?> </p> </td>
<td><p><?php echo $row['BE']; ?></p> </td>
<td><p><?php echo $row['CTC']; ?></p> </td>
<td><p><?php echo $row['Backlogs']; ?></p>  </td>
<td><p><?php echo $row['HofBacklogs']; ?></p> </td>
<td><p><?php echo $row['DetainYears']; ?></p> </td>




</tr> 
<?php
}
?>

                </tbody>
              </table>  
        </div>
        </div>
        </div>


  <div class="pagination-wrap">
   <ul class="pagination">
        <?php 
    
$num_rec_per_page=15;
$connect = mysqli_connect('localhost','root','');
mysqli_select_db($connect,'placement');
$sql ="SELECT *
From addpdrive";

//WHERE a.CompanyName = u.CompanyName GROUP BY u.CompanyName

$rs_result = mysqli_query($connect,$sql); //run the query
$total_records = mysqli_num_rows($rs_result);  //count number of records
$totalpage = ceil($total_records / $num_rec_per_page); 

$currentpage = (isset($_GET['page']) ? $_GET['page'] : 1);
   if($currentpage == 0)
  {
     
  }
  else if( $currentpage >= 1  &&  $currentpage <= $totalpage  )
  {
  
    if( $currentpage > 1 && $currentpage <= $totalpage)
      {
        
        $prev = $currentpage-1;
        echo "<li><a  href='CompanyDetails.php?page=".$prev."'><</a></li>";
        
      }
  
  if($totalpage > 1){
$prev = $currentpage-1;
  for ($i=$prev+1; $i<=$currentpage+2; $i++){
    echo "<li><a href='CompanyDetails.php?page=".$i."'>".$i."</a></li>";
  }
  }
  if($totalpage > $currentpage  )
  {
    $nxt = $currentpage+1;
    echo "<li><a  href='CompanyDetails.php?page=".$nxt."' >></a></li>";
  }

   echo "<li><a>Total Pages:".$totalpage."</a></li>";
}

 ?> 
</ul>
</div>

              
            
       
          <footer class="text-right">
              <p>Copyright &copy; 2015 KJSIEIT-PMS | Developed by
              <a href="http://www.kjsieit.com" target="_parent">KJSIEIT Technologies</a>
        </p>
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