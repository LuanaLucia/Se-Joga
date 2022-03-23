<?php
session_start();
include('conexao.php');

if(empty($_POST['email'])|| empty($_POST['senha'])){
    header('Location: login.php');
    exit(); 
}

$user = mysqli_real_escape_string($conexao,$_POST['email']);
$pass = mysqli_real_escape_string($conexao,$_POST['senha']);

$query = "select * from Usuarias where Email = '{$user}' and senha = md5('{$pass}')";

$result = mysqli_query($conexao,$query);
$row = mysqli_num_rows($result);
$linha = mysqli_fetch_assoc($result);

if($row==1){
    $_SESSION['usuario'] = $user;
    $_SESSION['dados'] = $linha;
    header('Location: vagas.php');
    exit();
}else{$_SESSION['msg'] ='<div class="alert">
    <span class="closebtn">&times;</span>  
    <strong>Senha / e-mail incorretos! </strong>
  </div><script>
  var close = document.getElementsByClassName("closebtn");
  var i;
  
  for (i = 0; i < close.length; i++) {
    close[i].onclick = function(){
      var div = this.parentElement;
      div.style.opacity = "0";
      setTimeout(function(){ div.style.display = "none"; }, 6);
    }
  }
  </script>';
    header('Location: Login.php');
    exit();
}

