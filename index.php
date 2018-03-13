<?php
	session_start();
	//operador ternario  para erro se for 1 da erro se nao  é = 0
	$erro = isset($_GET['erro']) ? $_GET['erro'] :0;
	// echo $erro;

	//deslogado com sucesso

	$deslogado = isset($_GET['deslogado']) ? $_GET['deslogado'] :0;


?>
<!DOCTYPE HTML>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">

		<title>Twitter clone</title>

		<!-- jquery - link cdn -->
		<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>

		<!-- bootstrap - link cdn -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	
		<script>
			// código javascript	

			$(document).ready(function (){

				//Verificar se os campos de usuário foram devidamente preenchidos
				$('#btn_login').click(function(){

					var campo_vazio = false;
					// alert('Botão entrar foi clicado ');

					if($('#campo_usuario').val() ==   ''){
						// alert('Campo Usuario vazio , Preencha o formulário');
						$('#campo_usuario').css({'border-color' : '#a94442'});
						campo_vazio = true;

					}else{
						$('#campo_usuario').css({'border-color' : '#ccc'});
					}
					if($('#campo_senha').val() ==   ''){
						$('#campo_senha').css({'border-color' : '#a94442'});
						campo_vazio = true;

					}else{
						$('#campo_senha').css({'border-color' : '#ccc'});
					}

					if(campo_vazio){ return false;}

				});


			});

		</script>
	</head>

	<body>

		<!-- Static navbar -->
	    <nav class="navbar navbar-default navbar-static-top">
	      <div class="container">
	        <div class="navbar-header">
	          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
	            <span class="sr-only">Toggle navigation</span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	          </button>
	          <img src="imagens/icone_twitter.png" />
	        </div>
	        
	        <div id="navbar" class="navbar-collapse collapse">
	          <ul class="nav navbar-nav navbar-right">
	            <li><a href="inscrevase.php">Inscrever-se</a></li>
	            <!--TAG DE IMPRESSÃO DO PHP  abaixo  operador ternario -->
	            <li class="<?= $erro == 1 || $deslogado == 2 ? 'open' : '' ?>">
	            	<a id="entrar" data-target="#" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Entrar</a>
					<ul  class="dropdown-menu" aria-labelledby="entrar">
						<div class="col-md-12">
				    		<p>Você possui uma conta?</h3>
				    		<br />
				    		<?php
				    		if ($erro==1) {
				    			echo '<p style="color:#fff;border: 3px solid #FA8072; border-radius:5px; padding:8px;background:#E9967A;">Usuario ou Senha iválido(s)</p>';
				    		}
				    		else if($deslogado == 2){

				    			echo '<p style="color:#fff;border: 3px solid #32CD32; border-radius:5px; padding:8px;background:#00FF7F;">Deslogado com Sucesso !</p>';

				    		}
				    		?>
							<form method="post" action="validar_acesso.php" id="formLogin">
								<div class="form-group">
									<input type="text" class="form-control" id="campo_usuario" name="usuario" placeholder="Usuário" />
								</div>
								
								<div class="form-group">
									<input type="password" class="form-control red" id="campo_senha" name="senha" placeholder="Senha" />
								</div>
								
								<button type="buttom" class="btn btn-primary" id="btn_login">Entrar</button>

								<br /><br />
								
							</form>
						</form>
				  	</ul>
	            </li>
	          </ul>
	        </div><!--/.nav-collapse -->
	      </div>
	    </nav>


	    <div class="container">

	      <!-- Main component for a primary marketing message or call to action -->
	      <div class="jumbotron">
	        <h1>Bem vindo ao twitter clone</h1>
	        <p>Veja o que está acontecendo agora...</p>
	      </div>

	      <div class="clearfix"></div>
		</div>


	    </div>
	
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	
	</body>
</html>