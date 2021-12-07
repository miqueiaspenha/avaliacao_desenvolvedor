<?php
session_start();

//Incluir a conexao com BD
include_once("conexao.php");

//Receber os dados do formulário
$arquivo = $_FILES['arquivo'];
// var_dump($arquivo);
$arquivo_tmp = $_FILES['arquivo']['tmp_name'];

//ler todo o arquivo para um array
$dados = file($arquivo_tmp);
// var_dump($dados);

foreach($dados as $linha){
	$linha = trim($linha);
	$valor = explode('	', $linha);
	// var_dump($valor);
	
	$comprador = $valor[0];
	$descricao = $valor[1];
	$preco = $valor[2];
	$quantidade = $valor[3];
	$endereco = $valor[4];
	$fornecedor = addslashes($valor[5]);
	
	$result_usuario = "INSERT INTO vendas (comprador, descricao, preco, quantidade, endereco, fornecedor) VALUES ('$comprador', '$descricao', '$preco', '$quantidade','$endereco', '$fornecedor')";
	
	$resultado_usuario = mysqli_query($conn, $result_usuario);	
}
$_SESSION['msg'] = "<p style='color: green;'>Carregado os dados com sucesso!</p>";
header("Location: index2.php");



