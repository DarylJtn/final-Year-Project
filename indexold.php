<html><!DOCTYPE HTML>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<link rel="stylesheet" href="http://code.jquery.com/mobile/1.3.2/jquery.mobile-1.3.2.min.css" />
<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<script src="http://code.jquery.com/mobile/1.3.2/jquery.mobile-1.3.2.min.js"></script>
<script src="script/javascript.js"></script>
<link rel="stylesheet" type="text/css" href="styles/style.css">
<script>








</script>


<head><meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

<div data-role="header">
    <a href="#" data-icon="delete">Cancel</a>
    <h1>Edit Contact</h1>
    <a href="#" data-icon="check" data-theme="b">Save</a>
</div>
</head>


<fieldset data-role="controlgroup">
    <legend>Radio buttons, vertical controlgroup:</legend>
        <input type="radio" name="radio-choice-1" id="radio-choice-1" value="choice-1" checked="checked">
        <label for="radio-choice-1">Never</label>
        <input type="radio" name="radio-choice-1" id="radio-choice-2" value="choice-2">
        <label for="radio-choice-2">Sometimes</label>
        <input type="radio" name="radio-choice-1" id="radio-choice-3" value="choice-3">
        <label for="radio-choice-3">A Lot</label>
        <input type="radio" name="radio-choice-1" id="radio-choice-4" value="choice-4">
        <label for="radio-choice-4">Always</label>
</fieldset>
<div id="questionForm">
<div id="question"></div>

	<div id="buttons">
			<button type="button" id='bNever' class='answerButton'>Never</button> 
			<button type="button" id='bSome' class='answerButton'>Sometimes</button> 
			<button type="button" id='bALot' class='answerButton'>A Lot</button> 
			<button type="button" id='bAlways' class='answerButton'>Always </button> 

	</div>




</div>
<button type="button" id='start' class='startButton'>Start</button> </br>
<button type="button" id='previousQuestion' class='startButton'>prv</button>
<button type="button" id='nextQuestion' class='startButton'>nxt</button> </br>
</html>