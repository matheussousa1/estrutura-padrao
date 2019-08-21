    <div class="">
        <a class="hiddenanchor" id="toregister"></a>
        <a class="hiddenanchor" id="tologin"></a>

        <div id="wrapper">
            <div id="login" class="animate form">
                <section class="login_content">
                    <form class="form-horizontal" action="<?php echo SITE."login/logar";?>" method="post" enctype="multipart/form-data">
                    <div class="alert alert-error">
									<button type="button" class="close" data-dismiss="alert">&times;</button>
									<h4>Ops!</h4>
									Você precisa fazer login para acessar.
								</div>
                        <div class="logo text-center mb30">
                        <img src="<?php echo SITE;?>imagens/logo2.jpg" alt="Página inicial do Mais Sáude"/>
                         <!-- <h2 class="nome-sistema">NOME DO SISTEMA</h2> -->
                         </div>
                        <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                            <input type="text" class="form-control has-feedback-left" name="idUser" id="idUser" placeholder="Usuario" required="" />
                             <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                        </div>
                        <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
                            <input type="password" class="form-control  has-feedback-left" name="senha" id="senha" placeholder="Senha" required="" />
                            <span class="fa fa-lock form-control-feedback left" aria-hidden="true"></span>
                        </div>
                        <div>
                            <button type="submit" class="btn btn-success">Entrar</button>
                            <a class="reset_pass" href="#toregister">Esqueci minha senha?</a>
                        </div>
                        <div class="clearfix"></div>
                        <div class="separator">
                            <br />
                            <div>
                                <p>©2017 Direitos Reservados Vicente Lemos</p>
                            </div>
                        </div>
                    </form>
                    <!-- form -->
                </section>
                <!-- content -->
            </div>
            <div id="register" class="animate form">
                <section class="login_content">
                    <form>
                        <h1>Recuperar Senha</h1>
                        <div>
                            <input type="email" class="form-control" placeholder="Email" required="" />
                        </div>
                        <div>
                            <a class="btn btn-success submit" href="index.html">Enviar</a>
                        </div>
                        <div class="clearfix"></div>
                        <div class="separator">

                            <p class="change_link">
                                <a href="#tologin" class="to_register"> Entrar</a>
                            </p>
                            <br />
                            <div>
                                <p>©2017 Direitos Reservados Vicente Lemos</p>
                            </div>
                        </div>
                    </form>
                    <!-- form -->
                </section>
                <!-- content -->
            </div>
        </div>
    </div>

