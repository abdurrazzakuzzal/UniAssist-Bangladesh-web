<?php 

   session_start(); // this NEEDS TO BE AT THE TOP of the page before any output etc
   $upname = $_SESSION['name'];
   $upusername = $_SESSION['username'];
   $upemail = $_SESSION['email'];
   $uppass = $_SESSION['pass'];
   $upimage=$_SESSION['photo'];
   $upid=$_SESSION['id'];
?>
<head>
  <title>Edit Profile</title>
</head>

<link rel="stylesheet" type="text/css" href="index.css">
<script>
function myFunction() {
    alert("Confirm?");
}
</script>
<style type="text/css">
	form{
  background-image: url("img/back.jpg");
  background-repeat: no-repeat;
  background-size: 100% 100%;
}
  .container{
    margin-left: 350px;
    width: 50%;
    border: 2px solid #ff7f27;
    padding: 20px;
    background-color: white;
    border-radius: 10px 10px 10px 10px;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  }
	input[type=text], input[type=password], input[type=email] {
    width: 100%;
    padding: 15px;
    margin: 5px 0 22px 0;
    display: inline-block;
    border: none;
    background: #f1f1f1;
}
.imgcontainer{
		text-align: center;
    margin: 25px 0 12px 0;
	}
  .avatar{
  border-radius: 50%;
  margin-left: -150px;
}
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
.cancelbtn, .donebtn {
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

<img src="img\logo.png" class="logo"  alt="logo" height="55px" width="175px">

<form class="for" method="POST" action="update.php">
  <div class="imgcontainer">
    <img src="<?php echo $upimage ; ?>" alt="Avatar" class="avatar" height="200px" width="200px">
  </div>

  <div class="container">
    <label><b>Name</b></label>
    <input type="text" name="name" value="<?php echo $upname ; ?>" >

    <label><b>Username</b></label>
    <input type="text" name="uname" value="<?php echo $upusername ; ?>" >

    <label for="password"><b>Password</b></label>
    <input type="text" name="pass" value="<?php echo $uppass ; ?>">

    <div class="clearfix">

      <a href="Profile.php"><button type="button" class="cancelbtn">Cancel</button></a>
      <a href="Login.php"><button type="submit" class="donebtn" onclick="myFunction()">Done</button></a>
    </div>
</div>
</form>
<div id="foot">
  <h1>UniAssist</h1>
  <h3>Bangladesh</h3>
</div>

