<?php
	//On regarde si tous les champs sont remplis
	if (isset($_POST['pseudo']) AND !empty($_POST['pseudo']) AND isset($_POST['mdp']) and !empty($_POST['mdp'])){
		$file="pseudo_et_mdp.txt";
		$read=file($file);

		//On parcourt tous les pseudos avec leur mdp
		foreach($read as $line=>$lineContent){
			$pseudo_et_mdp=$lineContent;
			$taille=strlen($pseudo_et_mdp);
			
			//On cherche le séparateur entre le pseudo et le mdp associé (séparés par une virgule dans le fichier)
			for ($i=0;$i<strlen($pseudo_et_mdp);$i++){		
				if ($pseudo_et_mdp[$i]==';') {
					$separateur=$i;			
				}
			}
			
			//On stocke dans 2 variables pour le pseudo et le mdp
			$pseudo="";
			$mdp="";
			//Stockage pseudo
			for ($i=0;$i<$separateur;$i++){
				$pseudo=$pseudo.$pseudo_et_mdp[$i];
			}
			//Stockage mdp
			for ($i=$separateur+1;$i<strlen($pseudo_et_mdp);$i++){
				$mdp=$mdp.$pseudo_et_mdp[$i];
			}	
			
			//On ouvre une session si les identifiants sont corrects
			if ($_POST['pseudo']==$pseudo AND $_POST['mdp']==$mdp){
				session_start();
				$_SESSION['pseudo'] = $_POST['pseudo'];
				header ('location: include.php');
				break;
			}
		}	
		//Si les identifiants sont incorrects on marque un message d'erreur	
		echo "Connexion échouée : mauvais pseudo et/ou mot de passe <br/>";
	}else{
		//Si tous les champs ne sont pas remplis, on le marque à l'utilisateur
		echo "Veuillez remplir tous vos identifiants <br/>";
	}
?>

<fieldset>
	<legend>Connexion</legend>

	<form action="connexion.php" method="POST">
		<p>
			<label for="pseudo">Pseudo :</label><input type="text" name="pseudo"/>
			<br/>
			<label for="mdp">Mot de passe :</label><input type="password" name="mdp"/>
			<br/>
			<input type="submit" value="envoyer" />
		</p>
	</form>
</fieldset>