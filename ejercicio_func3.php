<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php
	




$longitud=[];
	
	
	function vocales($valor){
		$vocales="aeiou";
		global $longitud;
		for ($i=0; $i < strlen($vocales) ; $i++) {
			if(preg_match("/$vocales[$i]/", $valor)){
				array_push($longitud,"a");	
			}
			}
			if(count($longitud)===5){
				echo "LA PALABRA CONTIENE LAS 5 VOCALES";
			}else{
				echo "NO CONTIENE TODAS LAS VOCALES";
			}

	}
	
	vocales("xebpipfpfupaaa");
	

	
	
?>

</body>
</html>