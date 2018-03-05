	
/* En-tête*/ 
.logo {

	max-width:200px;
	float:left;
	bottom:50px;
}

#en_tete{
	background-color:rgb(22,171,89); /* Couleur du background de l'en-tête*/
	height:98px;
	width: 1900px;
	margin: -20px;
}
#current_page {
	
	background-color:rgb(17,128,67);
	
}


#menu {
	
	background-color:rgb(22,171,89); /* rgb(35,226,121)  */
	position:relative;
	top:20px;
	left:200px;
	float: left;
	height:53px;
}

.menu_option{
	list-style:none; /* Enlève la puce de la liste */
	font-size: 30px; /* Taille de la pocice */
	border-radius: 0px; /* Permet de faire des bord incurvé */
	position:relative; 
	bottom: 35px;
	left:0px;
	display:inline-block; /* Permet de mettre la liste à puces en ligne */
	border: 2px solid rgb(22,171,89); /* Bordure des menus */ 
	padding: 25px; /* Asâce entre le mot et le bord du cadre */
	margin: 9px; /* Espace entre les choix des pages */


}
#menu a {
	padding: 0px 0px;
	text-decoration: none;
	text-align: center;
	color: rgb(255,255,255);
	text-decoration:none;
}

ul  li:hover {
	background-color:rgb(17,128,67); /* Couleur du fond qui change quand on le survole avec la souris */
}


/*Corps du texte */

.zone_info_texte{
	
	width:1000px;
	height: 200px;
	background-color: green;
	padding:20px;
	margin:50px;
}

.zone_info_image{
	
	width:980px;
	height: 50px;
	background-color: red;
	padding-top: 30px;
	padding-left:60px;
	margin-top: 30px ;
	margin-bottom:-50px;
	margin-left: 50px
}

#footer {
	top: 500 px;
	position:relative;
	background-color:rgb(22,171,89);
	text-align:center;
}