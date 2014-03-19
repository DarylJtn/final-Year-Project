<?php 

?>

<script>
function logout(){
$.post("logout.php");
    jQuery.mobile.changePage(window.location.href, {
        allowSamePageTransition: true,
        transition: 'none',
        reloadPage: true
    });
}


function questionnairePage(){
//system.log("questionnaire");
$.mobile.changePage( "questionnaire.php");
console.log(2);

//$.mobile.pageContainer.pagecontainer("questionnaire.php", "pagetwo");

}
function questionnairePage2(){
//system.log("questionnaire");
$.mobile.changePage( "questionnaire/index.php");
console.log(2);

//$.mobile.pageContainer.pagecontainer("questionnaire.php", "pagetwo");

}


function resultsPage(){
//system.log("questionnaire");
$.mobile.changePage( "results.php");
console.log(2);
//$.mobile.pageContainer.pagecontainer("questionnaire.php", "pagetwo");

}

 $( document ).on( "pageinit", "#aboutPage", function( event ) {
  alert( "This page was just enhanced by jQuery Mobile!" );
});
</script>
<div id="mainMenu" class="menu">
<button onclick="location.href='questionnaire/index.php'" id='skip' rel="external" data-ajax="false">Questionnaire</button>
<a href='questionnaire/index.php'><button id='skip'>Questionnaire</button></a>
<button onclick="resultsPage()" id='skip' rel="external" data-ajax="false">ViewResults</button>
<button onclick="logout()" id='skip' rel="external" data-ajax="false">logout</button>
</div>