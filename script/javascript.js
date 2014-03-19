var results = new Array();
var currentQuestion = 0;
var buttons= ['#bNever','#bSome','#bALot','#bAlways'];
var pItems=[1, 2, 3, 4, 5, 17, 18, 20, 21, 22, 23, 24, 25,26,27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 39,40];
var nItems=[6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 19, 37, 38];

var score = 0;


$(document).ready(function()
  {
    console.log(results[45]);
  
$("#questionForm").hide();

 $("#start").click(function(){
$("#questionForm").show();
//$("#start").hide();
i = 0;
moveToQuestion(0);
calculateScore()
  });


 $("#nextQuestion").click(function(){
nextQuestion();

  });


 $("#previousQuestion").click(function(){
previousQuestion();

  });

 $("#bNever").click(function(){

results[currentQuestion]=0;
refreshButton();
  });
 $("#bSome").click(function(){
results[currentQuestion]=1;
refreshButton();
  });
 $("#bALot").click(function(){
results[currentQuestion]=2;
refreshButton();
  });
 $("#bAlways").click(function(){
results[currentQuestion]=3;
refreshButton();
  });

  });


function refreshButton(){

  console.log('current Question'+currentQuestion);
	for (i = 0; i < buttons.length; ++i){
$(buttons[i]).css('color','black');
	} 
$(buttons[results[currentQuestion]]).css('color','red');
//document.getElementById("button").style.background='#000000';
}


function menu(){

}

function moveToQuestion(questionNum){
i=questionNum;
xmlhttp=new XMLHttpRequest();

xmlhttp.open("GET","questions.xml",false);
xmlhttp.send();
xmlDoc=xmlhttp.responseXML;
var x=xmlDoc.getElementsByTagName("question");
document.getElementById("question").innerHTML=
xmlDoc.getElementsByTagName("question")[currentQuestion].childNodes[0].nodeValue;

//document.write(x[i].getElementsByTagName("question")[0].childNodes[0].nodeValue);
//$("#question").text(x[i].getElementsByTagName("question").nodeValue);
}

function nextQuestion(){
currentQuestion++;

moveToQuestion(i);
refreshButton();

}
function previousQuestion(){

currentQuestion = currentQuestion-1;  

moveToQuestion(i);
refreshButton();

}


function displayQuestion(questionNum){

}



function selection(selectionNum){





}


function calculateScore(){

for (i = 0; i < 10; ++i){
if (results[i] == undefined)
{//return 'error';

console.log('error in pIte,s'+i)}
else{
score = score + results[pItems[i]];
}

}
for (i = 0; i < nItems.length; ++i){

results[i];


}
console.log(typeof score);
console.log(isNaN(score));
console.log(score);
return score;
}

