<?php 
	include('inc/cabecalho.php'); 
	include('inc/funcoes.php');
?>

<div class="container">
	<div class="row">
		<h1 class="titulo">Sobre o Algoritmo Simplex</h1>
	</div>
</div>

<?php 
	if ($_POST){
		$objetivo = $_POST['objetivo'];
		$vlr_fv	  = $_POST['vlr_fv'];
	    $vlr_r 	  = $_POST['vlr_r'];
	    $vlr_v 	  = $_POST['vlr_v'];
	    $opcao    = $_POST['opcao'];
	    $qtdv       = count($vlr_fv);
	    $qtd_itens  = count($vlr_r);
	    $qtdm       = count($objetivo);

	    // exibindo os dados
	    for ($i=0; $i<$qtdm; $i++) { 
	    	echo  "MaxMin: ".$objetivo[$i]."<br /><br />";
	    }

	    // exibindo os dados
	    for ($i=0; $i<$qtdv; $i++) {
	    	echo  "FV: ".$vlr_fv[$i]."<br /><br />";
	    }
	 
	    // exibindo os dados
	    for ($i=0; $i<$qtd_itens; $i++) {
			echo  "R1: ".$vlr_v[$i]."<br />";
			echo  "MM: ".$vlr_r[$i]."<br />";
			echo  "UL: ".$opcao[$i]."<br /><br />";
	    }
	}
?>

<br><br><br><br><br><br><br><br><br>

<?php include('inc/rodape.php'); ?>