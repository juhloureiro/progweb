<?php
	session_start();
	if(!isset($_SESSION['login-prog-web'])){
		header("location: index.php");
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset = "UTF-8" />
	<title>Minha primeira p�gina</title> 
</head> 
	<body>
		<h1>Este � um grande cabe�alho</h1>
		<h2>E este aqui � um pequeno cabe�alho</h2>
		<p>
		Aqui eu colocarei um paragrafo com texto aleat�rio, e a seguir vou inserir um formul�rio dentro da tabela. Al�m disso aqui vai um link: <a href="http://icomp.ufam.edu.br/">http://icomp.ufam.edu.br/. </a>
		</p>
		<div id="contact-form">
			<form id="contact" method="POST" action="script.php">
				Nome: <input type="text" name="nome" id="nome"/> <br/> <br/>
				Sexo: <select name="sexo" id="area">
						<option value="1">Feminino</option>
						<option value="2">Masculino</option>
					  </select> <br/> <br/>

				Coment�rios: <br/> <textarea name="message" rows="4" cols="50"></textarea> <br/>
				<br/><br/>
				<input type="submit" name="submit" id="submit" value="Enviar" >
			</form>
		</div>
	</body>
</html>