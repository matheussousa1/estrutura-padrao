<?php

	function criptaSenha($senha){

		for($i=0; $i<10; $i++){
			$senha = sha1($senha);
		}

		return $senha;

	}

?>