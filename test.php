<?php
$mysqli = mysqli_connect('localhost','root','','tfe');

mysqli_query($mysqli,"INSERT INTO exemple(nom,prenom,age) VALUES ('Poutou','Philippe','40')") or die(mysqli_error($mysqli));

mysqli_close($mysqli);


?>