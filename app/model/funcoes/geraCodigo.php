<?php
function geraCod(){
	$con = con();
	
	$codVerifica = "";
	$testa = TRUE;
	while($testa){
		$codVerifica = rand(0000001000, 9999999999);
		
		$sql = mysqli_query($con, "SELECT codVerificador FROM transacoes WHERE codVerificador = '$codVerifica'");
		
		if(mysqli_num_rows($sql) == 0){
			$testa = FALSE;
			return $codVerifica;
		}
		
	}
}
?>