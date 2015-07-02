<?php 
	$nome = $_GET['nome'];
	$sexo = $_GET['sexo'];
	$message = $_GET['message'];
	
	echo "<b>Nome:</b>".$nome." <br>";
	
	if($sexo == "1"){
		echo "<b>Sexo:</b> Feminino </br>";
	}else if ($sexo == "2"){
		echo "<b>Sexo:</b> Masculino </br>";
	}
	
	echo "<b>Comentario: </b>".$message." </br>";
	
	$conexão = mysql_connect("localhost", "root", "") or print (mysql_error());
	mysql_select_db("progweb", $conexão) or print(mysql_error());
		
	$sql = "INSERT INTO pessoa VALUES ('NULL','".$nome."','".$sexo."','".$message."')";
	$result = mysql_query($sql, $conexão) or die (mysql_error());
	
	if ($result === TRUE) {
	
	echo "<br><b>Inserido com sucesso!</b>.<br/><br/>";
	
	$select = "SELECT * FROM pessoa;";
	$results = mysql_query ($select, $conexão);
	
	echo "<table border=1>";
	echo "<tr><th>ID</th><th>Nome</th><th>Sexo</th><th>Comentario</th>";
	
	$row = mysql_fetch_row($results);
	
	do {
	echo "<tr><td>{$row[0]}</td>";
	echo "<td>{$row[1]}</td>";
	
	if($row[2] == 1){
		echo "<td>Feminino</td>";
	}else if($row[2] == 2){
		echo "<td>Masculino</td>";
	}
	
	echo "<td>{$row[3]}</td></tr>";
	
	$row = mysql_fetch_row($results);
	
	} while ($row);
	echo "</table>";
	
		
	} else {
	    echo "Falhou!" ;
	}
	
	mysql_close($conexão);
?>