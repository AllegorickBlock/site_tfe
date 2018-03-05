<?php
$bdd = new PDO('mysql:host=localhost;dbname=tfe;charset=utf8','root','');

$req = $bdd->prepare('INSERT INTO exemple(nom,prenom,age) VALUES (?, ?, ?)');

$req->execute(array('Bourlet','Jason','18'));









?>