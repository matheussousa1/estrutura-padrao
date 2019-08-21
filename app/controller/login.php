<?php
	include_once(MODEL.'login.php');
	
	class Login{
		
		public $view;
		public $nivel;
		
		public function inicio(){
			
			$this->view = "login/loginForm";
			$this->nivel = 7;
			
			session_destroy();
		    session_unset();
			
		}
		
		
		public function logar(){
			
			if(!empty($_POST)){
				
				$idUser = $_POST["idUser"];
				$senha = $_POST["senha"];
				
				$loginClass = new LoginModel;
				$loginClass->logar($idUser, $senha);
				
			}
			
		}
		
		
		public function verifica(){
			
			$user = $_SESSION['userSession'];
			$senha = $_SESSION['senhaSession'];
			
	        if( (empty($user)) AND (empty($senha)) ){
				session_destroy();
				session_unset();
				
				header("Location: ".SITE."login");
				
	        }else{
		        
				$model = new LoginModel;
				if($model->verificaLogado($user, $senha)){
					return true;
				}else{
					return false;
				}
				
			}
			
		}
		
		
		public function verificaNivelUsuario($classeNivel){
			
			$nivelUser = $_SESSION['nivelSession'];
			
			if( ($nivelUser <= $classeNivel) OR ($classeNivel == 7) ){
				return TRUE;
			}else{
				header("Location: ".SITE."login/erro");
				return FALSE;
			}
			
		}
		
		
		public function permissao(){
			
			$this->view = "login/loginForm";
			$this->nivel = 7;
			
		}
		
		
		public function sair(){
			
			$this->view = "";
			$this->nivel = 7;
			
			session_destroy();
			session_unset();
			
			header("Location: ".SITE."login");
			
		}
		
		
		public function erro(){
			
			$this->view = "login/erroLogin";
			$this->nivel = 7;
			
		}
		
	}
?>