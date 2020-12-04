<?php
$servername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "uniassist";

// Create connection
$conn =mysqli_connect($servername, $dbusername, $dbpassword, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} 

if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = $_POST['username'];
      $mypassword = $_POST['password']; 

$myusername=stripcslashes($myusername);
$mypassword=stripcslashes($mypassword);

$myusername=mysqli_real_escape_string($conn,$myusername);
$mypassword=mysqli_real_escape_string($conn, $mypassword);
      
      $sql = sprintf("SELECT * FROM userinfo  WHERE username = '$myusername' AND password = '$mypassword'");
      $result = mysqli_query($conn,$sql) or die("Connection failed: ".mysql_error());
      $row = mysqli_fetch_array($result);
      //$active = $row['active'];
      
      //$count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if ($row['username']==$myusername && $row['password']==$mypassword) {
      	# code...
      	echo "Login successful. Welcome ".$row['username'];
             $login_session = $row['username'];
   
   if(!isset($_SESSION['username'])){
      header("Location:Profile.php");
      session_start();
   $_SESSION['username'] = $login_session;
   }
      	
      } else {
      	# code...
      	echo "Login Failed";
      }


      

}


session_start();

if (isset($_POST["username"])) {
    $loginuser = $_POST["username"] ;
  
}

if (isset($_POST["id"])) {
    $logid=$_POST["id"];
}

$sql1 = sprintf("SELECT * FROM userinfo WHERE username = '$loginuser' OR ID = '$logid' ");
$result = mysqli_query($conn, $sql1) or die("Connection failed: ".mysql_error());



if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        $lid=$row["ID"];
        $luser=$row["username"];
        $lname=$row["name"];
        $lemail=$row["email"];
        $lpass=$row["password"];
    }
} else {
    echo "0 results";
}


   $_SESSION['name'] = $lname;
   $_SESSION['username'] = $luser;
   $_SESSION['email'] = $lemail;
   $_SESSION['pass'] = $lpass;
   $_SESSION['id'] = $lid;


mysqli_close($conn);
?>