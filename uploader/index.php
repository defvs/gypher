<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Gypher</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<link href="https://fonts.googleapis.com/css2?family=Shadows+Into+Light&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Baloo+Thambi+2:wght@500&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.perfect-scrollbar/1.5.0/perfect-scrollbar.js"></script>
	<link rel="stylesheet"
		  href="https://cdnjs.cloudflare.com/ajax/libs/jquery.perfect-scrollbar/1.5.0/css/perfect-scrollbar.css">
	<link href="style.css" rel="stylesheet"/>
</head>
<body>
<div id="videoDiv">
	<video autoplay muted loop id="video0">
		<source src="" type="video/mp4">
	</video>
	<video autoplay muted loop id="video1">
		<source src="" type="video/mp4">
	</video>
</div>
<div class="content">
	<p>Submitted by: <span id="author"></span></p>
</div>
<!--<img class="logo" src="logo.png" alt="Logo">-->
<div class="centered">
	<div class="back">
		<h1>Submit an animated background</h1>
		<form class="form">
			<label for="username"></label><input class="size2" type="text" id="username" name="username"
												 placeholder="Username"><br>
			<label for="gif-search"></label><input required class="size3" type="text" id="gif-search" name="url"
												   placeholder="Search for a gif..." autocomplete="off"><br>
			<img src="giphy-logo.png" height="26"
				 width="200" style="float: right" alt="Powered by GIPHY"/><br>
			<div id="gif-results" hidden></div>
			<input class="submit" type="submit" value="Add">
		</form>
	</div>
</div>
<script>const instance = "<?php echo isset($_GET['inst']) ? strtolower($_GET['inst']) : "gifs"?>";</script>
<script src="videoLoad.js"></script>
<script src="submitForm.js"></script>
<script src="giphySelector.js"></script>
</body>
</html>