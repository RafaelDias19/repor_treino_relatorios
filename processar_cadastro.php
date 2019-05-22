<?php

include_once("conexao.php");

$nome = filter_input(INPUT_POST,'name',FILTER_SANITIZE_STRING);
$login = filter_input(INPUT_POST,'login',FILTER_SANITIZE_STRING);
$password = filter_input(INPUT_POST,'password',FILTER_SANITIZE_STRING);

/*
echo "Nome: $nome <br>";
echo "Login: $login <br>";
echo "Senha: $password <br>";
*/
$resultado = "INSERT INTO tb_usuarios (nome, deslogin, dessenha) VALUES ('$nome','$login','$password');";
$resultado_query = mysqli_query($conn,$resultado);

if(mysqli_insert_id($conn)){

    header("Location:index.php");


}else
    header("Location:index.php");
?>