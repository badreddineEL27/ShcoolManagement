<?php 
	$connexion=mysqli_connect("localhost", "root", "", "pff_istagadir") or die("Erreur de connexion: " . mysqli_error($connexion));
	if(!$connexion)
	{
		echo "Connection is not Successfully";
	}
?>