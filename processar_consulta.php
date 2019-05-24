
<?php

//include_once 'export.php';
include_once("conexao.php");
    

if(isset($_POST['mes_selecionado']) ){
    
    $mes = $_POST['mes_selecionado'];

    $sql = mysqli_query($conn, "SELECT *, DATE_FORMAT(dtcadastro,'%m') AS mescadastro, 
    DATE_FORMAT(dtcadastro,'%d/%m/%Y') AS diacadastro, DATE_FORMAT(dtcadastro,'%H:%i') AS horacadastro FROM tb_usuarios LIMIT 30");
    
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
        #header{
            display:none;
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
            if($dados['mescadastro']==$mes)
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


}

elseif(isset($_POST['dia_ini_selecionado']) && isset($_POST['dia_fin_selecionado'])){
    $dia =  $_POST['dia_ini_selecionado'];
    $dia_final =  $_POST['dia_fin_selecionado'];

    $query_dia = "SELECT *, DATE_FORMAT(dtcadastro,'%d/%m/%Y') AS diacadastro, DATE_FORMAT(dtcadastro,'%H:%i') AS horacadastro FROM tb_usuarios 
    WHERE (DATE_FORMAT(dtcadastro,'%Y-%m-%d') >= '$dia') 
    AND (DATE_FORMAT(dtcadastro,'%Y-%m-%d') <= '$dia_final')";
    
    $execute_dia = mysqli_query($conn,$query_dia);
    
    if( mysqli_num_rows($execute_dia) > 0){ 
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
        #header{
            display:none;
        }
    </style>
    
    <div class="container">
    
    <table class="table table-striped" >
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
            while($dados=mysqli_fetch_assoc($execute_dia)) {
                $output .=      '<tr>
                                    <td >' .$dados['idusuario']. '</td>
                                    <td >' .$dados['nome']. '</td>
                                    <td >' .$dados['deslogin']. '</td>
                                    <td >' .$dados['dessenha']. '</td>
                                    <td >' .$dados['diacadastro']. '</td>
                                    <td >' .$dados['horacadastro']. '</td>
                                </tr>';
            }
        } else{
            echo 'Error';
        }
        $output .= '    </tbody>
        </table>
        </div>
        ';

        echo $output;
}


    
?>

