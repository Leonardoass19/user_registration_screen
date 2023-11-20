<?php
/////BLOQUEIO PARA NÃO UTILIZAR O GET
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
//////VARIAVEIS DEACLARADAS DO HTML    
    $name = $_POST["nome"];
    $cpf = $_POST["cpf"];
    $password = $_POST["senha"];

/////INFORÇÕES DE DADOS DO BANCO  
    $serverName = "127.0.0.1";
    $userName   = "root";
    $passwordName   = "";
    $dbName     = "meu_banco";

////// Requisição de conexão com o banco    
    $conn = new mysqli($serverName, $userName, $passwordName, $dbName);

///////// TESTE DE CONEXÃO    
    if ($conn->connect_error) {
      die("Conexao falhou: " . $conn->connect_error);
    }
    
///// INSERT ( cadastro do usuario no banco)
    $sql = "INSERT INTO login (nome, cpf, senha) VALUES ('$name','$cpf','$password')";

///// VALIDAR O CADASTRO (CORRETO OU NÃO)
    if ($conn->query($sql) === TRUE) {
      echo "Cadastro Feito";
    } else {
      echo "Erro no cadastro";
    }

    $conn->close();
  }
?>