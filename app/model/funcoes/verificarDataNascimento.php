<?php 
   // Declara a data! :P
   $data = $_GET['dataNascimento'];
   
    // Separa em dia, mês e ano
    list($dia, $mes, $ano) = explode('/', $data);
   
    // Descobre que dia é hoje e retorna a unix timestamp
    $hoje = mktime(0, 0, 0, date('m'), date('d'), date('Y'));
    // Descobre a unix timestamp da data de nascimento do fulano
    $nascimento = mktime( 0, 0, 0, $mes, $dia, $ano);
   
    // Depois apenas fazemos o cálculo já citado :)
    $idade = floor((((($hoje - $nascimento) / 60) / 60) / 24) / 365.25);
    
    if ($idade <= 17) {
        //echo "menor";
        $res['status'] = "menor";
    }elseif ($idade > 17 ) {
        //echo "maior";
        $res['status'] = "maior";
    }else{
        //echo "error";
        $res['status'] = "error";
    }
    echo json_encode($res);

?>