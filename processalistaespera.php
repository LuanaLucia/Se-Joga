<?php
session_start();
include_once("conexao.php");


if($_GET) {
  
    $nome       =  $_GET['nomePreferido'];
    $email          =  $_GET['email'];

    
              $query_cadUsuaria = "INSERT INTO listaEspera (Nome, email) VALUES ('$nome', '$email')";
              $resultado_query = mysqli_query($conexao,$query_cadUsuaria);
              
              $_SESSION['msg'] ='<div class="alert">
              <span class="closebtn">&times;</span>  
              <strong>Solicitação enviada! </strong>
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
              header("Location: listaespera.php");
}