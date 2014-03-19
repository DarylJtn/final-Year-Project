<?php 
session_start();
?>

<div data-role="page">
  <head>
	<meta name="viewport" 
   content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

<link rel="stylesheet" href="styles/themes/GreenBlue.css" />
<link rel="stylesheet" href="styles/themes/jquery.mobile.icons.min.css" />
<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<script src="http://code.jquery.com/mobile/1.4.0/jquery.mobile-1.4.0.min.js"></script>
<script src="script/javascript.js"></script>
<link rel="stylesheet" type="text/css" href="styles/style.css">

<header>
<div id='ml'class='logo'><img src="/images/medlogo.png" alt="Logo"></div>
<div id='ll' class='logo'><img src="/images/larlogo.png" alt="Logo"></div>





<div id='title'> <div id='maintitle'>Home Page</div> <div id='subtitle'>Main Menu</div></div> 

	</header>
<a href="#pageone">Go to Page One</a>


</head>
a

<?
require_once"functions/general.php";

echo user_data($_SESSION['user_id']);
echo $_SESSION['user_id'];

if(isset($_SESSION['user_id'])==true){
echo 'Logged In!
<a href="logout.php">Logout </a>';
require"menuBox.php";
echo isset($_SESSION['user_id']);
}else{
	require"loginForm.php";
echo'Not logged in';}


?>



<?/*php require 'header.php';

	//if not loged in

require 'login.php';


require 'footer.php';*/ ?>