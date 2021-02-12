<!DOCTYPE html>


<html>

<head>

	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style_login.css">
	<title> Amzon - Connectez vous </title>

</head>

<body>

	<?php include("Includes/navbar.php") ?>

	<form method="post" action="">

		<h1>Connectez-vous à votre compte</h1>

		<p>

			<label for="mailconnect">Adresse Mail</label><br />

			<input type="email" name="mailconnect" id="mailconnect" placeholder="Votre Adresse Mail" autofocus><br />

			<br />
			<br />

			<label for="mdpconnect">Mot de Passe</label><br />

			<input type="password" name="mdpconnect" id="mdpconnect" placeholder="Votre Mot de Passe">

			<br />
			<br />

			<input type="checkbox" name="rememberme" id="rememberme"><label for="rememberme">Se souvenir de moi</label>

		</p>

		<div id="sending">

			<p><input type="submit" name="formconnexion" value="Se Connecter" /></p>
			
		</div>
		
	</form>

	<div id="seconnecter">
		
		<p> Pas encore de compte ?
		<a href="">Créer un Compte</a>

	</div>
	
</body>