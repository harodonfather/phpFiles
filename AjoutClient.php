//Ajout Client
<?php
include_once ("connexion.php");


if  ( isset ($_POST ['CodeClient'] )   && 
 isset ($_POST ['RaisonSocial'] )  
	&&  isset ($_POST ['Adresse'] ) 
&&  isset ($_POST ['Contact'] ) &&  
isset ($_POST ['Note'] ) 
&&  isset ($_POST ['Solde'] ) &&  


										)
{
	$CodeClient   = $_POST ['CodeClient'] ;
	$RaisonSocial = $_POST ['RaisonSocial'] ;
	$Adresse = $_POST ['Adresse'] ;
	$Contact   = $_POST ['Contact'] ;
	$Note = $_POST ['Note'] ;
    $Solde = $_POST ['Solde'] ;
	
	
	
	 $reponse["data"] =array();
	 @$reponse["type"];
	
	
	$query = " Insert into Client (CodeClient,RaisonSocial,Adresse,Contact,Note,Solde	) Values ( 
	'$CodeClient','$RaisonSocial', '$Adresse','$Contact','$Note', '$Solde' );
	
	
	
	$result = mysqli_query ($conn , $query ) ;
	
	
	
}

?>

