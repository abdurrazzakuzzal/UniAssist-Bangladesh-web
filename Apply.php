<script>
  function myFunction() {
    var numb=<?php echo $num; ?>
    if (numb==0) {alert("Confirm?");}
    else{
    alert("you are already Applied.");}
  
  </script>
<?php 

   session_start(); // this NEEDS TO BE AT THE TOP of the page before any output etc
   
   $upid = $_SESSION['id'];
   $upname=$_SESSION['name'];
   $upuser=$_SESSION['username'];
   $img=$_SESSION['photo'];
   $_SESSION['id']= $upid;

?>
<?php
$num=0;
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
    $vid=$_POST['id'];
	  $vname=$_POST['fullname'];
	  $sscroll=$_POST['sscroll'];
	  $sscreg=$_POST['sscreg'];
	  $sscboard=$_POST['sscboard'];
    $sscyear=$_POST['sscyear'];
    $hscroll=$_POST['hscroll'];
    $hscreg=$_POST['hscreg'];
    $hscboard=$_POST['hscboard'];
    $hscyear=$_POST['hscyear'];
    $choice1=$_POST['select1'];
    $choice2=$_POST['select2'];
    $choice3=$_POST['select3'];


	$insert="INSERT INTO applyinfo(fullname, sscroll, sscreg, sscboard, sscyear, hscroll, hscreg, hscboard, hscyear, choice1, choice2, choice3,ID) VALUES  ('$vname','$sscroll','$sscreg','$sscboard','$sscyear','$hscroll','$hscreg','$hscboard','$hscyear','$choice1','$choice2','$choice3','$upid')";

	if (mysqli_query($conn, $insert)) {
    echo "DONE";
}else {
  echo "you are already Applied.";
  $num=1;
  //header('Location: index.php?page=Profile');
  
}

}

mysqli_close($conn);
?>


<!DOCTYPE html>
<html>
<head>
	<title>Apply</title>
  <script type="text/javascript">
    
  </script>

<link rel="stylesheet" type="text/css" href="index.css">
	<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box}
form{
  margin-left: 350px;
    width: 50%;
    margin-bottom: 10px;
    border: 2px solid grey;
    padding: 20px;
    background-color: white;
    border-radius: 10px 10px 10px 10px;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}

/* Full-width input fields */
input[type=text], input[type=password], input[type=email], .select {
    width: 100%;
    font-size: 15px;
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
.imgcontainer{
    text-align: center;
    margin: 70px 0 12px 0;
  }

/* Extra styles for the cancel button */
.cancelbtn {
    padding: 14px 20px;
    background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn, .signupbtn {
  float: left;
  width: 50%;
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
.avatar{
  border-radius: 50%;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
    .cancelbtn, .signupbtn {
       width: 100%;
    }
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
    <h1>Apply Now</h1>
    <p>Please, fill up this form very carefully.</p>
    <hr>

<div class="imgcontainer">
    <img src="<?php echo $img ; ?>" alt="Avatar" class="avatar" height="200px" width="200px">
  </div>

    <label><b>ID Number</b></label>
    <input type="text" name="id" value="<?php echo $upid; ?>" required>

    <label for="name"><b>Full Name</b></label>
    <input type="text" name="fullname" value="<?php echo $upname; ?>" required>

    <label><b>SSC Roll Number</b></label>
    <input type="text" placeholder="Enter Your SSC Roll Number" name="sscroll" required>

    <label><b>SSC Registration Number</b></label>
    <input type="text" placeholder="Enter Your SSC Registration Number " name="sscreg" required>

    <label><b>SSC Passing Year</b></label>
     <select class="select" name="sscyear" required>
        <option>2012</option>
        <option>2013</option>
        <option>2014</option>
        <option>2015</option>
        <option>2016</option>
        <option>2017</option>
        <option>2017</option>
    </select>

    <label><b>SSC Board</b></label>
    <select class="select" name="sscboard" required>
        <option>Dhaka</option>
        <option>Chittagong</option>
        <option>Rajshahi</option>
        <option>Barishal</option>
        <option>Jessore</option>
        <option>Dinajpur</option>
        <option>Comilla</option>
        <option>Sylhet</option>
        <option>Madrasha</option>
        <option>Technical</option>
    </select>

    <label><b>HSC Roll Number</b></label>
    <input type="text" placeholder="Enter Your HSC Roll Number" name="hscroll" required>

    <label><b>HSC Registration Number</b></label>
    <input type="text" placeholder="Enter Your HSC Registration Number" name="hscreg" required>

    <label><b>HSC Passing Year</b></label>
    <select class="select" name="hscyear" required>
        <option>2014</option>
        <option>2015</option>
        <option>2016</option>
        <option>2017</option>
        <option>2017</option>
    </select>

    <label><b>HSC Board</b></label>
    <select class="select" name="hscboard" required>
        <option>Dhaka</option>
        <option>Chittagong</option>
        <option>Rajshahi</option>
        <option>Barishal</option>
        <option>Jessore</option>
        <option>Dinajpur</option>
        <option>Comilla</option>
        <option>Sylhet</option>
        <option>Madrasha</option>
        <option>Technical</option>
    </select>


    <label><b>1st Choice</b></label>
    <select class="select" name="select1" required>
        <option>Ahsanullah University of Science and Technology</option>
         <option>American International University-Bangladesh</option>
          <option>Bangladesh University of Business and Technology</option>
           <option>BRAC University</option>
         <option>Daffodil International University</option>
          <option>East West University</option>
           <option>Green University of Bangladesh</option>
         <option>University of Asia Pacific</option>
    </select>

    <label><b>2nd Choice</b></label>
    <select class="select" name="select2" required>
        <option>Ahsanullah University of Science and Technology</option>
         <option>American International University-Bangladesh</option>
          <option>Bangladesh University of Business and Technology</option>
           <option>BRAC University</option>
         <option>Daffodil International University</option>
          <option>East West University</option>
           <option>Green University of Bangladesh</option>
         <option>University of Asia Pacific</option>
    </select>

    <label><b>3rd Choice</b></label>
    <select class="select" name="select3" required>
        <option>Ahsanullah University of Science and Technology</option>
         <option>American International University-Bangladesh</option>
          <option>Bangladesh University of Business and Technology</option>
           <option>BRAC University</option>
         <option>Daffodil International University</option>
          <option>East West University</option>
           <option>Green University of Bangladesh</option>
         <option>University of Asia Pacific</option>
    </select>

    <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

    <div class="clearfix">
      <a href="Profile.php"><button type="button" class="cancelbtn">Cancel</button></a>
      <a href="Applied.php"><button type="submit" class="signupbtn" onclick="myFunction()">Apply</button></a>
    </div>
  </div>
</form>
<div id="foot">
  <h1>UniAssist</h1>
  <h3>Bangladesh</h3>
</div>

</body>
</html>

<?php
if (isset($_POST['fullname'])) {

}
  ?>