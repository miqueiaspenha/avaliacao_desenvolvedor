<!DOCTYPE html>

<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title> SAD - Dashboard </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
</head>
<body>
    <div class="container">
        <div class="jumbotron">
            <h1>Painel de controle</h1>
            <h2>Bem vindo(a), <?php echo $usuario; ?></h2>
        </div>
    
    <h1>Importar dados do arquivo TXT</h1>
		
		<form method="POST" action="processa.php" enctype="multipart/form-data">
			<label>Arquivo</label>
			<input type="file" name="arquivo"><br><br>
			
			<input type="submit" value="Importar">
		</form>
        </div>
</body>
</html>