<?php
	include("connection.php");
?>
<!DOCTYPE html>
<html>
	<head>
		<title>MiniChat</title>
		<meta charset="utf-8" />
		<link rel="styleshee" href="styleChat.css" />
	</head>	
	<body>
		<form id="formulaire">
			<label for="pseudo">Pseudo</label><br />
			<input type="text" name="pseudo" /><br />
			<label for="message">Message</label>
			<input type="message" name="message" />
		</form>
	</body>	
</html>
