<?php
	session_start();
	
	if (!isset($_SESSION['pseudo'])){
		header ('location : connexion.php');
	}
?>

<!DOCTYPE HTML>
<html>
	<head>
	  <meta charset="utf-8"/>
	  <title>TP_blog</title>
	  <link rel="stylesheet" href="style.css">
	</head>
	<body>
		<?php include("header.php"); ?>

		<?php include("traitement.php"); ?>
		
		<?php include("commentaires.php"); ?>
	
		<div id="corps">
			<fieldset>
				<legend>Nouveau message</legend>
				
				<form action="include.php" method="POST">
					<p>
						<?php echo "Pseudo : " . $_SESSION['pseudo'] . "<br/>"?>
						
						<label for="nom">Titre du message :</label><input type="text" name="titre"/>
						<br/>
						<label for="nom">Message :</label><input type="text" name="message"/>
						<br/>
						<input type="submit" value="envoyer" />
					</p>
				</form>
			</fieldset>
		</div>	
	</body>
</html>