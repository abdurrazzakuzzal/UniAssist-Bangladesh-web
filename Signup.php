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

	$vname=$_POST['name'];
	$vusername=$_POST['username'];
	$vemail=$_POST['email'];
	$vpass=$_POST['password'];
    $img='image/'.$_POST['image'];

	$insert="INSERT INTO userinfo(ID,name,username,email,password,photo) VALUES ('','$vname','$vusername','$vemail','$vpass','$img')";

	if (mysqli_query($conn, $insert)) {
    echo "DONE";
}

}

mysqli_close($conn);
?>


<!DOCTYPE html>
<html>
<head>
	<title>Sign Up</title>

    <script>
function myFunction() {
    alert("Confirm!");
}
function myFunction1() {
    alert("Do You Want to Cancel?");
}
</script>

	<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box}

/* Full-width input fields */
input[type=text], input[type=password], input[type=email] {
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

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
    .cancelbtn, .signupbtn {
       width: 100%;
    }
}
</style>
</head>
<body>
	<a href="index.php"><img src="img\logo.png" class="logo"  alt="logo" height="55px" width="175px"></a>

	<form method="POST" action="" style="border:3px solid #ff7f27">
  <div class="container">
    <h1>Sign Up</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>
    <label for="name"><b>Name</b></label>
    <input type="text" placeholder="Ente Your Name" name="name" required>

    <label for="username"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="username" required>

    <label for="email"><b>Email</b></label>
    <input type="email" placeholder="Enter Email" name="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="text" placeholder="Enter Password" name="password" minlength="4" onclick="er()" required>

    <label for="image"><b>Upload Your Photo</b></label>
    <input type="file" name="image" required>

    <label>
      <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
    </label>

    <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

    <div class="clearfix">
      <a href="index.php"><button onclick="myFunction1()" type="button" class="cancelbtn">Cancel</button></a>
      <button onclick="myFunction()" type="submit" class="signupbtn">Sign Up</button>
    </div>
  </div>
</form>

</body>
</html>

<script type="text/javascript">
    er(){
        alert("Password too small")
    }
</script>