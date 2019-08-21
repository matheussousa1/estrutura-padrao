<?php
	function removeAcentos($titulo){
		
			$titulo = str_replace(" ", "-", $titulo);
			$titulo = str_replace("ã", "a", $titulo);
			$titulo = str_replace("Ã", "a", $titulo);
			$titulo = str_replace("â", "a", $titulo);
			$titulo = str_replace("Â", "a", $titulo);
			$titulo = str_replace("á", "a", $titulo);
			$titulo = str_replace("Á", "a", $titulo);
			$titulo = str_replace("à", "a", $titulo);
			$titulo = str_replace("À", "a", $titulo);
			$titulo = str_replace("&", "e", $titulo);
			$titulo = str_replace("é", "e", $titulo);
			$titulo = str_replace("É", "e", $titulo);
			$titulo = str_replace("è", "e", $titulo);
			$titulo = str_replace("È", "e", $titulo);
			$titulo = str_replace("í", "i", $titulo);
			$titulo = str_replace("Í", "i", $titulo);
			$titulo = str_replace("ì", "i", $titulo);
			$titulo = str_replace("Ì", "i", $titulo);
			$titulo = str_replace("õ", "o", $titulo);
			$titulo = str_replace("Õ", "o", $titulo);
			$titulo = str_replace("ó", "o", $titulo);
			$titulo = str_replace("Ó", "o", $titulo);
			$titulo = str_replace("ò", "o", $titulo);
			$titulo = str_replace("Ò", "o", $titulo);
			$titulo = str_replace("ç", "c", $titulo);
			$titulo = str_replace("Ç", "c", $titulo);
			$titulo = str_replace("+", "", $titulo);
			$titulo = str_replace("!", "", $titulo);
			$titulo = str_replace(",", "", $titulo);
			$titulo = str_replace("%", "", $titulo);
			$titulo = str_replace("$", "", $titulo);
			$titulo = str_replace("#", "", $titulo);
			$titulo = str_replace("@", "", $titulo);
			$titulo = str_replace("?", "", $titulo);
			$titulo = strtolower($titulo);

			return($titulo);
	}
?>