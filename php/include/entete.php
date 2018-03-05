<!DOCTYPE html>  
<html>
<head>
	<meta charset="utf-8">
	<title> Site de l'ECF </title>
	<link rel="stylesheet" type="text/css" href="../css/style_acceuil.css"> <!--<?php //echo $current_page; ?>Reprend la variable basé sur le nom du fichier php pour choisir la ponne page css-->

</head> 
<body>

<div id="en_tete">
	<div id="logo">
		<img src="../photo/logo.png" class="logo"> 
		<p id="slogan"> La sécurité avant tout ! </p>
	</div>
	<div id="menu">
		
		<ul>
			<li class="menu_option" id="<?php if ($current_page =="acceuil") { 
				echo "current_page";}
			?>" <!--Reprend la variable du php pour mettre à jour les onglets pour savoir lequel est actif-->
				<a href="index.php">Menu</a></li>
				
			<li class="menu_option" id="<?php if ($current_page =="produits") {
				echo "current_page";} 
			?>" <!---->
				<a href="produits.php">Produits</a></li>
				
			<li class="menu_option" id="<?php if ($current_page =="contact") {
				echo "current_page";}
			?>" <!---->
				<a href="contact.php">Renseignements</a></li>	
			
		</ul>
			
	</div>
</div>