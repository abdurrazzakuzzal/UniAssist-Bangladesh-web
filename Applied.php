<?php 

   session_start(); // this NEEDS TO BE AT THE TOP of the page before any output etc
   
   $upid = $_SESSION['id'];
   $img=$_SESSION['photo'];

?>
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

$sql1 = sprintf("SELECT * FROM applyinfo WHERE ID = '$upid'");
$result = mysqli_query($conn, $sql1) or die("Connection failed: ".mysql_error());

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
   $aid=$row['ID'];   
  $vname=$row['fullname'];
  $sscroll=$row['sscroll'];
  $sscreg=$row['sscreg'];
  $sscboard=$row['sscboard'];
    $sscyear=$row['sscyear'];
    $hscroll=$row['hscroll'];
    $hscreg=$row['hscreg'];
    $hscboard=$row['hscboard'];
    $hscyear=$row['hscyear'];
    $choice1=$row['choice1'];
    $choice2=$row['choice2'];
    $choice3=$row['choice3'];
  }
} 
else {
    echo "0 results";
}


mysqli_close($conn);
?>


<!DOCTYPE html>
<html>
<head>
	<title>Applied</title>

<link rel="stylesheet" type="text/css" href="index.css">
	<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box}
form{
  margin-left: 350px;
    width: 50%;
    border: 2px solid grey;
    padding: 20px;
    background-color: white;
    border-radius: 10px 10px 10px 10px;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}

/* Full-width input fields */
input[type=text], input[type=password], input[type=email], .select {
    width: 100%;
    padding: 15px;
    margin: 5px 0 22px 0;
    display: inline-block;
    border: none;
    background: #f1f1f1;
}

input[type=text]:focus, input[type=password],input[type=email]:focus {
    background-color: #ddd;
    outline: none;
}

hr {
    border: 1px solid #f1f1f1;
    margin-bottom: 25px;
}

/* Set a style for all buttons */
button {
    background-color: #ff7f27;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
    opacity: 0.9;
}

button:hover {
    opacity:1;
}

/* Extra styles for the cancel button */
.cancelbtn {
    padding: 14px 20px;
    background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn, .signupbtn {
  float: left;
  width: 100%;
}

/* Add padding to container elements */
.container {
    padding: 16px;
}

/* Clear floats */
.clearfix::after {
    content: "";
    clear: both;
    display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
    .cancelbtn, .signupbtn {
       width: 100%;
    }
}

.imgcontainer{
    text-align: center;
    margin: 70px 0 12px 0;
  }
  .avatar{
  border-radius: 50%;
}
#foot{
  text-align: center;
  background-color:#ff7f27;
  color: white;
  padding: 50px; 
}
#foot h1{
  font-style: bold;
  font-size: 50px;
  font-family: arial;
  font-weight: 800;
}
#foot h3{
  margin-top: -40px;
  font-style: bold;
  font-size: 20px;
  font-family: arial;
  font-weight: 800;
  margin-left: 90px;
}
#on{
  height: 65px;
  background-color: white;
}
</style>
</head>
<body>
	<div id="navbar"> 
  <ul>
    <li class="active" style="float: right;"><a href="logout.php">Logout</a></li>
    <li style="float: right;"><a href="index.php?page=about">About Us</a></li>
    <li style="float: right;"><a href="index.php?page=International">International</a></li>
    <li style="float: right;"><a href="index.php?page=Universities">Universities</a></li>
        <li><a href="index.php?page=home"><img src="img\logo.png" class="logo"  alt="logo" height="55px" width="175px" ></a></li>
              
  </ul>
  
</div>

<div id="on">
  
</div>

	<form method="POST" action="" style="border:3px solid #ff7f27">
  <div class="container">
    <h1>Applied</h1>
    <hr>

    <div class="imgcontainer">
    <img src="<?php echo $img ; ?>" alt="Avatar" class="avatar" height="200px" width="200px">
  </div>
    <label ><b>ID Number</b></label>
    <input type="text" disabled="" name="id" value="<?php echo $aid; ?>">

    <label for="name"><b>Full Name</b></label>
    <input type="text" disabled="" name="fullname" value="<?php echo $vname; ?>">

    <label><b>SSC Roll Number</b></label>
    <input type="text" disabled="" name="sscroll" value="<?php echo $sscroll; ?>">

    <label><b>SSC Registration Number</b></label>
    <input type="text" disabled="" name="sscreg" value="<?php echo $sscreg; ?>">

    <label><b>SSC Passing Year</b></label>
    <input type="text" disabled="" name="sscyear" value="<?php echo $sscyear; ?>">

    <label><b>SSC Board</b></label>
    <input type="text" disabled="" name="sscboard" value="<?php echo $sscboard; ?>">

    <label><b>HSC Roll Number</b></label>
    <input type="text" disabled="" name="hscroll" value="<?php echo $hscroll; ?>">

    <label><b>HSC Registration Number</b></label>
    <input type="text" disabled="" name="hscreg" value="<?php echo $hscreg; ?>">

    <label><b>HSC Passing Year</b></label>
    <input type="text" disabled="" name="hscyear" value="<?php echo $hscyear; ?>">

    <label><b>HSC Board</b></label>
    <input type="text" disabled="" name="hscboard" value="<?php echo $hscboard; ?>">


    <label><b>1st Choice</b></label>
     <input type="text" disabled name="hscboard" value="<?php echo $choice1; ?>">

    <label><b>2nd Choice</b></label>
     <input type="text" disabled="" name="hscboard" value="<?php echo $choice2; ?>">
    

    <label><b>3rd Choice</b></label>
     <input type="text" disabled="" name="hscboard" value="<?php echo $choice3; ?>">
    

    <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

    <div class="clearfix">
     <a href="Profile.php"><button type="button" class="cancelbtn">OK</button></a> 
    </div>
  </div>
</form>
<div id="foot">
  <h1>UniAssist</h1>
  <h3>Bangladesh</h3>
</div>
</body>
</html>