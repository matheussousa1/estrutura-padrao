<script type="text/javascript">
	$(document).ready(function() {
		//$('#novidade').modal('show');
		readRecords();
	});

	function readRecords() {
		$("#status").html("<h4 class='text-center'>CARREGANDO <img src='<?php echo SITE; ?>img/ui-anim_basic_16x16.gif'></h4>");
		var idUser = <?php echo $_SESSION['idSession']; ?>;
    	$.post("<?php echo SITE."carregarMetasInicial.php";?>", {idUser: idUser}, function (data, status) {
    	$("#status").empty();
       	$(".meta").html(data);
   	});
}
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
 
 <div class="right_col" role="main">

 					<div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Página Inicial</h2>
                                    <ul class="nav navbar-right panel_toolbox">
                                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                        </li>
                                    </ul>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">
                                    <fieldset>
                  										<div class="row meta">
                  											<div id="status"></div>
                  										</div>
                  									</fieldset>
                                </div>
                            </div>
                        </div>
                    </div>

</div>

