//Modifier Client
<?php
Require ("connexion.php");


	$query = " INSERT INTO `client`(`CodeClient`, `RaisonSocial`, `Adresse`, `Contact`) VALUES ('Cl/00003','[value-2]','[value-3]','232')"  ;
	$result = mysqli_query ($conn , $query ) ;
	
	
	

?>