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
      session_start();
		
      if ($row['username']==$myusername && $row['password']==$mypassword) {
      	# code...
      	echo "Login successful. Welcome ".$row['username'];
             $login_session = $row['username'];
             header('Location:index.php?page=home');
             $ct=0;
   
   if(!isset($_SESSION['username'])){
      
   $_SESSION['username'] = $login_session;
   }
      	
      } else {
      	# code...
      	echo "Login Failed. Try Again";
         if(!isset($_SESSION['username'])){
      header('Location:index.php?page=Login');
      $ct=1;
   }
      }


      

}


mysqli_close($conn);
?>
<script type="text/javascript">
  var ch='<?php echo $ct; ?>';
  if (ch==1) {
    alert("Hello! I am an alert box!");
  }
</script>

