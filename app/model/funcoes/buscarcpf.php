<?php 
include_once("../dbconnect.php");
$cpf = $_GET['cpf'];
$con = condb();
//funcao de validar cpf
function valCpf($cpf){
		$cpf = preg_replace('/[^0-9]/','',$cpf);
		$digitoA = 0;
		$digitoB = 0;
		if(strlen($cpf) < 11) {
			return false;
		}
		for($i = 0, $x = 10; $i <= 8; $i++, $x--){
			$digitoA += $cpf[$i] * $x;
		}
		for($i = 0, $x = 11; $i <= 9; $i++, $x--){
			if(str_repeat($i, 11) == $cpf){
				return false;
			}
			$digitoB += $cpf[$i] * $x;
		}
		$somaA = (($digitoA%11) < 2 ) ? 0 : 11-($digitoA%11);
		$somaB = (($digitoB%11) < 2 ) ? 0 : 11-($digitoB%11);
		if($somaA != $cpf[9] || $somaB != $cpf[10]){
			return false;	
		}else{
			return true;
		}
	}

if(!valCpf($cpf)){
    //echo "invalido";
    $response['status'] = 512;
}else{
$buscarcpf = mysqli_query($con, "SELECT id FROM usuarios where cpf = '$cpf' and nivel >= 5") or die(mysqli_error($con));
$cont = mysqli_num_rows($buscarcpf);
if($buscarcpf == true){
	if($cont > 0){
		//echo "false";
	    $response['status'] = 511; 
	}else{
		//echo "cpf livre";
		//echo "true";
	   $response['status'] = 200; 
	}
}else{
	//echo "false";
	$response['status'] = 511;
}
}
echo json_encode($response); 