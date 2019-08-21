<script type="text/javascript">
	$(document).ready(function() {
		//$('#novidade').modal('show');
	});
</script>
<!-- Modal -->
<div id="novidade" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="myModalLabel">Novidade</h3>
  </div>
  <div class="modal-body">
    <p>Novo Relatório Caixa</p>
    <video width="100%" height="100%" controls autoplay>
	  <source src="http://vicentelemos.com.br/v3/upload/videos/relatorio_caixa.mp4" type="video/mp4">
	  <!-- <source src="movie.ogg" type="video/ogg"> -->
	Error entrar em contato com suporte
	</video>
  </div>
  <div class="modal-footer">
    <button class="btn btn-danger" data-dismiss="modal" aria-hidden="true">Fechar</button>
  </div>
</div>
<?php
 $meta = mysql_fetch_object($classe->resultado[0][0]);
 $mesAtualVendas = mysql_fetch_object($classe->resultado[0][1]);
 $mesAtualRenovacao = mysql_fetch_object($classe->resultado[0][2]);
 $mesPassadoVendas = mysql_fetch_object($classe->resultado[0][3]);
 $mesPassadoRenovacao = mysql_fetch_object($classe->resultado[0][4]);
 ?>
<div id="content">
	<div class="container">
		<div class="row-fluid">
			<div class="span12">
					<fieldset>
					<legend>Página inicial</legend>		
						<div class="row-fluid well">
							<div class="span12">
								Seja bem-vindo <strong><?php echo $_SESSION['nomeSession'];?></strong>, este é o sistema +Saúde Vicente Lemos.
							</div>
						</div>
						<div class="row-fluid well">
							<div class="span5">
								<h4>Meta para este mês: <?php echo $meta->meta; ?></h4>
							</div>
							<div class="span5">
								<h4>Falta <?php echo $meta->meta - $mesAtualVendas->totalVendas ?> vendas para atingir a meta este mês</h4>
							</div> 
							<div class="span5">
							Datas: <?php echo "01/" . date("m") ."/" . date("Y"); ?> à <?php echo date("t/m/Y"); ?>
							<h4>Mês Atual</h4>
								<h5>Planos Vendidos: <?php echo $mesAtualVendas->totalVendas; ?> </h5>
								<h5>Planos Renovados: <?php echo $mesAtualRenovacao->totalRenovacao; ?> </h5>
							</div>
							<div class="span5">
							Datas: 
							<?php 
							 $data = new DateTime(date("Y-m")."-01");
							 $data->modify('-1 month');
							 echo $dataInicioPassado =  $data->format('d/m/Y')." à ";

							 $data2 = new DateTime(date("Y-m-d"));
							 $data2->modify('-1 month');
							 echo $dataFinalPassado = $data2->format('t/m/Y'); 
			 				?>

							<h4>Mês Passado</h4>
								<h5>Planos Vendidos: <?php echo $mesPassadoVendas->totalVendas; ?> </h5>
								<h5>Planos Renovados: <?php echo $mesPassadoRenovacao->totalRenovacao; ?> </h5>
							</div>

							<div class="span12"> 
								<h6>*OBS: A meta só é contabilizada com PLANOS VENDIDOS e clientes que pagaram á parcela, regra também adotada para renovações.</h6>
							</div>
						</div><!-- end row-fluid -->
						</div><!-- end row-fluid -->
					</fieldset>
			</div><!-- end span12 -->
			
		</div><!-- end row-flid -->
	</div><!-- end container -->
</div><!-- end content -->
