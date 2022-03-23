<?php
session_start();
include_once("conexao.php");

$numero_de_bytes = 4;

$restultado_bytes = random_bytes($numero_de_bytes);
$resultado_final = bin2hex($restultado_bytes);

if($_GET) {
  
    $email  =  utf8_decode($_GET['email']);

    $query_validaEmail = "SELECT email FROM Usuarias WHERE email = '$email'";
    $resultado_query = mysqli_num_rows(mysqli_query($conexao,$query_validaEmail));

        if ($resultado_query){
            
            $query_cadUsuaria = "UPDATE Usuarias SET Senha = md5('$resultado_final') WHERE (Email = '$email')";
            $resultado_query = mysqli_query($conexao,$query_cadUsuaria);
            
            $arquivo  ="Olá,<br>Sua nova senha de acesso é: <br>
            <br>
            <b> <font color='#ec2247'>$resultado_final</font></b>
            <br><br>
            Siga nossas redes sociais para saber mais informações
            <br><br>
            <b><font color='#ec2247'>Instagram: </font></b><a href='https://www.instagram.com/sejoga.garota/'>@sejoga.garota</a> <br>

            <b><font color='#ec2247'>Linkedin: </font></b><a href='https://www.linkedin.com/company/se-joga-garota/'>/company/se-joga-garota</a>


            <br>
            <br>";



                    // emails para quem será enviado o formulário
                    $emailenviar = $email;
                    $assunto = "Recuperar Senha";

                    // É necessário indicar que o formato do e-mail é html
                    $headers  = 'MIME-Version: 1.0' . "\r\n";
                        $headers .= 'Content-type: text/html; charset=uft-8' . "\r\n";
                        $headers .= 'From: Se Joga! <contato@sejoga.net>';

                    if(!mail($emailenviar, $assunto, $arquivo, $headers ,"-r"."contato@sejoga.net")){ // Se for Postfix
                      $headers .= "Return-Path: " . "contato@sejoga.net" . "\n"; // Se "não for Postfix"
                      mail($emailenviar, $assunto, $arquivo, $headers );
                  }

                  $_SESSION['msg'] ='<div class="alert">
                  <span class="closebtn">&times;</span>  
                  <strong>E-mail de recuperação de senha enviado! </strong>
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
        }else{
            $_SESSION['msg'] ='<div class="alert">
                  <span class="closebtn">&times;</span>  
                  <strong>E-mail não cadastrado! </strong>
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
                  header('Location: recuperar-senha.php');
        }
        
}

?>