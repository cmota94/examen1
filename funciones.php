<?php

$acres = $_POST['acres'];
convertirMetros($acres);


function convertirMetros($acres){
					$valorAcre = 4046.86;
					$metros = $acres * $valorAcre;
					
					$respuesta = "<strong>" . $acres . "</strong> acres son: " . $metros . " metro(s) cuadrado(s)<br><br>"; 
					
					echo $respuesta;
				
}

?>
<a href="index.php" >Regresar</a>