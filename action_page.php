<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "uniassist";

// Create connection
$conn =mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} 

if (!empty($_POST)) {
	$vname=$_POST['fullname'];
	$vusername=$_POST['username'];
	$vemail=$_POST['email'];
	$vpass=$_POST['password'];

	$insert="INSERT INTO userinfo(ID,name,username,email,password) VALUES ('','$vname','$vusername','$vemail','$vpass')";

	if (mysqli_query($conn, $insert)) {
    echo "DONE";
}

}

 if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($dbname,$_POST['username']);
      $mypassword = mysqli_real_escape_string($dbname,$_POST['password']); 
      
      $sql = "SELECT * FROM userinfo  WHERE username = '$myusername' and password = '$mypassword'";
      $result = mysqli_query($dbname,$sql) or die(mysql_error());
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         session_register("myusername");
         $_SESSION['login_user'] = $myusername;
         
         header("location: welcome.php");
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   }


mysqli_close($conn);
?>