//Ajout BonEntré
<?php
include_once ("connexion.php");


if  ( isset ($_POST ['Qrcode'] )   && 
 isset ($_POST ['Desi'] )  
	&&  isset ($_POST ['Qte'] ) 
&&  isset ($_POST ['QteMin'] ) &&  
isset ($_POST ['PrixAchatTTC'] ) 
&&  isset ($_POST ['prixVenteTTC'] ) &&  
isset ($_POST ['Marge'] ) 

										)
{
	$Qrcode   = $_POST ['Qrcode'] ;
	$Desi = $_POST ['Desi'] ;
	$Qte = $_POST ['Qte'] ;
	$QteMin   = $_POST ['QteMin'] ;
	$PrixAchatTTC = $_POST ['PrixAchatTTC'] ;
	$prixVenteTTC = $_POST ['prixVenteTTC'] ;
    $Marge = $_POST ['Marge'] ;
	
	
	
	 $reponse["data"] =array();
	 @$reponse["type"];
	
	
	$query = " Insert into Stock (CodeABarre,Qte,QteMin,PrixAchatTTC,prixVenteTTC,Marge	) Values ( 
	'$Qrcode','$Desi', '$Qte', '$QteMin','$PrixAchatTTC','$prixVenteTTC', '$Marge' );
	
	
	
	$result = mysqli_query ($conn , $query ) ;
	
	
	
}

?>

