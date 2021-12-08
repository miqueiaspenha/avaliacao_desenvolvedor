<?php
include_once("conexao.php");
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="utf-8">
	<title>Mostrando Registros do Banco</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>

	<?php
		if(isset($_SESSION['msg'])){
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
		}
		
		//Receber o número da página
		$pagina_atual = filter_input(INPUT_GET,'pagina', FILTER_SANITIZE_NUMBER_INT);		
		$pagina = (!empty($pagina_atual)) ? $pagina_atual : 1;
		
		//Setar a quantidade de itens por pagina
		$qnt_result_pg = 50;
		
		//calcular o inicio visualização
		$inicio = ($qnt_result_pg * $pagina) - $qnt_result_pg;
		
		$result_vendas = "SELECT * FROM vendas LIMIT $inicio, $qnt_result_pg";
		$resultado_vendas = mysqli_query($conn, $result_vendas);
			
echo '<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>';		
echo '<div class="container">';				
echo "<table  border='1' class='table caption-top'>
<caption>Tabela de vendas</caption>
<tr>
<th scope='col'>Comprador</th>
<th scope='col'>Descricao</th>
<th scope='col'>Preco</th>
<th scope='col'>Qtd</th>
<th scope='col'>Endereco</th>
<th scope='col'>Fornecedor</th>
</tr>";

while($row_venda = mysqli_fetch_array($resultado_vendas))
{
echo "<tr>";
echo "<td>" . $row_venda['comprador'] . "</td>";
echo "<td>" . $row_venda['descricao'] . "</td>";
echo "<td class='valor-calculado' >" . $row_venda['preco'] . "</td>";
echo "<td>" . $row_venda['quantidade'] . "</td>";
echo "<td>" . $row_venda['endereco'] . "</td>";
echo "<td>" . $row_venda['fornecedor'] . "</td>";
echo "</tr>";
}
echo "</table>";
echo '</div>';		
?>
	<div class="container">
		<table class='table caption-top'>
			<caption>Tabela de vendas</caption>
			<tr>
				<th scope='col'> Receitas </th>
				<th scope='col'>
					<div id="qtdtotal">
					
				</th>
				<th scope='col'></div></th>
				<th scope='col'></th>
				<th scope='col'></th>
				<th scope='col'></th>
			</tr>
		</table>
		<div class="col-12" style="text-align:left; margin-top:5%">
			<a href="index.php?pagina=painel" type="button" class="btn btn-primary">INCLUIR MAIS UM ARQUIVO</a>
		</div>
	</div>


	<script>
		$(function () {

			var valorCalculado = 0;

			$(".valor-calculado").each(function () {
				valorCalculado += parseInt($(this).text());
			});
			$("#qtdtotal").text("R$ "+ valorCalculado );
			

		});
	</script>
</body>

</html>