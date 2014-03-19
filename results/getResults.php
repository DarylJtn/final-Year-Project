<?php
session_start();
if(!isset($_SESSION['user_id'])){
exit('user is not logged in');
}
$q = $_SESSION['user_id'];

$con = mysqli_connect("10.168.1.55","reposito1_result","C*^kK6L{e453>bIf","reposito1_main");
if (!$con)
  {
  die('Could not connect: ' . mysqli_error($con));
  }


$sql="SELECT * FROM results WHERE user_id = '".$q."'";

$dbresult = mysqli_query($con,$sql);

class result {
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

//$results=array();
$i = 0;
while($row = mysqli_fetch_array($dbresult)){

$results[$i]=new result();
$results[$i]->ans1 = $row['answer_1'];
$results[$i]->ans2 = $row['answer_2'];
$results[$i]->ans3 = $row['answer_3'];
$results[$i]->ans4 = $row['answer_4'];
$results[$i]->ans5 = $row['answer_5'];
$results[$i]->ans6 = $row['answer_6'];
$results[$i]->ans7 = $row['answer_7'];
$results[$i]->ans8 = $row['answer_8'];
$results[$i]->ans9 = $row['answer_9'];
$results[$i]->ans10 = $row['answer10'];
$results[$i]->tstamp = $row['date_added'];
$i++;

}

echo json_encode($results);








  ?>

