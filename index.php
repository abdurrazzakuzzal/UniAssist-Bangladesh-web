<!DOCTYPE html>
<html>
<head>
	<title>UniAssist</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">

    <style type='text/css'>
iframe.goog-te-banner-frame{ display: none !important;}
</style>

<style type='text/css'>
body {position: static !important; top:0px !important;}
</style>

<style type='text/css'>
.goog-logo-link {display:none !important;} 
.goog-te-gadget{color: transparent !important;}
</style>
    
	<link rel="stylesheet" type="text/css" href="index.css">
	<link rel="stylesheet" type="text/css" href="home.css">
	<link href="css/style.css" rel="stylesheet" />
	<link rel="stylesheet" href="style/slider-r2l.css"> 


	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
 
 <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
 <script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
}
</script>

	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body id="page">

<?php
	include 'notifi.php';
	?>
	<?php
	include 'header.php';
	?>

<div id="content">
	<?php
	if(isset($_GET['page'])){
		$page= $_GET['page'];
		$display=$page.'.php';
		include ($display);
	}
	else{
		include('home.php');
	};

	 ?>
	</div>

	<?php
	include 'footer.php';

	  ?>

</body>
</html>