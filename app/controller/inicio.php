<?php
	include_once(MODEL.'inicio.php');
	
	class Inicio{
		
		public $view;
		public $nivel;
		public $resultado;
		
		public function inicio(){
			
			$this->view = "inicio/inicio";
			$this->nivel = 7;

			$nivelUser = $_SESSION['nivelSession'];

			if($nivelUser >= 5){
				$model = new InicioModel;
				$idCliente = $_SESSION['idSession'];

				$model->retornaSaldo($idCliente);
				$this->resultado = $model->retorno;

				$this->view = "inicio/inicioCliente";
			}

		}


		// public function inicio(){
			
		// 	$this->view = "inicio/inicio";
		// 	$this->nivel = 7;

		// 	$nivelUser = $_SESSION['nivelSession'];

		// 	if($nivelUser >= 5){
		// 		$model = new InicioModel;
		// 		$idCliente = $_SESSION['idSession'];

		// 		$model->retornaSaldo($idCliente);
		// 		$this->resultado = $model->retorno;

		// 		$this->view = "inicio/inicioCliente";
		// 	}else{
		// 		$model = new InicioModel;
		// 		$idUser = $_SESSION['idSession'];

		// 		$model->metasUnidades($idUser);
		// 		$this->resultado[] = $model->retorno;
				
		// 	}

		// }
		
	}
?>