<?php

$bdd = new PDO('mysql:host=localhost;dbname=jasonbourletb;charset=utf8', 'root', ''); // Connecte la page à la base de donnée

$req = $bdd->prepare('INSERT INTO jasonbourletf(nom, prenom, email, n_tel, question) VALUES (?, ?, ?, ?, ?)'); //Inserera les donnée dans les collones dites du formulaire
$req->execute(array($_POST['nom'], $_POST['prenom'], $_POST['email'], $_POST['n_tel'], $_POST['question'])); // Récupère les information du formulaire te les envoie vers la base de données.


header('Refresh: 5; url=http://localhost/site_tfe/php/contact.php'); //renvoie vers la page cible à la fin des 5 secondes d'attente
?>

<!DOCTYPE html>  
<html>
<head>
	<meta charset="utf-8">
	<title> Site de l'ECF </title>
	<link rel="stylesheet" type="text/css" href="../css/style_acceuil.css"> <!--<?php //echo $current_page; ?>Reprend la variable basé sur le nom du fichier php pour choisir la ponne page css-->

</head> 
<body>
	<?php


	$reponse = $bdd->query('SELECT * FROM jasonbourletf ORDER BY id DESC LIMIT 1');//Permet de sélectionner la dernière entrée dans la table de donénes

	$donees = $reponse->fetch();

?>
		<p> Votre pnom est : <?php echo $donees['nom']?> </p>
		<p> Votre prenom est : <?php echo $donees['prenom']?> </p>
		<p> Votre email est : <?php echo $donees['email']?> </p>
		<p> Votre question/commentaire est : <?php echo $donees['question']?> </p>



<?php
	
$reponse->closeCursor();


		?>

</body>

