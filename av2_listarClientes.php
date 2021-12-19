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
$comandoSQL = "SELECT * from `cliente`"; //comandoSQL será responsável por guardar a chamada que insere os dados vindo do formulário no banco
$result = $conn->query($comandoSQL); //Faça uma conexão através da conexão com o mysql, utilizando o metodo query que executa comandos. Result guardará o resultado do comandoSQL

$arrClientes = array();
$x=0;
while ($linha = $result->fetch_assoc()) 
{
    $arrClientes [$x] = $linha;
    $x++;
}

$jCliente = json_encode($arrClientes , JSON_UNESCAPED_UNICODE);
echo $jCliente;
?>