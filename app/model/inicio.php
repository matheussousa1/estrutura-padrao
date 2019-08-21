<?php
	include_once ("dbconnect.php");
	include_once ("funcoes/criptaSenha.php");
	
	class InicioModel extends dbconnect{
		
		public $retorno;
		
		public function retornaSaldo($idCliente){
	
			$sql = "SELECT nivel FROM usuarios WHERE id = '$idCliente'";
			$consulta = mysqli_query($this->con,$sql) or die(mysqli_error($con));
			$row = mysqli_fetch_object($consulta);
			if($row->nivel == 6){
				$sql = "SELECT idTitular FROM titulardepen WHERE idDepen = '$idCliente'";
				$consulta = mysqli_query($this->con,$sql) or die(mysqli_error($this->con));
				$row = mysqli_fetch_object($consulta);
				$idCliente = $row->idTitular;
			}
			////
			$sql = "SELECT saldo,bonus FROM `dadoscliente` WHERE idCliente = '$idCliente'"; 
			$this->retorno = mysqli_query($this->con,$sql) or die(mysqli_error($this->con));
			
			return $this->retorno;
			
		}

		public function metasUnidades($idUser){
			//meta
			$sql = "SELECT m.meta FROM metaunidades as m inner join unidadeusuario as uu on m.idUnidade = uu.idUnidade WHERE uu.idusuario = '$idUser' ";
			$this->retorno[] = mysqli_query($this->con,$sql) or die(mysqli_error($this->con));

			$dataInicio =  date("Y-m")."-01";
			$dataFinal = date("Y-m-t");
			//vendas mes atual
			$sql = "SELECT COUNT(u.id) as totalVendas from usuarios as u inner join datacadastro as  d on u.id = d.idCliente inner join  carnes as c  on c.idTitular = u.id  where c.pagamento between '$dataInicio' and '$dataFinal' and c.parcela = 1 and c.pago = 1 and u.idRef = '$idUser' and NOT EXISTS (select 1 from renovacao where idCliente = u.id)";
			$this->retorno[] = mysqli_query($this->con,$sql) or die(mysqli_error($this->con));
			//renovacao mes atual
			$sql = "SELECT COUNT(u.id) as totalRenovacao from usuarios as u inner join renovacao as r on u.id = r.idCliente inner join  carnes as c  on c.idTitular = u.id  where c.pagamento between '$dataInicio' and '$dataFinal' and c.id = (SELECT id FROM carnes where idTitular = u.id and parcela = 1  and pago = 1  order by id desc limit 1) and r.id = (SELECT id FROM renovacao where idCliente = u.id order by id desc limit 1)  and r.idRef = '$idUser' ";
			$this->retorno[] = mysqli_query($this->con,$sql) or die(mysqli_error($this->con));
            
            //sql mes passado
			 $data = new DateTime(date("Y-m")."-01");
			 $data->modify('-1 month');
			 $dataInicioPassado =  $data->format('Y-m-d');

			 $data2 = new DateTime(date("Y-m-d"));
			 $data2->modify('-1 month');
			 $dataFinalPassado = $data2->format('Y-m-t');
			//vendas mes passado
			 $sql = "SELECT COUNT(u.id) as totalVendas from usuarios as u inner join datacadastro as  d on u.id = d.idCliente inner join  carnes as c  on c.idTitular = u.id  where c.pagamento between '$dataInicioPassado' and '$dataFinalPassado' and c.parcela = 1 and c.pago = 1 and u.idRef = '$idUser' and NOT EXISTS (select 1 from renovacao where idCliente = u.id)";
			$this->retorno[] = mysqli_query($this->con,$sql) or die(mysqli_error($this->con));

			//renovacao mes passado
			$sql = "SELECT COUNT(u.id) as totalRenovacao from usuarios as u inner join renovacao as r on u.id = r.idCliente inner join  carnes as c  on c.idTitular = u.id  where c.pagamento between '$dataInicioPassado' and '$dataFinalPassado' and c.id = (SELECT id FROM carnes where idTitular = u.id and parcela = 1  and pago = 1  order by id desc limit 1) and r.id = (SELECT id FROM renovacao where idCliente = u.id order by id desc limit 1)  and r.idRef = '$idUser' ";
			$this->retorno[] = mysqli_query($this->con,$sql) or die(mysqli_error($this->con));

			return $this->retorno;
		}
		
	}

?>