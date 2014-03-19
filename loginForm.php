<?php echo'loginForm'; ?>

<script>



/*v 
$.("button.#submit").click(function(){

if($("#uName").val()==""||$("#uPassword")== ""){
	alert('username pass prob');
$("#ack").html("enter username and password");
}
else{
$.post($("#loginForm").attr("action"),
	$("#myForm :input").serializeArray(),
	function(data){
$("div#ack").html(data);
	});
}



});

nk
*/


function gotoMenu()
{
alert("Hello World!");
$.mobile.changePage( "menu.php", { transition: "slideup", changeHash: false });
}

function trySubmit(){
var username = $("#username").val();
var password = $("#password").val();

/*
$.mobile.changePage( "menu.php", {
	type: "post",
	data : { 'username' : username, 'password':password }
});

*/
$.post("login.php", { username:username, password:password},function(data){
	console.log(data);
if(data==1){
//$.mobile.changePage( "menu.php", { transition: "slideup"} );
   /* jQuery.mobile.changePage(window.location.href, {
        allowSamePageTransition: true,
        transition: 'none',
        reloadPage: true
    });*/

$.mobile.changePage( "menu.php", {
    type: "post",
    data : { 'username' : username, 'password':password }
});

    location.reload();

}else{

}
console.log(data);
});


//window.location.href = 'index.php';
}

function logout(){
$.post("logout.php");
    jQuery.mobile.changePage(window.location.href, {
        allowSamePageTransition: true,
        transition: 'none',
        reloadPage: true
    });



}

 $(document).ready(function(){ 





/*
$('#skip').click(function(event) {
alert('hello');
$.mobile.changePage( "menu.php", { transition: "slideup", changeHash: false });
 }); 

*/

});//end of doc ready









</script>

<body>

    <div data-role="popup" id="transitionExample" class="ui-content" data-theme="a"data-position-to="window">
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi sit amet risus eget nisi accumsan sollicitudin eget ut libero.
 Suspendisse potenti. Suspendisse suscipit, neque ac interdum bibendum, tellus diam pellentesque nisi, ac tincidunt mi velit vel justo.
  Cras porttitor mi sed sem mollis, ac ultrices nisi porta. Suspendisse iaculis nulla cursus enim lobortis, in adipiscing urna gravida. Sed dapibus molestie cursus. In luctus, risus in dapibus condimentum, nisi erat lobortis dui,
 at placerat purus libero vel libero. Curabitur consectetur odio sed arcu sagittis semper. Duis pulvinar ante a vulputate vehicula. 
 Nulla tincidunt lacinia metus lacinia rutrum. Ut sed erat eu magna posuere consequat ut eu mauris. Integer porta rhoncus libero, auctor 
 tempus nisi sagittis in. Nam sodales lorem velit, vitae condimentum est porta eget. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Ut odio augue, sagittis aliquam hendrerit eu, tempor sed lorem.</p>
</div>

<div id='loginForm'class="menu" >
<input id="username">
<input type="password" name="pwd" id='password'>
<button onclick="trySubmit()" id='skip' rel="external" data-ajax="false">Submit</button>
<input type="button" value="Register"id='registerButton'>
<a href="#transitionExample" data-transition="flip" class="ui-btn ui-input-btn ui-corner-all ui-shadow" data-rel="popup">Information</a>

<div id='ack'></div>
</div>
</body>


<footer>

</footer>
</div>


