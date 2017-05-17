<?php 
	include('inc/cabecalho.php'); 
	include('inc/funcoes.php');
?>

<div class="container">
	<div class="row">
		<h1 class="titulo">Algoritmo Simplex</h1>
	</div>
</div>

<div class="container">
	<div class="row">
		<form action="" method="POST" role="form">
			<div class="form-group col-sm-offset-4 col-sm-4">
				<label for="">Quantas variáveis?</label>
				<input type="number" class="form-control" name="variavel" id="variavel" 
				value="1" placeholder="Digite Variáveis" required="required">
				<label for="">Quantas restrições?</label>
				<input type="number" class="form-control" name="restricao" id="restricao" 
				value="1" placeholder="Digite Restrições" required="required">
			</div>
			<div class="botao col-sm-offset-4 col-sm-4">
				<button type="button" class="btn btn-primary scrollSuave" id="add_field" href="#container">Continuar</button>
			</div>
		</form>
	</div>
</div>

<div class="container">
<form action="tab.php" method="POST" role="form" id="container"><br><br><br><br><br><br></form></div>

<?php include('inc/rodape.php'); ?>