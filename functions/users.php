<?php

require_once ('PasswordHash.php');

function sanitize($data){
return mysql_real_escape_string($data);
}


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

function register($username,$password,$firstname,$lastname,$email)
{
if ( preg_match('/\s/',$username)){
	exit('A username cannot have a space');}

}

function is_logged_in(){
return isset($_SESSION['user_id']);

/*if(isset($_SESSION['user_id'])) == true{
	return true;
}else{
return false;*/
}


function user_data($user_id){
$data =array();
$user_id = (int)$user_id;

$func_num_args = func_num_args();
$func_get_args = func_get_args();

if ($func_num_args > 1){
unset($func_get_args[0]);
$fields = '`' . implode('`,`', $func_get_args) . '`';
$data = mysql_fetch_assoc(mysql_query("SELECT $fields FROM users WHERE user_id = $user_id"));

}

return $data;
}


function privilege($user_id){
if ($user_id != null){
return (mysql_result(mysql_query("SELECT privilege FROM users WHERE user_id = '$user_id'"), 0));
}
else{return null;}
}

function add_user($username, $password, $firstname, $lastname, $email, $passwordV){
$hasher = new PasswordHash(8, TRUE);
$username = sanitize($username);
$password = sanitize($password);
$firstname = sanitize($firstname);
$lastname= sanitize($lastname);
$email = sanitize($email);


if($password != $passwordV){
	exit('The passwords do not match');
}

if ( preg_match('/\s/',$username)){
	exit('A username cannot have a space');
	}

if(strpos($email,'@') == false || strpos($email,'.') == false){
exit('the email entered is invalid');
}	
	
	
$password = $hasher->HashPassword($password);

mysql_query("INSERT INTO users (username, password, first_name, last_name, email)
VALUES ('$username','$password','$firstname','$lastname','$email')");


}




?>