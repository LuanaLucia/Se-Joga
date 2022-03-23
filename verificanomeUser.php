<?php
include_once("conexao.php");
if(isset($_GET['email'])){

$email = $_GET['email'];

$query_validaEmail = "SELECT email FROM Usuarias WHERE email = '$email'";
$resultado_query = mysqli_num_rows(mysqli_query($conexao,$query_validaEmail));

if ($resultado_query){
    die('E-mail já cadastrado');
}
else{
   
}

}
if(isset($_GET['nomeUser'])){

    $nomeUser = $_GET['nomeUser'];
    
    $query_validaUser = "SELECT NomeUsuaria FROM Usuarias WHERE NomeUsuaria = '$nomeUser'";
    $resultado_query2 = mysqli_num_rows(mysqli_query($conexao,$query_validaUser));
    
    if ($resultado_query2){
        die('Nome de usuária já extiste');
    }
    else{
        
    }
    
    }

if(isset($_GET['Convite'])){

    $Convite = $_GET['Convite'];
    
    $query_validaUser = "SELECT NomeUsuaria FROM Usuarias WHERE CodConvite = '$Convite' AND ConvitesRestantes>0";
    $resultado_query2 = mysqli_num_rows(mysqli_query($conexao,$query_validaUser));
    
    if ($resultado_query2){
        die('Convite válido');
    }
    else{
        die('Convite inválido/esgotado');
    }
    
    }
