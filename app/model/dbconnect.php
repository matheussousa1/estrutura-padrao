<?php
//chamada das classes internas
   class dbconnect {
		
	    public  $con;
	    public  $conMSV;

	    
	    function __construct() {
	    	//bando mais saude
	        $servidor = '108.167.168.49';
	        $usuario = 'query510_maissau';
	        $senha = 'ma92303305';
	        $bd = 'query510_maissaude';
			
			$this->con = mysqli_connect($servidor, $usuario, $senha, $bd) or die(mysqli_connect_error());

			//banco dos vendedores
	        $servidor2 = '108.167.168.49';
	        $usuario2 = 'query510_maisven';
	        $senha2 = 'ma92303305';
	        $bd2 = 'query510_maissaudevendedor';
			
			$this->conMSV = mysqli_connect($servidor2, $usuario2, $senha2, $bd2) or die(mysqli_connect_error());
	    }

	
	}

//chamadas das classes externas
   function condb() { 

	    $host_name = "108.167.168.49"; 
	    $database = "query510_maissaude";
	    $username = "query510_maissau";          
	    $password = "ma92303305";    
		
	    $con = new mysqli($host_name, $username, $password, $database); 

	    //if connection fails, stop script execution 
	    if (mysqli_connect_errno()) { 
	        echo "Erro ao conectar com o Banco de Dados." . trigger_error(mysqli_connect_error());
	        exit(); 
	    } 
	    return $con; 
	}

	function condbMSV() { 

	    $host_name = "108.167.168.49"; 
	    $database = "query510_maissaudevendedor";
	    $username = "query510_maisven";          
	    $password = "ma92303305";    
		
	    $con = new mysqli($host_name, $username, $password, $database); 

	    //if connection fails, stop script execution 
	    if (mysqli_connect_errno()) { 
	        echo "Erro ao conectar com o Banco de Dados." . trigger_error(mysqli_connect_error());
	        exit(); 
	    } 
	    return $con; 
	} 

?>