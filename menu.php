<html>
<?php
include_once 'header.php';





?>
<script>
$("#b1").buttonMarkup({ corners: false });
//men
$( document ).ready(function() {
   $("#loginForm").hide();
});

function questionnairePage(){

$.mobile.changePage( "questionnaire.php");
}
</script>

<div id="mainMenu" class="menu">

<a href="questionnaire.php">question</a>
<button onclick="QuestionnairePage()" id='skip' rel="external" data-ajax="false">try Login</button>
<a href="questionnaire.php" data-role="button" id="b1" data-prefetch class="ui-link-inherit">Take Questionnaire</a>
<a href="results.php" data-role="button" id="b1">View Results</a>
<a href="LogOut.php" data-role="button" id="b1">LogOff</a>
</div>


<?php
include_once 'footer.php';
?>

</html>