<?php 

$current_page = basename(__FILE__,'.php');


	include("include/entete.php");
?>

<div id="corps">
	
	<div id="contact">
		
    <br />
    <p> Adresse de l'entreprise : 15, Rue du Sud  7300 Boussu.</p>
    <p> Horaire d'ouverture: Du lundi au vendredi de 9 heures à 16 heures.</p>



	</div>
	<br />

	<div id="formulaire"
			<p>Si vous avec une question ou une quelconque remarque remplissez le formulaire ci-dessous.
			</p>
			
	<br />
		<form method="POST" action="cible.php">	
			<label for="nom">Nom :</label>
			<input type="text" name="nom" id="nom" placeholder="Entrez votre nom"/><br />

			<label for="prenom">Prenom :</label>
			<input type="text" name="prenom" id="prenom" placeholder="Entrez votre prénom"/><br />

			<label for="email">E-mail :</label>
			<input type="email" name="email" id="email" placeholder="Entrez votre adresse mail"/><br />

			<label for="n_tel">Numéro de téléphone :</label>
			<input type="text" name="n_tel" id="n_tel" cols="20" placeholder="Entrez votre numéro de téléphone"/><br />
		
			<label for="question">Votre question/commentaire :</label>
			<br />
			<div id="textarea">
				<textarea cols=30 rows=10 name="question" id="question">
				</textarea>
			</div>
			<input type="submit" value="Envoyer">
		</form>






</div>



<?php 

	include("include/pied.php");
?>