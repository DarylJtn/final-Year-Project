<?php
//function for sanitizing data to deter sql injections
require_once("connect.php");
//mysql_connect("10.168.1.55","reposito1_main","vW7{{wYH(5PV:V")or die(mysql_error());
//mysql_select_db("reposito1_main");

function sanitize($data){
return mysql_real_escape_string($data);
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



?>