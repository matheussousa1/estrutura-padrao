<?php
    
    define("CONT", "app/controller/");
    define("VIEW", "app/view/");
    define("MODEL", "app/model/");
    define("AJAX", "app/ajax/");
    define("SITE", "/estrutura-padrao/");
    
    global $url, $controller, $action, $classe;
    
    if(!empty($_GET['url'])){
        
        $url = $_GET['url'];
        $url = explode('/', $url);
        
        if(count($url) == 1){
            $url[] = "inicio";
        }
        
    }else{
        $url = array("inicio", "inicio");
    }
    
    $controller = $url[0];
    $action = $url[1];
    
    if(file_exists(CONT.$controller.".php")){
        
        session_start();
        
        include_once (CONT.$controller.".php");
        $classe = new $controller;
        
        if(method_exists($classe, $action)){
            
            $classe->$action();
            
            //verifica se o controller é diferente de login, se for ele verifica se está logado.
            if( ($controller != "login") && ($controller != "sobre") && ($controller != "contato") && ($controller != "unidade")  ){
                //Validação de Sessão e do nível de acesso
                include_once (CONT.'login.php');
                $verificaLogin = new Login;
                $verificaLogin->verifica();
                $verificaLogin->verificaNivelUsuario($classe->nivel);
            }
            
            $menu = "menuDependente";
            $nivelUser = (isset($_SESSION['nivelSession']) ? $_SESSION['nivelSession'] : 0);
            switch ($nivelUser) {
                case '1':
                    $menu = "menuAdmin";
                    break;
                case '2':
                    $menu = "menuGerente";
                    break;
                case '3':
                    $menu = "menuAtendente";
                    break;
                default:
                    $menu = "menuLogin";
                    break;
            }
            
            if($classe->view != ""){
                
                //incluir páginas
                include(VIEW.'estrutura/cabecalho.php');
                include(VIEW.'estrutura/'.$menu.'.php');
                
                $pagina = $classe->view;
                
                include_once(VIEW.$pagina.'.php');
                if ( ($controller != "login") && ($controller != "sobre") && ($controller != "contato") ) {
                    include(VIEW.'estrutura/rodape.php');
                }else{
                    include(VIEW.'estrutura/rodape.php');
                }
                
            }
            
        }else
            die("Erro ao carregar ação");
        
    }else{
        echo "Erro 404. Não encontrado.";
    }
    
?>