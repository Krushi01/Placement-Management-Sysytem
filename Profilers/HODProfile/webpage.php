<!DOCTYPE html>
<html>
    <head>
        <title>Database</title>
        
    </head>
    <body>
        <h1 align ="center"> Database connection MySQL in PHP </h1>
        <form method="post" name="database">
        <table>
            <tr>
                <th>Student name</th>
                th><input type=text name="student_name" value="<?php  echo @$student_name;?>"/></th>
            </tr> 
            
            <tr>
                <th>Student Id</th>
                <th><input type="number" name="student_id" value="<?php  echo @$student_id;?>"/></th>
            </tr> 
            <tr>
                <th>Points</th>
                <th><input type="number" name="points" value="<?php  echo @$points;?>"/></th>
            </tr>
            <tr>
                <th>Select Your Choice</th>
                <th>
                <select name="choice">
                    <option>Insert</option>
                <option>Delete</option>
                    <option>Update</option>
                    <option>Select</option>
                </select>
                </th>
            </tr>
            <tr>
                
                <th colspan="2">
                <input type="submit" 
                name="save" value="Submit"/>
                </th>
            </tr>
        </table>
                </form>
    </body>
</html>
<?php
extract($_POST);
if(isset($save))
{
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "student";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: ");
}

switch ($choice) {
    case 'Insert':
        $sql = "INSERT INTO students (student_id, student_name, points) VALUES('$student_id','$student_name', $points)";
        if ($conn->query($sql) == TRUE && $student_name!="" && $points!="")
        {
            echo "New record created successfully";         
        }
 else
            echo "Enter Data";
        break;
    case 'Delete':
        $sql = "DELETE FROM students where student_id=$student_id";
        if ($conn->query($sql) == TRUE && $student_id!="")
        {
            echo "Deleted successfully";        
        }
        else
            echo "Enter student Id";
        break;
    case 'Update':
        $sql = "UPDATE students set points=$points where student_id = $student_id";
if ($conn->query($sql) == TRUE && $student_id!="")
        {
            echo "Updated successfully";        
        }
        else
        {
            echo "Enter points";
        }
break;
    case 'Select':
        $sql = "SELECT * FROM students";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) 
        {
          while($row = $result->fetch_assoc()) 
          {
            echo "student Name: " . $row["student_name"]. " student Id:  " . $row["student_id"]. "Points:  " . $row["points"]. "<br>";
  }
} else {
  echo "0 results";
}
}
$conn->close();
}
?>


