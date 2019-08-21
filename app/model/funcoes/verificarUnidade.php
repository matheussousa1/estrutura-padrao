<?php
function verificarUnidade($idRef){

	$sql = mysql_query("SELECT u.boleto as boleto FROM unidadeusuario as uu inner join unidades as u on uu.idUnidade = u.id WHERE uu.idUsuario = $idRef ");
	$res = mysql_fetch_object($sql);

	return $res->boleto;
}
?>