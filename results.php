<?php
session_start();
if(!isset($_SESSION['user_id'])){
exit('user is not logged in');
} 


$q = $_SESSION['user_id'];

$con = mysqli_connect("10.168.1.55","reposito1_main","vW7{{wYH(5PV:V","reposito1_main");
if (!$con)
  {
  die('Could not connect: ' . mysqli_error($con));
  }


$sql="SELECT * FROM results WHERE user_id = '".$q."'";

$dbresult = mysqli_query($con,$sql);

?>






<!doctype html>
<html>
<head>
		<meta name="viewport" 
   content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<link rel="stylesheet" href="//code.jquery.com/mobile/1.4.0/jquery.mobile-1.4.0.min.css" />
<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<script src="http://code.jquery.com/mobile/1.4.0/jquery.mobile-1.4.0.min.js"></script>
<script src="script/javascript.js"></script>
<link rel="stylesheet" type="text/css" href="styles/ResultStyles.css">

</head>

<script>
function showResult(resultObj){
$("#result").text(resultObj.tstamp);
$("#feedback").html('<table border="1"><tr><th>Question</th><th>Answer Score</th></tr><tr><td>1</td><td>'+resultObj.ans1+'</td></tr><tr><td>2</td><td>'+resultObj.ans2+'</td></tr><tr><td>3</td><td>'+resultObj.ans3+'</td></tr><tr><td>4</td><td>'+resultObj.ans4+'</td></tr><tr><td>5</td><td> '+resultObj.ans1+'</td></tr></table>');
console.log(resultObj.tstamp);

}

function displayResult(id){
$.post("results/result.php", { id:id},function(data){
  var result = JSON.parse(data);
  showResult(result);
});
}




$( ".selector" ).listview({ filterPlaceholder: "Search..." });



      function getResults(){
    $.ajax({                                      
      url: 'results/getResults.php',                  //the script to call to get data          
      data: "",                        //you can insert url argumnets here to pass to api.php
                                       //for example "id=5&parent=6"
      dataType: 'json',                //data format      
      success: function(data)          //on recieve of reply
      {
       var myArray = jQuery.parseJSON(data);
        console.log(myArray);
      } 
    });
 
}



</script>
<body>

	<div data-role="page">

		<div data-role="header">

		</div>

		<div data-role="content">
  
<div id="listMenu" >
<form class="ui-filterable">
  <input id="myFilter" data-type="search">
</form>

<ul data-role="listview" data-filter="true" data-input="#myFilter">
  <?php
  $i = 0;
  while($row = mysqli_fetch_array($dbresult)){
    $i++;
    $id=$row['id'];
echo '<li> <h3><a href="# "onclick="displayResult('.$id.');"> ';
 echo $row['date_added'];
 echo $i;
echo '</a></h3> </li>';
}
 


  ?>

		
</ul>

		</div>
    <div id='results'>

      <div id='date'> This is where the date will be:
      </div>
      <br>
      <div id='result'>
        Here is the results:
      </div>
      <br>
      <div id='feedback'>
        Here is where feedback will be given
      </div>


    </div>
<div>


	</div>
</body>
</html>
<?php

?>