//Ajout BonEntré
<?php
include_once ("connexion.php");


if  ( isset ($_POST ['Qrcode'] )   && 
 isset ($_POST ['CodeArticle'] )&&
 isset ($_POST ['CodeClient'] )  
	&&  isset ($_POST ['Qte'] ) 
&&  isset ($_POST ['Remise'] ) &&
isset ($_POST ['TotaleTTC'] ) 


										)
{
	$Qrcode   = $_POST ['Qrcode'] ;
	 $CodeArticle = $_POST ['CodeArticle'] ;
	$CodeClient = $_POST ['CodeClient'] ;
	$Qte   = $_POST ['Qte'] ;
	$Remise = $_POST ['Remise'] ;
	$TotaleTTC = $_POST ['TotaleTTC'] ;
   
	
	
	
	 $reponse["data"] =array();
	 @$reponse["type"];
	
	
	$query = " Insert into LigneFactureVente (Qrcode,CodeArticle,CodeClient,Qte,Remise,TotaleTTC) Values ( 
	'$Qrcode','$CodeArticle','$CodeClient','$Qte','$Remise','$TotaleTTC');
	
	
	
	$result = mysqli_query ($conn , $query ) ;
	
	
	
}

?>

