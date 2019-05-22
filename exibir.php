<?php

require_once 'export.php';
include_once("conexao.php");
    
    if (mysqli_connect_error()) {
        trigger_error(mysqli_connect_error());
    }


    $sql = mysqli_query($conn, "SELECT *, DATE_FORMAT(dtcadastro,'%d/%m/%Y') AS diacadastro, DATE_FORMAT(dtcadastro,'%H:%i') AS horacadastro   FROM tb_usuarios LIMIT 10");
    
    $output = '
    <style>
        th{
            background-color: #DAA520;
        }
        #topo{
            background-color:#B8860B;
        }
        td{
            background-color:#E6E6FA;
            text-align: center;
        }
        *{
            text-align: center;
        }
    </style>
    <div class="container">

    <table class="table table-striped" >
        <thead>
            <tr>
                <th id="topo"  colspan="6">Dados Usuários</th>
            </tr>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Login</th>
                <th>Senha</th>
                <th>Dia Cadastro</th>
                <th>Hora Cadastro</th>
            </tr>
        </thead>
        <tbody>';

        while($dados=mysqli_fetch_assoc($sql)) {
            $output .=      '<tr>
                                <td >' .$dados['idusuario']. '</td>
                                <td >' .$dados['nome']. '</td>
                                <td >' .$dados['deslogin']. '</td>
                                <td >' .$dados['dessenha']. '</td>
                                <td >' .$dados['diacadastro']. '</td>
                                <td >' .$dados['horacadastro']. '</td>
                        </tr>';
    }

    $output .= '    </tbody>
                </table>
                </div>
                ';
               
    echo $output;
    
    
?>


