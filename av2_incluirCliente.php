<?php
	//como o dado sempre vai chegar por get, nao precisa verificar o método
	//nome endereco pcode pais cpf passaporte email data
	
	$nome  = $_GET["nome"];
    $endereco = $_GET["endereco"];
	$pcode = $_GET["pcode"];
	$pais  = $_GET["pais"];
    $cpf = $_GET["cpf"];
	$passaporte= $_GET["passaporte"];
	$email = $_GET["email"];
	$data= $_GET["data"];
	
	//echo "Pergunta: " . $pergunta . "<br>";
	//echo "Pontos: " . $pontos . "<br>";
	//echo "grauDificuldade: " . $dificuldade . "<br>";
	
	//estabelecendo a conexão
	//criando um conjunto de variáveis 
	$servidor = "localhost"; //indicando onde está o banco
	$usuario = "root"; //definindo quem vai acessar o banco
	$senha = ""; // indicando que o banco nao tem senha
	$nomeBanco = "faeterj3dawav2"; //indicando o nome do banco
	 
	//criando a conexão
	$conn = new mysqli($servidor, $usuario, $senha, $nomeBanco);
	if ($conn -> connect_error) //se a conexão der erro
	{
		die ("conexão com erro: " .$conn->connect_error); //vai aparecer uma mensagem de erro dizendo qual foi este erro
		 
	} //nome endereco pcode pais cpf passaporte email data
	$comandoSQL = "INSERT INTO `cliente`(`nome`, `endereco`, `postalCode`, `pais`, `cpf`, `passaporte`, `email`, `dataNascimento`) VALUES ('$nome','$endereco','$pcode','$pais','$cpf','$passaporte','$email','$data')"; //comandoSQL será responsável por guardar a chamada que insere os dados vindo do formulário no banco
	$result = $conn->query($comandoSQL); //Faça uma conexão através da conexão com o mysql, utilizando o metodo query que executa comandos. Result guardará o resultado do comandoSQL
	
	//echo $comandoSQL;
	
	//$sucesso = "Pergunta inserida com sucesso!";
	
	$comandoSQL = "SELECT * from `cliente` where nome='$nome'";
	// top 1* traz uma pergunta 
	$result = $conn->query($comandoSQL);
	
	$jCliente = json_encode($result);
	
	 //JSON: "pergunta":"Quando o brasil foi descoberto ?","pontos":"3","dificuldade":"média"
	 //$resposta = "{\"pergunta\":\"$pergunta\",\"pontos\":\"$pontos\",\"dificuldade\":\"$dificuldade\"}";
	 //$resposta2 = "{\"pergunta\":\"" . $pergunta . "\",\"pontos\":\"" . $pontos . "\",\"grau\":\"" . $dificuldade . "\"}";
	
	echo $jCliente;
	
?>