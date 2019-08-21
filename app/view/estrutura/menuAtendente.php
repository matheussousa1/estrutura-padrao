			<nav class="navbar navbar-static-top">
				<div class="navbar-inner">
					<div class="container">
						
						<div class="btn-group pull-right">
							<a class="btn btn-primary dropdown-toggle" data-toggle="dropdown" href="#">
								<strong>
									Meus dados
								</strong>
								<span class="caret"></span>
							</a>
							<ul class="dropdown-menu">
							 <li>
									<a href="<?php echo SITE."ferramentas/alterarsenha";?>">
										<i class="fa fa-key" aria-hidden="true"></i>
										Alterar Senha
									</a>
								</li>
								<li class="divider"></li>
								<li>
									<a href="<?php echo SITE."login/sair";?>">
										<i class="icon-off"></i>
										Sair
									</a>
								</li>
							</ul>
						</div>

						<div class="btn-group pull-right espcla">
							<a class="btn btn-cla dropdown-toggle" data-toggle="dropdown" href="#">
								<strong>
									Cliente Amigo
								</strong>
								<span class="caret"></span>
							</a>

							<ul class="dropdown-menu dropdown-menucla">
								<li>
											<a href="<?php echo SITE."clienteamigo/cadastro";?>">Novo Cliente</a>
										</li>
								<li>
											<a href="<?php echo SITE."clienteamigo/listar";?>">Lista Clientes</a>
								</li>
							</ul>
						</div>
						
						<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</a>
						<div class="nav-collapse collapse">
							<ul class="nav">
								<li>
									<a href="<?php echo SITE."index.php";?>">Início</a>
								</li>
								<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown">
										Cadastrar
										<b class="caret"></b>
									</a>
									<ul class="dropdown-menu">
										<li>
											<a href="<?php echo SITE."cliente/cadastro";?>">Novo cliente</a>
										</li>
									</ul>
								</li>
								<li>
									<a href="<?php echo SITE."cliente/listar";?>">Listar clientes</a>
								</li>
								<li>
									<a href="<?php echo SITE."exames/buscarcliente";?>">Fazer exames</a>
								</li>
								<li>
									<a href="<?php echo SITE."pagamento";?>">Efetuar pagamentos</a>
								</li>
								<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown">
										Relatórios
										<b class="caret"></b>
									</a>
									<ul class="dropdown-menu">
										<li>
											<a href="<?php echo SITE."relatorios/transacoes";?>">Relatório caixa </a>
										</li>
									</ul>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</nav>
