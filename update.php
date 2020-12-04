<?php
session_start();
$upid=$_SESSION['id'];
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

if (!empty($_POST)) {

  $vname=$_POST['name'];
  $vusername=$_POST['uname'];
  $vpass=$_POST['pass'];

  $sql = "UPDATE userinfo SET name='$vname',username='$vusername',password='$vpass' WHERE ID='$upid'";

if (mysqli_query($conn, $sql)) {
    echo "Record updated successfully";
    header('Location:index.php?=page=Login');
} else {
    echo "Error updating record: " . mysqli_error($conn);
}
}




mysqli_close($conn);
?>