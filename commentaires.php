<?php
		//permet de savoir combien de lignes possede le fichier
		$contenu_fichier = file_get_contents('pseudos.txt');
		$nb_lignes=substr_count($contenu_fichier,"\r\n");
		
		//Affichage pseudos, titres, textes et dates de tous les commentaires
		//Ouverture fichiers
		$fp=fopen("pseudos.txt","r");
		$fp2=fopen("titres.txt","r");
		$fp3=fopen("messages.txt","r");	
		$fp4=fopen("dates.txt","r");
		
		//Stockage valeurs des fichiers
		for ($i=0;$i<$nb_lignes;$i++)
		{
			$pseudo=fgets($fp,1000);
			$titre=fgets($fp2,1000);
			$message=fgets($fp3,1000);
			$date=fgets($fp4,50);
			
			//Affichage valeurs
			echo "<strong>$pseudo</strong><br/>";
			echo "<em>$titre</em><br/>";
			echo "$message<br/>";
			echo $date."<br/><br/>";

		}
		
		fclose($fp);
		fclose($fp2);
		fclose($fp3);
		fclose($fp4);
?>