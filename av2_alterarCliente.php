<?php
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
		 
}
if ($_SERVER["REQUEST_METHOD"] == "GET")
	{	
		$id = $_GET["id"];
		
		$comandoSQL = "SELECT * FROM `cliente` where id='$id' "; //comandoSQL será responsável por guardar a chamada que insere os dados vindo do formulário no banco
		$result = $conn->query($comandoSQL); //Faça uma conexão através da conexão com o mysql, utilizando o metodo query que executa comandos. Result guardará o resultado do comandoSQL

		$jCliente = json_encode($result , JSON_UNESCAPED_UNICODE);
		echo $jCliente;
	}
	
elseif($_SERVER["REQUEST_METHOD"] == "POST")
	{
		$nome  = $_GET["nome"];
		$endereco = $_GET["endereco"];
		$pcode = $_GET["pcode"];
		$pais  = $_GET["pais"];
		$cpf = $_GET["cpf"];
		$passaporte= $_GET["passaporte"];
		$email = $_GET["email"];
		$data= $_GET["data"];
		
		$comandoSQL = "UPDATE `cliente` SET `nome`='$nome',`endereco`='$endereco',`postalCode`='$pcode',`pais`='$pais',`cpf`='$cpf',`passaporte`='$passaporte',`email`='$email',`dataNascimento`='$data' WHERE id = $id";
		$resultado = $conn->query($comandoSQL);
		
		$jCliente = json_encode($resultado , JSON_UNESCAPED_UNICODE);
		echo $jCliente;
	}
?>