
<?php
include_once ("CONFIG.php");


{
	
	$QRCode   ="puo" ;
	$Desi = "zerd" ;
	
	
$query = " Insert into `article` (QRCode,Designation) Values ('$QRCode','$Desi' )";
	
	
	
	
	$result = mysqli_query ($conn , $query ) ;
	
	
	
}

?>

