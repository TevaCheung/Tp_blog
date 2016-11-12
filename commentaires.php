<?php
		//permet de savoir combien de lignes possede le fichier
		$contenu_fichier = file_get_contents('pseudos.txt');
		$nb_lignes=substr_count($contenu_fichier,"\r\n");
		
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
			$date=fgets($fp4,50);
			
			//Affichage valeurs
			echo "<strong>$pseudo</strong><br/>";
			echo "<em>$titre</em><br/>";
			echo "$message<br/>";
			echo $date."<br/><br/>";
			/*
			while ($ligne=fgets($fp4)!==false){
				echo $ligne;
			}
			
			$jour=fseek($fp4,-1,SEEK_END);
			$mois=fseek($fp4,-2,SEEK_END);
			$annee=fgets($fp4,($i*5)+3);
			$heure=fgets($fp4,($i*5)+4);
			$minute=fgets($fp4,($i*5)+5);
			
			echo "Message écrit le ".$jour."/".$mois."/".$annee." à ".$heure."h".$minute."<br/><br/>";
			
			echo $jour." pour i =".$i."<br/>";
			echo $mois." pour i=".$i."<br/>";
			echo $annee." pour i =".$i."<br/>";
			echo $heure."pour i = ".$i."<br/>";
			echo $minute." pour i =".$i."<br/>";
			*/
		}
		
		fclose($fp);
		fclose($fp2);
		fclose($fp3);
		fclose($fp4);
?>