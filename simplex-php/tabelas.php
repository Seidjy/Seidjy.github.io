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
	<section>
		<table class="table table-bordered table-hover">
			<thead>
				<tr>
					<th class="linha-z">Z</th>
					<th>X1</th>
					<th>X2</th>
					<th>F1</th>
					<th>F2</th>
					<th>F3</th>
					<th>LD</th>
				</tr>
			</thead>
			<tbody>
				<tr class="linha-z">
					<td>1</td>
					<td>-3</td>
					<td>-5</td>
					<td>0</td>
					<td>0</td>
					<td>0</td>
					<td>0</td>
				</tr>
				<tr>
					<td class="linha-z">L1</td>
					<td>2</td>
					<td>4</td>
					<td>1</td>
					<td>0</td>
					<td>0</td>
					<td>10</td>
				</tr>
				<tr>
					<td class="linha-z">L2</td>
					<td>6</td>
					<td>1</td>
					<td>0</td>
					<td>1</td>
					<td>0</td>
					<td>20</td>
				</tr>
				<tr>
					<td class="linha-z">L3</td>
					<td>1</td>
					<td>-1</td>
					<td>0</td>
					<td>0</td>
					<td>1</td>
					<td>30</td>
				</tr>
			</tbody>
		</table>
	</section>

	<div class="conteudo">
		<p>A Coluna Pivo é a: X2</p><br>
		<p>A Linha Pivo é a: L1</p><br>
		<p>O Elemento Pivo é o: 4</p>
	</div>

	<section>
		<table class="table table-bordered table-hover">
			<thead>
				<tr>
					<th class="linha-z">Z</th>
					<th>X1</th>
					<th>X2</th>
					<th>F1</th>
					<th>F2</th>
					<th>F3</th>
					<th>LD</th>
				</tr>
			</thead>
			<tbody>
				<tr class="linha-z">
					<td class="linha-z">1</td>
					<td>-0.5</td>
					<td>0</td>
					<td>1.25</td>
					<td>0</td>
					<td>0</td>
					<td>12.5</td>
				</tr>
				<tr>
					<td class="linha-z">L1</td>
					<td>0.5</td>
					<td>1</td>
					<td>0.25</td>
					<td>0</td>
					<td>0</td>
					<td>2.5</td>
				</tr>
				<tr>
					<td class="linha-z">L2</td>
					<td>5.5</td>
					<td>0</td>
					<td>-0.25</td>
					<td>1</td>
					<td>0</td>
					<td>17.5</td>
				</tr>
				<tr>
					<td class="linha-z">L3</td>
					<td>1.5</td>
					<td>0</td>
					<td>0.25</td>
					<td>0</td>
					<td>1</td>
					<td>32.5</td>
				</tr>
			</tbody>
		</table>
	</section>

	<div class="conteudo">
		<p>A Coluna Pivo é a: X1</p><br>
		<p>A Linha Pivo é a: L2</p><br>
		<p>O Elemento Pivo é o: 5.5</p>
	</div>

	<section>
		<table class="table table-bordered table-hover">
			<thead>
				<tr>
					<th class="linha-z">Z</th>
					<th>X1</th>
					<th>X2</th>
					<th>F1</th>
					<th>F2</th>
					<th>F3</th>
					<th>LD</th>
				</tr>
			</thead>
			<tbody>
				<tr class="linha-z">
					<td>1</td>
					<td>0</td>
					<td>0</td>
					<td>1.227</td>
					<td>0.091</td>
					<td>0</td>
					<td>14.09</td>
				</tr>
				<tr>
					<td class="linha-z">L1</td>
					<td>0</td>
					<td>1</td>
					<td>0.273</td>
					<td>-0.091</td>
					<td>0</td>
					<td>0.91</td>
				</tr>
				<tr>
					<td class="linha-z">L2</td>
					<td>1</td>
					<td>0</td>
					<td>-0.045</td>
					<td>0.182</td>
					<td>0</td>
					<td>3.18</td>
				</tr>
				<tr>
					<td class="linha-z">L3</td>
					<td>0</td>
					<td>0</td>
					<td>0.318</td>
					<td>-0.273</td>
					<td>1</td>
					<td>27.73</td>
				</tr>
			</tbody>
		</table>
	</section>
</div>

<div class="container">
	<div class="conteudo">
		<p class="z text-info">Max Z = 14.09 - Resultado Ótimo</p><br>
		<p>X1    = 3.18</p><br>
		<p>X2    = 0.91</p><br>
		<p>F1    = 0</p><br>
		<p>F2    = 0</p><br>
		<p>F3    = 27.73</p>
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="botao col-sm-offset-4 col-sm-4">
			<button type="button" class="btn btn-primary">Voltar ao Inicio</button>
		</div>
	</div>
</div>

<br>
<br>

<?php include('inc/rodape.php'); ?>