<?php
 
  $subject = $_POST['Subject'];
  $message = $_POST['Message'];
  if(isset($_POST['submit']))
  {
	  $connect = mysqli_connect("localhost","root","") or die("Couldn't Connect");
		mysqli_select_db("comm") or die("Cant find DB");
		
		if($query = mysqli_query("INSERT into `comm`.`prim`(`Subject`,`Message`,`Images`) VALUES('$subject','$message','$images')"))
			echo "Message has been Posted";
		else
			echo "Message Posting Unsuccessfull! Try Again";
  }
 
  
  
  
  
   ?>
   
   