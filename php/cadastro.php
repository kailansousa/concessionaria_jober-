<?php 

include("conexao.php");

$nome = $_POST["nome"];
$email = $_POST["email"];
$senha = $_POST["senha"];

$sql = "INSERT INTO informacoes(nome, email, senha)
    VALUES('$nome', '$email', '$senha')";

if($conexao->query($sql) == TRUE){
    echo "<br><center><h1>Novo registro criado com sucesso</h1>";
}
else{
    echo "Error:" . $sql . "<br>" . $conexao->error;
}

mysqli_close($conexao);

?>