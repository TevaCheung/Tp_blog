<?php
	if (isset($_POST['pseudo']) AND isset($_POST['titre']) AND isset($_POST['message']))
	{
		//Stockage informations message dans des variables
		$pseudo=htmlspecialchars($_POST['pseudo']);
		$titre=htmlspecialchars($_POST['titre']);
		$message=htmlspecialchars($_POST['message']);
		
		//Fuseau horaire de Paris utilise
		date_default_timezone_set('Europe/Paris');
		$jour = date('d');
		$mois = date('m');
		$annee = date('Y');
		$heure = date('H');
		$minute = date('i');
		
		//Transfert contenus variables dans les fichiers
		//Ouverture des fichiers
		$fp= fopen("pseudos.txt","a");
		$fp2= fopen("titres.txt","a");
		$fp3= fopen("messages.txt","a");
		$fp4= fopen("dates.txt","a");

		//Stockage valeurs
		// La commande du saut a la ligne depend du systeme d exploitation
		
		$user_agent = getenv("HTTP_USER_AGENT");

		if (strpos($user_agent, "Win") !== FALSE){		
			fputs($fp,$pseudo."\r\n");
			fputs($fp2,$titre."\r\n");
			fputs($fp3,$message."\r\n");
			
			fputs($fp4,"Message écrit le ");
			fputs($fp4,$jour);
			fputs($fp4,"/");
			fputs($fp4,$mois);
			fputs($fp4,"/");
			fputs($fp4,$annee);
			fputs($fp4," à ");
			fputs($fp4,$heure);
			fputs($fp4,"h");
			fputs($fp4,$minute."\r\n");
		}elseif ((strpos($user_agent, "Mac") !== FALSE) || (strpos($user_agent, "PPC") !== FALSE)){
			fputs($fp,$pseudo."\r");
			fputs($fp2,$titre."\r");
			fputs($fp3,$message."\r");
			
			fputs($fp4,"Message écrit le ");
			fputs($fp4,$jour);
			fputs($fp4,"/");
			fputs($fp4,$mois);
			fputs($fp4,"/");
			fputs($fp4,$annee);
			fputs($fp4," à ");
			fputs($fp4,$heure);
			fputs($fp4,"h");
			fputs($fp4,$minute."\r");
		}elseif (strpos($user_agent, "Linux") !== FALSE){
			fputs($fp,$pseudo."\n");
			fputs($fp2,$titre."\n");
			fputs($fp3,$message."\n");
			
			fputs($fp4,"Message écrit le ");
			fputs($fp4,$jour);
			fputs($fp4,"/");
			fputs($fp4,$mois);
			fputs($fp4,"/");
			fputs($fp4,$annee);
			fputs($fp4," à ");
			fputs($fp4,$heure);
			fputs($fp4,"h");
			fputs($fp4,$minute."\n");
		}
		
		//fermeture de tous les fichiers
		fclose($fp);
		fclose($fp2);
		fclose($fp3);
		fclose($fp4);
	}else{
		echo "Vous devez remplir toutes les informations pour envoyer un message<br/><br/>";
	}

?>