<?php

$bdd = new PDO('mysql:host=localhost;dbname=jasonbourletb;charset=utf8', 'root', '');

$reponse = $bdd->query('SELECT * FROM jasonbourletf');// sélecttionne toute la base de donnée

while ($donees = $reponse->fetch()){ //Fait une boucle qui s'éxécute temps qu'il y a des données dans la base de données
	
	echo ''.$donees['nom'].'<br /> '  ;
	echo ''.$donees['prenom'].'<br />'  ;
	echo ''.$donees['email'].  '<br />'   ;
	echo ''.$donees['n_tel'].'<br />' ;
	echo ''.$donees['question'].'<br />' ;
	echo "<br/>";
}

$reponse->closeCursor(); //Ferme la demande 
?>