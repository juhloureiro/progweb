<?php 
	
	$nome = $_GET['nome'];
	$sexo = $_GET['sexo'];
	$message = $_GET['message'];
	
	echo "<b>Nome:</b>".$nome." <br>";
	
	if($sexo == "1"){
		echo "<b>Sexo:</b> Feminino <br>";
	}else if ($sexo == "2"){
		echo "<b>Sexo:</b> Masculino <br>";
	}
	
	echo "<b>Comentario:</b> ".$message." <br>";
?>