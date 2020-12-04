<?php
ini_set( "display_errors", 0); 
session_start();

$login_session=$_SESSION['username'];
  ?>
<div id="notifi">	
	<ul>
		<li class="active" style="float: right;">
			<?php if ($login_session!= null) : ?>
       <a href="Profile.php"><i class="fa fa-sign-in" aria-hidden="true"></i>  <?php 
       echo $login_session; ?></a>
    <?php else: ?>
       <a href="index.php?page=Login"><i class="fa fa-sign-in" aria-hidden="true"></i> Login</a>
    <?php endif ?></li>
		<li style="float: right;"><a href="index.php?page=about">About Us</a></li>
		<li style="float: right;"><a href="index.php?page=International">International</a></li>
		<li style="float: right;"><a href="index.php?page=Universities">Universities</a></li>
        <li><a href="index.php"><img src="img\logo.png" class="logo"  alt="logo" height="55px" width="175px"></a></li>
              
	</ul>
</div>