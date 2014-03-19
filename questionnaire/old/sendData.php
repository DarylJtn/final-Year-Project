<?php
session_start();
require_once('../functions/general.php');
$user_id = $_SESSION["user_id"];
if (is_logged_in()){
$ans = $_POST['answers'];
$con = mysql_connect("10.168.1.55","reposito1_main","vW7{{wYH(5PV:V","reposito1_main")


//mysql_select_db("reposito1_main");
//echo($ans[0].$ans[1].$ans[2].$ans[3].$ans[4].$ans[5].$ans[6].$ans[7].$ans[8].$ans[9]);
//exit();


/*
mysql_query("INSERT INTO results (user_id, answer_1, answer_2, answer_3, answer_4, answer_5, answer_6, answer_7, answer_8, answer_9, answer_10,serialized_results)
VALUES ($user_id, ans[0],ans[1],ans[2],ans[3]),ans[4],ans[5],ans[6],ans[7],ans[8],ans[9],serialize($ans)");*/

//$serialized_array = mysql_real_escape_string(serialize($ans));
$sqli = "INSERT INTO results(user_id,answer_1,answer_2,answer_3,answer_4,answer_5,answer_6,answer_7,answer_8,answer_9,answer_10) VALUES ('$user_id',$ans[0],$ans[1],$ans[2],$ans[3],$ans[4],$ans[5],$ans[6],$ans[7],$ans[8],$ans[9])";

$query = mysql_query($con,$sqli);

if(!$query )
{
  die('Could not enter data: ' . mysql_error());
}


echo('complete');
}else{

echo'Not Logged In';

}

?>