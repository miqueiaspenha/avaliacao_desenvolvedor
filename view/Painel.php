<!DOCTYPE html>

<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title> SAD - Dashboard </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
</head>
<body>    
    <div class="container my-5">
    <div class="row p-4 pb-0 pe-lg-0 pt-lg-5 align-items-center rounded-3 border shadow-lg">
      <div class="col-lg-7 p-3 p-lg-5 pt-lg-3" style="margin-top: 10%;">
      <h2>Bem vindo(a), <?php echo $usuario; ?></h2>  
        <h1 class="display-4 fw-bold lh-1">Importe os dados do arquivo .TXT</h1>
        <p class="lead">Selecione um arquico para que seus dados sejam importados para o banco de dados. Logo após a importação você poderá visualizar os registros.</p>
        <div class="d-grid gap-2 d-md-flex justify-content-md-start mb-4 mb-lg-3">
        <form method="POST" action="processa.php" enctype="multipart/form-data">
			<label>Arquivo</label>
			<input type="file" name="arquivo"><br><br>
			
			<input class="w-100 btn btn-lg btn-primary" type="submit" value="Importar">
		</form>
        </div>
      </div>
      <div class="col-lg-4 offset-lg-1 p-0 overflow-hidden shadow-lg">
          <img class="rounded-lg-3" src="bootstrap-docs.png" alt="" width="720">
      </div>
    </div>
  </div>        
</body>
</html>