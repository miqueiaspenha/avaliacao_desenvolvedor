<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
		<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <title>SAD - Importar TXT</title>
	</head>
	<body style="text-align: center; margin-top: 200px;">
		<h1>Importar dados do arquivo .TXT</h1>
		<?php
		if(isset($_SESSION['msg'])){
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
		}
		?>	
        <div class="row" style="margin-top: 10%;">
        <div class="col-6" style="padding-left: 25%;">
        <a href="index.php?pagina=painel" type="button" class="btn btn-primary">INCLUIR ARQUIVO</a>
        </div>
        <div class="col-6" style="padding-right: 25%;">
        <button href="" type="button" class="btn btn-success">MOSTRAR DADOS</button>
        </div>
      </div>	
	</body>
</html>