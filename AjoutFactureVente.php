//Ajout LigneFactureVente
<?php
include_once ("connexion.php");


if  ( isset ($_POST ['NumeroFactureVente'] )   && 
 isset ($_POST ['CodeArticle'] )  
	&&  isset ($_POST ['CodeABarre'] ) 



										)
{
	$NumeroFactureVente   = $_POST ['NumeroFactureVente'] ;
	$CodeClient = $_POST ['CodeClient'] ;
	$TotalTTC = $_POST ['TotalTTC'] ;
	
	
	
	
	 $reponse["data"] =array();
	 @$reponse["type"];
	
	
	$query = " Insert into FactureVente (NumeroFactureVente,CodeClient,TotalTTC) Values ( 
	'$NumeroFactureVente','$CodeClient', '$TotalTTC' );
	
	
	
	$result = mysqli_query ($conn , $query ) ;
	
	
	
}

?>

