<!DOCTYPE HTML>
<html>
	<head>
	  <meta charset="utf-8">
	  <title>Titre de la page</title>
	  <link rel="stylesheet" href="style.css">
	</head>
	<body>
		<?php include("header.php"); ?>
		
		<?php include("commentaires.php"); ?>
		
		<div id="corps">
			<form action="include.php" method="POST">
				<p>
					<label for="prenom">Pseudo :</label><input type="text" name="pseudo"/>
					<br/>
					<label for="nom">Titre du message :</label><input type="text" name="titre"/>
					<br/>
					<label for="nom">Message :</label><input type="text" name="message"/>
					<br/>
					<input type="submit" value="envoyer" />
				</p>
			</form>
		</div>
		
		<?php include("traitement.php"); ?>
	</body>
</html>