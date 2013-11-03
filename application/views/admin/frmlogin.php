<body>



<div class="container-fluid-full">

		<div class="row-fluid">

<div class="alert alert-success" id="avisoHeader">
	<button type="button" class="close" data-dismiss="alert">×</button>
	<strong>Bem vindo!</strong> Para poder entrar em sua area administrativa necessita-se suas informações de <strong>usuário</strong>
	e <strong>senha</strong>.
</div>

<div class="alert alert-info" id='autentica' style="display:none;">
							<button type="button" class="close" data-dismiss="alert">×</button>
							<strong>Autenticando...</strong> Aguarde um momento por favor.
						</div>

					
			<div class="row-fluid">
				<div class="login-box">
					<h2>Entre na sua area administrativa</h2>
						<fieldset>

						<?php

							$atributos = array('id'=>'loginform');

							$usuario = array(
								'class'=>'input-large span12',
								'name'=>'txt_usuario',
								'id'=>'username',
								'type'=>'text',
								'placeholder'=>'Digite o usuario'
							);

							$senha = array(
								'class'=>'input-large span12',
								'name'=>'txt_senha',
								'type'=>'password',
								'id'=>'password',
								'placeholder'=>'Digite a senha'
							);

							$lembre = array(
								'type'=>'checkbox',
								'id'=>'remember'
							);

							$login = array(
								'type'=>'submit',
								'class'=>'btn btn-primary span12',
								'id'=>'btn_login'
								);

							echo form_open('admin/admin/login',$atributos);

							echo form_input($usuario);

							echo form_input($senha);

						?>

							<div class="clearfix"></div>

							<label class="remember" for="remember">

						<?php 

							echo form_checkbox($lembre);

						?> Lembre-me</label>
							
							<div class="clearfix"></div>
							
						<?php

							echo form_submit($login,'Login');

							echo form_close();

						?>
						</fieldset>	
					<hr />
					<h3>Esqueceu sua senha?</h3>
					<p>
						Sem problemas, <a href="#">clique aqui</a> para requisitar uma nova senha.
					</p>	
				</div>
			</div><!--/row-->




	<div class="alert alert-error" style="display:none;" id="erroLogin">
							<button type="button" class="close" data-dismiss="alert">×</button>
							<strong>ERRO!</strong> Ocorreu um erro ao autentificar seus dados.
							<strong>Verifique novamente</strong> o <strong>usuário</strong> e <strong>senha</strong>,
							caso o erro persista procure o <strong>administrador</strong> do sistema ou vá ao link
							<strong>"esqueceu minha senha?"</strong> para solicitar outra de acesso.
						</div>
			
				</div><!--/fluid-row-->

				
	</div><!--/.fluid-container-->

	<!-- start: JavaScript-->
		<script src="static/js/jquery-1.10.2.min.js"></script>
	<script src="static/js/jquery-migrate-1.2.1.min.js"></script>	
		<script src="static/js/jquery-ui-1.10.3.custom.min.js"></script>	
		<script src="static/js/jquery.ui.touch-punch.js"></script>	
		<script src="static/js/modernizr.js"></script>	
		<script src="static/js/bootstrap.min.js"></script>	
		<script src="static/js/jquery.cookie.js"></script>	
		<script src='static/js/fullcalendar.min.js'></script>	
		<script src='static/js/jquery.dataTables.min.js'></script>
		<script src="static/js/excanvas.js"></script>
	<script src="static/js/jquery.flot.js"></script>
	<script src="static/js/jquery.flot.pie.js"></script>
	<script src="static/js/jquery.flot.stack.js"></script>
	<script src="static/js/jquery.flot.resize.min.js"></script>
	<script src="static/js/jquery.flot.time.js"></script>
		
		<script src="static/js/jquery.chosen.min.js"></script>	
		<script src="static/js/jquery.uniform.min.js"></script>		
		<script src="static/js/jquery.cleditor.min.js"></script>	
		<script src="static/js/jquery.noty.js"></script>	
		<script src="static/js/jquery.elfinder.min.js"></script>	
		<script src="static/js/jquery.raty.min.js"></script>	
		<script src="static/js/jquery.iphone.toggle.js"></script>	
		<script src="static/js/jquery.uploadify-3.1.min.js"></script>	
		<script src="static/js/jquery.gritter.min.js"></script>	
		<script src="static/js/jquery.imagesloaded.js"></script>	
		<script src="static/js/jquery.masonry.min.js"></script>	
		<script src="static/js/jquery.knob.modified.js"></script>	
		<script src="static/js/jquery.sparkline.min.js"></script>	
		<script src="static/js/counter.min.js"></script>	
		<script src="static/js/raphael.2.1.0.min.js"></script>
	<script src="static/js/justgage.1.0.1.min.js"></script>	
		<script src="static/js/jquery.autosize.min.js"></script>	
		<script src="static/js/retina.js"></script>
		<script src="static/js/jquery.placeholder.min.js"></script>
		<script src="static/js/wizard.min.js"></script>
		<script src="static/js/core.min.js"></script>	
		<script src="static/js/charts.min.js"></script>	
		<script src="static/js/custom.min.js"></script>
	<!-- end: JavaScript-->
