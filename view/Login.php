
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>SAD - Sistema de Avaliação do Desenvolvedor</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/sign-in/">

    <!-- Bootstrap core CSS -->
    <link href="./css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="./css/signin.css" rel="stylesheet">
  </head>

  <body class="text-center">
  <div class="global">
			<!-- Aqui temos o formulário
				*Action é vazia por que vamos fazer a validação e o redirecionamento nesta mesma página.
			-->
			<form name="" method="post" action="">
      <h1 class="h3 mb-3 font-weight-normal">Preencha os dados corretamente:</h1>
      <label for="inputEmail" class="sr-only">Usuário</label>
      <input type="text" name="user" id="inputEmail" class="form-control" placeholder="Usuário" required autofocus>
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" name="pass" id="inputPassword" class="form-control" placeholder="Password" required>
      <div class="checkbox mb-3">
      </br>
      </div>

			<input class="btn btn-lg btn-primary btn-block" type="submit" name="submit" value="Logar!" />
			</form>
			<?php
				/* Declaração de Variáveis */
				$user = @$_REQUEST['user'];
				$pass = @$_REQUEST['pass'];
				$submit = @$_REQUEST['submit'];
				
				/* Declaração das variáveis que possuem os usuarios e as senhas */
				$user1 = 'sad';
				$pass1 = 'sad';			
				
				
				/* Testa se o botão submit foi ativado */
				if($submit){
					
					/* Se o campo usuário ou senha estiverem vazios geramos um alerta */
					if($user == "" || $pass == ""){
						echo "<script:alert('Por favor, preencha todos os campos!');</script>";
					}
					/* Caso o campo usuario e senha não 
						*estejam vazios vamos testar se o usuário e a senha batem 
					*iniciamos uma sessão e redirecionamos o usuário para o painel */
					else{
						if(($user == $user1 && $pass == $pass1) || ($user == $user2 && $pass == $pass2)){
							session_start();
							$_SESSION['usuario']=$user;
							$_SESSION['senha']=$pass;
							header("Location: ?pagina=painel");
						}
						/* Se o usuario ou a senha não batem alertamos o usuario */
						else{
							echo "<script>alert('Usuário e/ou senha inválido(s), Tente novamente!');</script>";
						}
					}
				}
			?>
		</div>
  </body>
</html>
