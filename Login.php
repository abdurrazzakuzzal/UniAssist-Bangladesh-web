<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<style type="text/css">
		/* Bordered form */
form {
    margin-left: 350px;
    width: 50%;
    border: 2px solid grey;
    padding: 20px;
    background-color: white;
    border-radius: 10px 10px 10px 10px;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}

/* Full-width inputs */
input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
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
}

/* Add a hover effect for buttons */
button:hover {
    opacity: 0.8;
}

/* Extra style for the cancel button (red) */
.cancelbtn {
    width: 100%;
    padding: 14px 18px;
    background-color: #f44336;
}

/* Center the avatar image inside this container */
.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
}

/* Avatar image */


/* Add padding to containers */
.container {
    padding: 16px;
    width: 90%;
}

/* The "Forgot password" text */
span.psw {
    float: right;
    padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
        display: block;
        float: none;
    }
    .cancelbtn {
        width: 100%;
    }
}



	</style>
</head>
<body>
	

	<form method="POST" action="logindata.php">
  <div class="imgcontainer">
    <img src="img/pro.png" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label for="username"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="username" required>

    <label for="password"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>

    <button type="submit">Login</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <a href="index.php"><button type="button" class="cancelbtn">Cancel</button></a></br>
    <span class="pass">Forgot <a href="forgetpass.php">password?</a></span></br>
    <span class="new">Create an Account <a href="Signup.php">Now </a></span>

  </div>
</form>

</body>
</html>

<?php
include 'logindata.php';
if (isset($_POST['username'])) {
  $loginusername=$_POST['username'];
  exit();

}
/*if (isset($_SESSION['username'])) {
    $_SESSION["loguser"] = $loginusername;
    exit();
} */

?>




