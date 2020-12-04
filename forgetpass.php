<link rel="stylesheet" type="text/css" href="index.css">
<script>
function myFunction() {
    alert("Please, Login Again");
}
</script>
<style type="text/css">
	.container{
		width: 100%;
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
    margin: 24px 0 12px 0;
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
.cancelbtn,{
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

</style>

<img src="img\logo.png" class="logo"  alt="logo" height="55px" width="175px">

<form class="for" method="POST" action="forgetpass.php">
  <div class="imgcontainer">
    <img src="img/pro.png" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label for="email"><b>Email</b></label>
    <input type="text" name="email" placeholder="Enter Your Email" required>

    <a href="index.php?page=Login"><button type="button" class="cancelbtn" onclick="cfun()" >Check</button></a>
</div>
</form>
<script>
function cfun() {
    alert("An email has been send to your email address with new password");
}
</script>