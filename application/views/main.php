<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Superman - Remake Sunsoft 1992</title>
	
	<link rel="stylesheet" type="text/css" href="../css/main.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">

</head>
<body class="fullContainer">
	<div id="wrapper">
			<div id="content" class="text-center">  
				<img id="logo_title" src="superman_logo.png" alt="">
				<img id="logo_superman" src="simbolo_el.png" alt="">
				<button id="lalala" class="pressStart "onclick='javascript: alert("Hola Holita")'>Dale a intro para jugar</button>
				<!-- <h3 class="copyright">Un viaje de vuelta a los 90 por <a href="http://www.proyectosjgp.es/">Jorge Garcia</a> </h3>
				<h3 class="copyright"> ®Sunsoft y DC Comics 1992</h3> -->
			
		</div>
	</div>
</body>
</html>

<script>

var input = document.getElementById("lalala");

// Execute a function when the user presses a key on the keyboard
input.addEventListener("keypress", function(event) {
  // If the user presses the "Enter" key on the keyboard
  if (event.key === "Enter") {
    // Cancel the default action, if needed
    event.preventDefault();
    // Trigger the button element with a click
    document.getElementById("myBtn").click();
  }
});

	/*
	$(lalala).keydown(function(e) {
  var keyPressed = e.which || evt.keyCode;
  if (keyPressed==13)
  {
    console.log(keyPressed)
    alert("your next acction")
  }
 if(keyPressed==8)
 {
    console.log(keyPressed)
    alert("Your previous action");
 }
})*/
</script>