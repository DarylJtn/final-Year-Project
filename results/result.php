<?php
session_start();
if(!isset($_SESSION['user_id'])){
exit('user is not logged in');
}


class Result {
       public $ans1 = "";
       public $ans2 = "";
       public $ans3 = "";
       public $ans4 = "";
       public $ans5 = "";
       public $ans6 = "";
       public $ans7 = "";
       public $ans8 = "";
       public $ans9 = "";
       public $ans10 = "";
       public $tstamp = "";
   }





$con = mysqli_connect("10.168.1.55","reposito1_result","C*^kK6L{e453>bIf","reposito1_main");
if (!$con)
  {
  die('Could not connect: ' . mysqli_error($con));
  }

$id = $_POST['id'];
$sql="SELECT * FROM results WHERE id = '".$id."'";
$dbresult = mysqli_query($con,$sql);
$selResult = new Result();
while($row = mysqli_fetch_array($dbresult)){

$selResult->ans1 = $row['answer_1'];
$selResult->ans2 = $row['answer_2'];
$selResult->ans3 = $row['answer_3'];
$selResult->ans4 = $row['answer_4'];
$selResult->ans5 = $row['answer_5'];
$selResult->ans6 = $row['answer_6'];
$selResult->ans7 = $row['answer_7'];
$selResult->ans8 = $row['answer_8'];
$selResult->ans9 = $row['answer_9'];
$selResult->ans10 = $row['answer_10'];
$selResult->tstamp = $row['date_added'];
}

echo json_encode($selResult);
?>