<?php

if (isset($_POST['nome'])) {
  print_name($_POST['nome'], $_POST['message'], $_POST['cmbitens']);
  
  
}
else {
  print_form();
}

function print_name($nome, $message, $cmbitens) {
 
  echo '<b>Nome:</b>  '. htmlentities($nome) .'<br/>';
  echo '<b>Sexo:</b>  ' .htmlentities($cmbitens).'<br/>';
  echo '<b>Comentarios:</b>  '. htmlentities($message);
 
}


function print_form() {
  echo '
  
  <head>
        <title>Minha primeira tela</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
	<body>
		<h1>Este é um grande cabeçalho</h1>
        
        <h4>E este aqui é um pequeno cabeçalho</h4>
        
        <p>Aqui eu coloquei um parágrafo com algum texto aleatório, e a seguir vou inserir um formulário dentro de uma tabela. Além disso, aqui vai um link: <a href="http://icomp.ufam.edu.br/david">http://icomp.ufam.edu.br/david</a></p>
        <a href="http://icomp.ufam.edu.br/david"></a>
    
		<div id="formulario">
  
  
    <form name="form1" method="post" action="">
	<table>
	
				<tr>
				
				<td><label for="nome">Seu Nome</label></td>
				<td><input type="text" name="nome" id="textfield" placeholder="Insira o nome"><br></td> 
				</tr>
		
				<tr>
				<td>Seu Sexo</td>
				<td>
				<select name="cmbitens">
				<option value="Feminino">Feminino</option>
				<option value="Masculino">Masculino</option>
				</select>
				</td>
				</tr>
				
				
				<tr>
				<td>Seus Comentários</td>
				<td><textarea name="message" rows="3" cols="50" placeholder="Insira seus comentários"></textarea></td> 
				</tr>
			
			
				  
			</table>
			
			 <p><label><input type="submit" name="button" id="button" value="Submit"></label></p>
  </form>
  </body>
  
  
  
  
  ';
}
?>