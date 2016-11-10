<?php
		//permet de savoir combien de lignes possede le fichier
		$contenu_fichier = file_get_contents('pseudos.txt');
		$nb_lignes=substr_count($contenu_fichier,"\r\n");
		echo "Il y a actuellement ".$nb_lignes." messages<br/><br/>";
		
		//Affichage pseudos puis titres puis textes de tous les commentaires
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
			//$date=fgets($fp4,2);
			
			//Affichage valeurs
			echo "<strong>$pseudo</strong><br/>";
			echo "<em>$titre</em><br/>";
			echo "$message<br/>";
			/*for ($i=0;i<20;i++){
				echo "[5*$i][5*$i+1][5*$i+2][5*$i+3][5*$i+4]"
			}
			*/
		}
		
		fclose($fp);
		fclose($fp2);
		fclose($fp3);
		fclose($fp4);
?>