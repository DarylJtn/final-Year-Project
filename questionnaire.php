
<html>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<link rel="stylesheet" href="//code.jquery.com/mobile/1.4.0/jquery.mobile-1.4.0.min.css" />
<link rel="stylesheet" href="styles/QuestionnaireStyles.css" />
<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<script src="//code.jquery.com/mobile/1.4.0/jquery.mobile-1.4.0.min.js"></script>
<script src="script/javascript.js"></script>
<script>
//this contains one result
result=new Object();

result[9] = new result();

//functions for changing the question to be asked
//todo add transitions
function prevPage()
{

$.mobile.navigate( "p2", {
  transition: "pop",
  reverse: false,
  changeHash: false
});

}

function nextPage()
{

$.mobile.navigate( "#2", {
  transition: "pop",
  reverse: false,
  changeHash: false
});

}
</script>
<div id="hello">

HELLO

</div>

<div data-role="page" id='1'>
<link rel="stylesheet" type="text/css" href="styles/QuestionnaireStyle.css">

 
    <div id="qheader" data-role="header" data-position="fixed">
      <h1>Page 1</h1>
      <div data-role="navbar">
    <ul>
      <li><a href="#">Section One: Money</a></li>
      <li><a href="#">Section Two: Health</a></li>
      <li><a href="#">Section Three: </a></li>
    </ul>
  </div><!-- /navbar -->
        <div data-role="navbar">
    <ul>
      <li><a href="#">One</a></li>
      <li><a href="#">Two</a></li>
      <li><a href="#">Three</a></li>
      <li><a href="#">Four</a></li>
      <li><a href="#">Five</a></li>
    </ul>
  </div><!-- /navbar -->
    </div>

  <div id='qna'>
    <div id="question" class='q'>
      This is question one. eg question do you have problems with buying essential items
    </div>

    <div id="input" class='i'>
 <fieldset data-role="controlgroup">
      <legend>Select:</legend>
          <input type="radio" name="radio-choice-1" id="radio-choice-1" value="choice-1" checked="checked" />
          <label for="radio-choice-1">allways</label>

          <input type="radio" name="radio-choice-1" id="radio-choice-2" value="choice-2"  />
          <label for="radio-choice-2">sometimes</label>

          <input type="radio" name="radio-choice-1" id="radio-choice-3" value="choice-3"  />
          <label for="radio-choice-3">not usually</label>

          <input type="radio" name="radio-choice-1" id="radio-choice-4" value="choice-4"  />
          <label for="radio-choice-4">never</label>

    </div>
</div>
<a href="#2" data-role="button">Go to Page Two</a>
<button onclick="prevPage()" id='skip' rel="external" data-ajax="false">Previous Page</button>
<button onclick="nextPage()" id='skip' rel="external" data-ajax="false">Next Page</button>

    <footer data-role="footer" data-position="fixed">
      <h1>Footer</h1>
    </footer>
  </div>



  <div data-role="page" id='2'>
<link rel="stylesheet" type="text/css" href="styles/QuestionnaireStyle.css">

 
    <div id="qheader" data-role="header" data-position="fixed">
      <h1>Page 2</h1>
      <div data-role="navbar">
    <ul>
      <li><a href="#">Section One: Money</a></li>
      <li><a href="#">Section Two: Health</a></li>
      <li><a href="#">Section Three: </a></li>
    </ul>
  </div><!-- /navbar -->
        <div data-role="navbar">
    <ul>
      <li><a href="#">One</a></li>
      <li><a href="#">Two</a></li>
      <li><a href="#">Three</a></li>
      <li><a href="#">Four</a></li>
      <li><a href="#">Five</a></li>
    </ul>
  </div><!-- /navbar -->
    </div>

  <div id='qna'>
    <div id="question" class='q'>
      This is question one. eg question do you have problems with buying essential items
    </div>

    <div id="input" class='i'>
 <fieldset data-role="controlgroup">
      <legend>Select:</legend>
          <input type="radio" name="radio-choice-1" id="radio-choice-1" value="choice-1" checked="checked" />
          <label for="radio-choice-1">allways</label>

          <input type="radio" name="radio-choice-1" id="radio-choice-2" value="choice-2"  />
          <label for="radio-choice-2">sometimes</label>

          <input type="radio" name="radio-choice-1" id="radio-choice-3" value="choice-3"  />
          <label for="radio-choice-3">not usually</label>

          <input type="radio" name="radio-choice-1" id="radio-choice-4" value="choice-4"  />
          <label for="radio-choice-4">never</label>

    </div>
</div>
<button onclick="prevPage()" id='skip' rel="external" data-ajax="false">Previous Page</button>
<button onclick="nextPage()" id='skip' rel="external" data-ajax="false">Next Page</button>

    <footer data-role="footer" data-position="fixed">
      <h1>Footer</h1>
    </footer>
  </div><!-- end page 2-->

<div data-role="page">
<link rel="stylesheet" type="text/css" href="styles/QuestionnaireStyle.css">

 
    <div id="qheader" data-role="header" data-position="fixed">
      <h1>Page 3</h1>
      <div data-role="navbar">
    <ul>
      <li><a href="#">Section One: Money</a></li>
      <li><a href="#">Section Two: Health</a></li>
      <li><a href="#">Section Three: </a></li>
    </ul>
  </div><!-- /navbar -->
        <div data-role="navbar">
    <ul>
      <li><a href="#">One</a></li>
      <li><a href="#">Two</a></li>
      <li><a href="#">Three</a></li>
      <li><a href="#">Four</a></li>
      <li><a href="#">Five</a></li>
    </ul>
  </div><!-- /navbar -->
    </div>

  <div id='qna'>
    <div id="question" class='q'>
      This is question one. eg question do you have problems with buying essential items
    </div>

    <div id="input" class='i'>
 <fieldset data-role="controlgroup">
      <legend>Select:</legend>
          <input type="radio" name="radio-choice-1" id="radio-choice-1" value="choice-1" checked="checked" />
          <label for="radio-choice-1">allways</label>

          <input type="radio" name="radio-choice-1" id="radio-choice-2" value="choice-2"  />
          <label for="radio-choice-2">sometimes</label>

          <input type="radio" name="radio-choice-1" id="radio-choice-3" value="choice-3"  />
          <label for="radio-choice-3">not usually</label>

          <input type="radio" name="radio-choice-1" id="radio-choice-4" value="choice-4"  />
          <label for="radio-choice-4">never</label>

    </div>
</div>
<button onclick="prevPage()" id='skip' rel="external" data-ajax="false">Previous Page</button>
<button onclick="nextPage()" id='skip' rel="external" data-ajax="false">Next Page</button>

    <footer data-role="footer" data-position="fixed">
      <h1>Footer</h1>
    </footer>
  </div><!-- end page 2-->

<div data-role="page">
<link rel="stylesheet" type="text/css" href="styles/QuestionnaireStyle.css">

 
    <div id="qheader" data-role="header" data-position="fixed">
      <h1>Page 1</h1>
      <div data-role="navbar">
    <ul>
      <li><a href="#">Section One: Money</a></li>
      <li><a href="#">Section Two: Health</a></li>
      <li><a href="#">Section Three: </a></li>
    </ul>
  </div><!-- /navbar -->
        <div data-role="navbar">
    <ul>
      <li><a href="#">One</a></li>
      <li><a href="#">Two</a></li>
      <li><a href="#">Three</a></li>
      <li><a href="#">Four</a></li>
      <li><a href="#">Five</a></li>
    </ul>
  </div><!-- /navbar -->
    </div>

  <div id='qna'>
    <div id="question" class='q'>
      This is question one. eg question do you have problems with buying essential items
    </div>

    <div id="input" class='i'>
 <fieldset data-role="controlgroup">
      <legend>Select:</legend>
          <input type="radio" name="radio-choice-1" id="radio-choice-1" value="choice-1" checked="checked" />
          <label for="radio-choice-1">allways</label>

          <input type="radio" name="radio-choice-1" id="radio-choice-2" value="choice-2"  />
          <label for="radio-choice-2">sometimes</label>

          <input type="radio" name="radio-choice-1" id="radio-choice-3" value="choice-3"  />
          <label for="radio-choice-3">not usually</label>

          <input type="radio" name="radio-choice-1" id="radio-choice-4" value="choice-4"  />
          <label for="radio-choice-4">never</label>

    </div>
</div>
<button onclick="prevPage()" id='skip' rel="external" data-ajax="false">Previous Page</button>
<button onclick="nextPage()" id='skip' rel="external" data-ajax="false">Next Page</button>

    <footer data-role="footer" data-position="fixed">
      <h1>Footer</h1>
    </footer>
  </div><!-- end page 2-->

<div data-role="page">
<link rel="stylesheet" type="text/css" href="styles/QuestionnaireStyle.css">

 
    <div id="qheader" data-role="header" data-position="fixed">
      <h1>Page 1</h1>
      <div data-role="navbar">
    <ul>
      <li><a href="#">Section One: Money</a></li>
      <li><a href="#">Section Two: Health</a></li>
      <li><a href="#">Section Three: </a></li>
    </ul>
  </div><!-- /navbar -->
        <div data-role="navbar">
    <ul>
      <li><a href="#">One</a></li>
      <li><a href="#">Two</a></li>
      <li><a href="#">Three</a></li>
      <li><a href="#">Four</a></li>
      <li><a href="#">Five</a></li>
    </ul>
  </div><!-- /navbar -->
    </div>

  <div id='qna'>
    <div id="question" class='q'>
      This is question one. eg question do you have problems with buying essential items
    </div>

    <div id="input" class='i'>
 <fieldset data-role="controlgroup">
      <legend>Select:</legend>
          <input type="radio" name="radio-choice-1" id="radio-choice-1" value="choice-1" checked="checked" />
          <label for="radio-choice-1">allways</label>

          <input type="radio" name="radio-choice-1" id="radio-choice-2" value="choice-2"  />
          <label for="radio-choice-2">sometimes</label>

          <input type="radio" name="radio-choice-1" id="radio-choice-3" value="choice-3"  />
          <label for="radio-choice-3">not usually</label>

          <input type="radio" name="radio-choice-1" id="radio-choice-4" value="choice-4"  />
          <label for="radio-choice-4">never</label>

    </div>
</div>
<button onclick="prevPage()" id='skip' rel="external" data-ajax="false">Previous Page</button>
<button onclick="nextPage()" id='skip' rel="external" data-ajax="false">Next Page</button>

    <footer data-role="footer" data-position="fixed">
      <h1>Footer</h1>
    </footer>
  </div><!-- end page 2-->






</html>