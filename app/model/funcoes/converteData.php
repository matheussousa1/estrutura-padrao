<?php
    function converteData($data){
    	
    	//$data = "1992-04-28";
		$data_nova = implode(preg_match("~\/~", $data) == 0 ? "/" : "-", array_reverse(explode(preg_match("~\/~", $data) == 0 ? "-" : "/", $data)));
		return $data_nova;
			
    }
?>