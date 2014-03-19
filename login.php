<?php
 session_start();
require_once ('functions/PasswordHash.php');
function sanitize($data){
return mysql_real_escape_string($data);
}

mysql_connect("10.168.1.55","reposito1_main","vW7{{wYH(5PV:V")or die(mysql_error());
mysql_select_db("reposito1_main");


function user_exists($username){
	$username = sanitize($username);
	$query = mysql_query("SELECT COUNT('user_id') FROM users WHERE username = '$username'");

	if(mysql_result($query, 0)== 1){
		return true;}
		else{
			return false;
		}
}


function user_id_from_username($username){
$username = sanitize($username);
	
	return mysql_result(mysql_query("SELECT user_id FROM users WHERE username = '$username'"), 0);


}

function login($username, $password){
	$hasher = new PasswordHash(8, false);
	$user_id = user_id_from_username($username);
	$username = sanitize($username);
	$query = mysql_query("SELECT password FROM users WHERE username = '$username'");
	
	$check = $hasher->CheckPassword($password, mysql_result($query, 0));
	if ($check == true){
	return $user_id;
	}
	else{
	return false;
	}


}

if (empty($_POST)== false){
$username = $_POST['username'];
$password = $_POST['password'];

if (empty($username)||empty($password)){

	$errors[] = 'you need to enter a username and password';
	
	}else if(user_exists($username)==false){

	$errors[] = 'username not found';

		}else{

			$username = sanitize($username);
			$query = mysql_query("SELECT username,password FROM users WHERE username = '$username'");

			$login = login($username,$password);
			
			
			if($login == false){
			echo $login;
			}else{
			$_SESSION['user_id'] = $login;
			echo $login;
			exit();
			
			}
		}


		}else{echo'post responce error';}

		for($i = 1; $i <= sizeof($errors); $i++){

echo $errors[$i-1];
//print_r($errors);
}

		
?>
