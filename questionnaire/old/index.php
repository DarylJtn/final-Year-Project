<?php
session_start();

//echo $_SESSION['user_id'];


?>
<html>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<link rel="stylesheet" href="//ajax.googleapis.com/ajax/libs/jquerymobile/1.4.1/jquery.mobile.min.css" />
<link rel="stylesheet" href="../.../styles/QuestionnaireStyles.css" />
<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<link rel="stylesheet" href="../.../styles/themes/GreenBlue.css" />
<link rel="stylesheet" href="../.../styles/themes/jquery.mobile.icons.min.css" />
<script src="//ajax.googleapis.com/ajax/libs/jquerymobile/1.4.1/jquery.mobile.min.js"></script>
<script src="../script/javascript.js"></script>
<script>
var answers = new Array(10);
    currentQuestion=0;
selectedValue=null;
 $(document).ready(function(){ 
  
changePage(0);

$("input[type='radio']").bind( "change", function(event, ui) {
        console.log($(this).val());
         selectedValue=$(this).val();
});

});
/*
$('#index').on('pageinit', function() {
$.mobile.changePage( "question1.php", { transition: "slideup", changeHash: false });

});

 $(document).on('pageinit', function() {
});
*/
/*
function changePageOld(i){
currentQuestion = i;

if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  console.log("xml open");
xmlhttp.open("GET","questions.xml",false);
xmlhttp.send();
xmlDoc=xmlhttp.responseXML; 

var x=xmlDoc.getElementsByTagName("topic");
console.log(x.length);
 
    //$("A1").update(x[i].getElementsByTagName("question")[0].childNodes[0].nodeValue);
console.log(i);
//registerSelection();
printResults();
    $('#question').text(x[0].getElementsByTagName("question")[i].childNodes[0].nodeValue);
console.log("output"+x[0].getElementsByTagName("question")[i].childNodes[0].nodeValue);

//registerSelection();
//printResults();
//console.log("output"+x[i].getElementsByTagName("question")[1].childNodes[1].nodeValue);
//console.log("output"+x[i].getElementsByTagName("question")[1].childNodes[0].nodeValue);
//console.log("output"+x[i].getElementsByTagName("question")[0].childNodes[1].nodeValue);

}*/

function changePage(i){

if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  console.log("xml open");
xmlhttp.open("GET","questions.xml",false);
xmlhttp.send();
xmlDoc=xmlhttp.responseXML; 

var x=xmlDoc.getElementsByTagName("topic");
console.log(x.length);
 
  	//$("A1").update(x[i].getElementsByTagName("question")[0].childNodes[0].nodeValue);
console.log(i);
//registerSelection();
printResults();
  	$('#question').text(x[0].getElementsByTagName("question")[i].childNodes[0].nodeValue);
console.log("output"+x[0].getElementsByTagName("question")[i].childNodes[0].nodeValue);



}
function nextPage(){
    $( "#qna" ).fadeOut( "slow", function() { 

	if (currentQuestion ==9){
console.log("on last question cant go forward");
registerSelection();
	}else{
registerSelection();
clearSelection();
currentQuestion = currentQuestion+1;
changePage(currentQuestion);
makeSelection(currentQuestion);


}
});
  $( "#qna" ).fadeIn( "slow", function() { });
}

function prevPage(){
  $( "#qna" ).fadeOut( "slow", function() { 
	if(currentQuestion==0){
		console.log("at first question. cant go back");
	}else{
registerSelection();
clearSelection();
currentQuestion = currentQuestion-1;
changePage(currentQuestion);
makeSelection(currentQuestion);
 } 
});
 $( "#qna" ).fadeIn( "slow", function() { });


}


function selectQuestion(p){
 $( "#qna" ).fadeOut( "slow", function() { 
registerSelection();
clearSelection();
currentQuestion = p
changePage(currentQuestion);
makeSelection(currentQuestion);

});
 $( "#qna" ).fadeIn( "slow", function() { });




}


function makeSelection(sel){
console.log('mksel '+sel);

clearSelection();
try{

selRadio=parseInt(answers[sel])+1;
if(sel!=undefined||answers[sel]==null){
  console.log('selRadio'+ selRadio);
  selectedValue=parseInt(answers[sel]);
document.getElementById('radio-choice-'+selRadio).checked = true;
$("input[type='radio']").attr("checked",true).checkboxradio("refresh"); 
convInt();
}



else{console.log('clear');
  clearSelection();}
}
catch(err){

clearSelection();
console.log(err);

}
}



function checkRadio(){


  
}


function clearSelection(){
 
		$('#input').find("input[type='radio']:checked").removeAttr('checked');
$("#radio-choice-1").prop('checked', false);
$("#radio-choice-2").prop('checked', false);
$("#radio-choice-3").prop('checked', false);
$("#radio-choice-4").prop('checked', false);
$("radio-choice-1" ).attr("checked",false).checkboxradio("refresh");
$("#radio-choice-1").attr("checked",false).checkboxradio("refresh");
$("#radio-choice-2").attr("checked",false).checkboxradio("refresh");
$("#radio-choice-3").attr("checked",false).checkboxradio("refresh");
$("#radio-choice-4").attr("checked",false).checkboxradio("refresh");
$( "radio-choice-1").attr("checked",false).checkboxradio("refresh");

}

function registerSelection(){

    $('#nav1').attr('data-icon','home');
    $('#nav1').children().children().next().removeClass('ui-icon-grid').addClass('ui-icon-home');

  locCurrentQuestion=currentQuestion+1
console.log('Registering '+selectedValue+' to '+locCurrentQuestion+'. array Value '+answers[currentQuestion]);
answers[currentQuestion]=selectedValue;
selectedValue=null;
}

$("input[type='radio']").bind( "change", function(event, ui) {
        console.log($(this).val());
});

//for reading xml files with questions
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }

function ans(a){
	this.answerNum=a;
}

function printResults(){
	console.log("ans");
	for(i=0;i<answers.length;i++)
	{
//console.log(answers[i]);
}
feedback();
}

function feedback(){
cChoice=parseInt(answers[0])+parseInt(answers[1])+parseInt(answers[2])+parseInt(answers[3])+parseInt(answers[4]);
mMatters=parseInt(neg(answers[5]))+parseInt(answers[6])+parseInt(answers[7])+parseInt(neg(answers[8]))+parseInt(answers[9]);


//console.log("Choice:"+cChoice);
//console.log("Matters:"+mMatters);

$('#feedbackResult').text("Choice:"+cChoice+"Matters:"+mMatters);

}
//change some of the variables so that they are giving a positive number
function fixData(){



}

function outputArray(){

for (i = 0; i < answers.length; i++) {

console.log(answers[i]);

}


}

function convInt(){

for (i = 0; i < answers.length; i++) {

answers[i]=parseInt(answers[i]);

}

}

function neg(i){
	if(i==0){
		return 3;
	}else if(i==1){
		return 2;
	}else if(i==2){
		return 1;
	}else if(i==3){
		return 0;
	}else{

	return 99;
	}

}

function sendData(){//function sends the data to the php file and then te server
convInt();
  
if (verifyAnswers()){
  fixData();
$.post("sendData.php", {answers:answers},function(data){
  console.log(data);
});



}else{

  console.log('verAns false');
}

}





//Verify the data that has been entered into the database is legitimate 
function verifyAnswers(){
var error = false;


for(i=0;i<answers.length;i++){
if(answers[i]<0||answers[i]>3||answers[i]==null||answers[i]==NaN){
error = true;

  }
}
return !error;


}

/*$.post("sendData.php", { username:username, password:password},function(data){
  console.log(data);
  if(data==1){
    $.mobile.changePage( "menu.php", {
        type: "post",
        data : { 'username' : username, 'password':password }});
  }
}*/

//$.mobile.changePage( "menu.php", { transition: "slideup"} );
   /* jQuery.mobile.changePage(window.location.href, {
        allowSamePageTransition: true,
        transition: 'none',
        reloadPage: true
    });*/

</script>


<div data-role="page" id='1'>

 <div data-role="panel" id="myPanel"data-display="overlay">
<ul data-role="listview" >
  <li id="nav1"data-icon="delete"><a onclick="selectQuestion(0)" data-icon="delete">Question 1</a></li>
  <li><a onclick="selectQuestion(1)">Question 2</a></li>
  <li><a onclick="selectQuestion(2)">Question 3</a></li>
  <li><a onclick="selectQuestion(3)">Question 4</a></li>
  <li><a onclick="selectQuestion(4)">Question 5</a></li>
  <li><a onclick="selectQuestion(5)">Question 6</a></li>
  <li><a onclick="selectQuestion(6)">Question 7</a></li>
  <li><a onclick="selectQuestion(7)">Question 8</a></li>
  <li><a onclick="selectQuestion(8)">Question 9</a></li>
  <li><a onclick="selectQuestion(9)">Question 10</a></li>
</ul>
</div>

    <div id="qheader" data-role="header" data-position="overlay">
      <a href="#myPanel" data-icon="info">Menu</a>
      <h1>Questionnaire</h1>
      <a href=".../index.php" data-icon="home">Menu</a>
  <!--    <div data-role="navbar">
    <ul>
      <li><a href="#">Category One: Lifestyle Choices</a></li>
      <li><a href="#">Category Two: Money Matters</a></li>

    </ul>
  </div> /navbar -->
     <!--    <div data-role="navbar">
    <ul>
      <li><a href="#">One</a></li>
      <li><a href="#">Two</a></li>
      <li><a href="#">Three</a></li>
      <li><a href="#">Four</a></li>
      <li><a href="#">Five</a></li>
    </ul>
  </div>/navbar -->
    </div>
  <div id='qna'>
    <div id="question" class='q'>
      Question Div
    </div>

    <div id="input" class='i'>
 <fieldset data-role="controlgroup">
      <legend>Select:</legend>
          <input type="radio" name="radio-choice-1" id="radio-choice-1" value="0"/>
          <label for="radio-choice-1">allways</label>

          <input type="radio" name="radio-choice-1" id="radio-choice-2" value="1"  />
          <label for="radio-choice-2">sometimes</label>

          <input type="radio" name="radio-choice-1" id="radio-choice-3" value="2"  />
          <label for="radio-choice-3">not usually</label>

          <input type="radio" name="radio-choice-1" id="radio-choice-4" value="3"  />
          <label for="radio-choice-4">never</label>

    </div>
  <div data-role="popup" id="feedbackResult" class="ui-content" data-theme="a"data-position-to="window">
  	error
  	</div>
<button onclick="prevPage()" id='pPage' rel="external" data-ajax="false"data-icon="arrow-l">Previous Page</button>
<button onclick="nextPage()" id='nPage' rel="external" data-ajax="false"data-icon="arrow-r">Next Page</button>
  </div>

    <footer data-role="footer" data-position="fixed">

      <h1>Footer</h1>
    </footer>
  </div>

</html>