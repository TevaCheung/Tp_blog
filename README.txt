/*
STRUCTURE

Le client devra se connecter à la page connexion.php avant de voir le blog à la page include.php. 
La déconnexion se fera à la page deconnexion.php.

STOCKAGE DONNEES IDENTIFICATION

Les données d'identification sont stockés dans le fichier pseudo_et_mdp.txt sous la forme :

pseudo;motdepasse

Lors de la tentative de connexion, chaque ligne du fichier va être parcourue pour savoir si l'authentification est correcte.

STOCKAGE NOUVELLES INFORMATIONS

Les informations de chaque message sont séparées en différents fichiers : messages.txt, titres.txt et date.txt
Chaque occurence forme une ligne dans le fichier où elle est affectée.

*/