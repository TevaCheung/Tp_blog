/*
STRUCTURE

Le client devra se connecter � la page connexion.php avant de voir le blog � la page include.php. 
La d�connexion se fera � la page deconnexion.php.

STOCKAGE DONNEES IDENTIFICATION

Les donn�es d'identification sont stock�s dans le fichier pseudo_et_mdp.txt sous la forme :

pseudo;motdepasse

Lors de la tentative de connexion, chaque ligne du fichier va �tre parcourue pour savoir si l'authentification est correcte.

STOCKAGE NOUVELLES INFORMATIONS

Les informations de chaque message sont s�par�es en diff�rents fichiers : messages.txt, titres.txt et date.txt
Chaque occurence forme une ligne dans le fichier o� elle est affect�e.

*/