<?php
include_once ("connexion.php");


if  ( isset ($_POST ['Qrcode'] )   && 
 isset ($_POST ['Desi'] )  
	 &&
	 isset ($_POST ['CodeArticle'] ) 
										)
{
	$Qrcode   = $_POST ['Qrcode'] ;
	$Desi = $_POST ['Desi'] ;
	$CodeArticle = $_POST ['CodeArticle'] ;
	
	
	
	 $reponse["data"] =array();
	 @$reponse["type"];
	
	
	$query = " UPDATE `Article` SET 
	`Desi` = '$Desi', 
	`CodeArticle` = '$CodeArticle' WHERE `Article`.`Qrcode` = $Qrcode "  ;
	$result = mysqli_query ($conn , $query ) ;
	
		
}

?>