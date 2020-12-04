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
session_start();

$login_session=$_SESSION['username'];

/*if (isset($_POST["username"])) {
    $loginusername = $_POST["username"] ;
  
}

if (isset($_POST["uname"])) {
    $loguser = $_POST["uname"] ;
  
}*/

$sql1 = sprintf("SELECT * FROM userinfo WHERE username = '$login_session' ");
$result = mysqli_query($conn, $sql1) or die("Connection failed: ".mysql_error());



if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        $lid=$row["ID"];
        $luser=$row["username"];
        $lname=$row["name"];
        $lemail=$row["email"];
        $lpass=$row["password"];
        $img=$row["photo"];
    }
} else {
    echo "0 results";
}



$sql2 = sprintf("SELECT * FROM applyinfo WHERE ID = '$lid'");
$result = mysqli_query($conn, $sql2) or die("Connection failed: ".mysql_error());

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
    $choice1=$row['choice1'];
    $choice2=$row['choice2'];
    $choice3=$row['choice3'];
  }
} 
else {
    $choice1="Not Applied";
    $choice2="Not Applied";
    $choice3="Not Applied";

}


   $_SESSION['name'] = $lname;
   $_SESSION['username'] = $luser;
   $_SESSION['email'] = $lemail;
   $_SESSION['pass'] = $lpass;
   $_SESSION['id'] = $lid;
   $_SESSION['photo'] = $img;

mysqli_close($conn);
?>
<!DOCTYPE html>
<html>
<head>
  <title><?php echo $lname; ?></title>

  <script type="text/javascript">
  	var input = document.getElementById("choice").value;
  	document.write("hh");
  	if (input =="Not Applied") {
  		document.getElementById("apply").disabled = true;
  	}else{
  		document.getElementById("apply").disabled = false;
  	}
  </script>

<link rel="stylesheet" type="text/css" href="index.css">
<style type="text/css">
	.container{
		margin-left: 350px;
		margin-bottom: 10px;
		font-size: 25px;
		font-weight: 600;
	width: 50%;
    border: 2px solid #ff7f27;
    padding: 20px;
    background-color: white;
    border-radius: 10px 10px 10px 10px;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
	}
	input[type=text] {
		border-radius: 10px 10px 10px 10px;
    width: 95%;
    padding: 15px;
    font-size: 20px;
    margin: 5px 0 22px 0;
    display: inline-block;
    border: none;
    background: #f1f1f1;
}
.imgcontainer{
    margin: 70px 15px 12px 25px;
    text-align: center;

	}
#pro{
	box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
	background-color: #ff7f27;
	color: white;
	width: 100%;
	padding: 20px;
	font-size: 20px;
	margin-left: 100px;
	text-align: center;
	margin-top: -50px;
	margin-left: -35px;
	text-shadow: 2px 2px 4px #000000;
	
}	
button {
	border-radius: 10px 10px 10px 10px;
	font-size: 25px;
	text-shadow: 2px 2px 4px #000000;
    background-color: #ff7f27;
    color: white;
    padding: 20px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    height: 75px;
    width: 100%;
    opacity: .9;
}
button:hover {
    opacity:1;
    transform: scale(1.1);
}
.avatar{
  border-radius: 50%;
  border:10px solid #ff7f27; 
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}
#navbar{
  top:-20px;
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

<form class="for" method="POST" action="Profile.php">
  <div class="imgcontainer">
    <img src="<?php echo $img ; ?>" alt="Avatar" class="avatar" height="400px" width="400px">
    <div id="pro">
    <h1><?php echo $lname ; ?></h1>
    <h2><?php echo $lemail ; ?></h2>
    </div>
  </div>





  <div class="container">

  	<label><b>1st Choice</b></label>
     <input type="text" id="choice" disabled name="hscboard" value="<?php echo $choice1; ?>">

    <label><b>2nd Choice</b></label>
     <input type="text" disabled="" name="hscboard" value="<?php echo $choice2; ?>">
    

    <label><b>3rd Choice</b></label>
     <input type="text" disabled="" name="hscboard" value="<?php echo $choice3; ?>">
    

    <div class="clearfix">
      <a href="editprofile.php"><button type="button">Edit Profile
      </button></a>
      <a href="Apply.php"><button type="button" id="apply" >Apply Now
      </button></a> 
    </div>
</div>

</form>
<div id="foot">
  <h1>UniAssist</h1>
  <h3>Bangladesh</h3>
</div>
</body>
</html>

