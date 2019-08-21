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
								<li class="divider"></li>
								<li>
											<a href="<?php echo SITE."relatoriosclienteamigo/clientesativos";?>">Relatório Cliente Amigo</a>
								</li>
								<li>
											<a href="<?php echo SITE."relatoriosclienteamigo/consultas";?>">Relatório Consulta Cliente Amigo</a>
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
										<li>
											<a href="<?php echo SITE."atendente/cadastro";?>">Novo atendente</a>
										</li>
										<li>
											<a href="<?php echo SITE."promotor/cadastro";?>">Novo promotor de vendas</a>
										</li>
										<li>
											<a href="<?php echo SITE."unidade/cadastro";?>">Nova unidade</a>
										</li>
										<li>
											<a href="<?php echo SITE."gerente/cadastro";?>">Novo gerente</a>
										</li>
									</ul>
								</li>
								<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown">
										Relatórios
										<b class="caret"></b>
									</a>
									<ul class="dropdown-menu">
										<li>
											<a href="<?php echo SITE."relatorios/clientesativos";?>">
												Relatório de Clientes Ativos
											</a>
										</li>
										<li>
											<a href="<?php echo SITE."relatorios/titularesativos";?>">
												Relatório de Titulares Ativos
											</a>
										</li>
										<li>
											<a href="<?php echo SITE."relatorios/transacoes";?>">
												Relatório de Transações Feitas
											</a>
										</li>
										<li>
											<a href="<?php echo SITE."relatorios/clientesatrasados";?>">
												Lista de Clientes Atrasados
											</a>
										</li>
										<li>
											<a href="<?php echo SITE."relatorios/vendidos";?>">
												Relatório por Vendedor
											</a>
										</li>
										<li>
											<a href="<?php echo SITE."relatorios/consultas";?>">
												Relatório de Consultas
											</a>
										</li>
										<li class="dropdown-submenu">
							                <a tabindex="-1" href="#">Relatório Renovações</a>
							                <ul class="dropdown-menu">
								                <li>
													<a href="<?php echo SITE."relatorios/renovacoes";?>">
														Relatório de Renovações
													</a>
												</li>
												<li>
													<a href="<?php echo SITE."relatorios/clientesseremrenovados";?>">
														Relatório Clientes Serem Renovados
													</a>
												</li>
							                </ul>
							              </li>
									</ul>
								</li>
								<li>
									<a href="<?php echo SITE."cliente/listar";?>">Listar Clientes</a>
								</li>
								<li>
									<a href="<?php echo SITE."exames/buscarcliente";?>">Fazer exames</a>
								</li>
								<li>
									<a href="<?php echo SITE."pagamento";?>">Efetuar pagamentos</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</nav>
