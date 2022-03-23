<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
    
<head>
    <meta charset="utf-8">
    
    <title>Se Joga!</title>
    <link rel="icon" type="image/x-icon" href="assets/123.png">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link rel="stylesheet" href="style1.css">
    <style>
.alert {
  padding: 20px;
  background-color: #04AA6D;
  color: white;
  opacity: 1;
  transition: opacity 0.6s;
  margin-bottom: 15px;
}

.alert.success {background-color: #04AA6D;}
.alert.info {background-color: #2196F3;}
.alert.warning {background-color: #ff9800;}

.closebtn {
  margin-left: 15px;
  color: white;
  font-weight: bold;
  float: right;
  font-size: 22px;
  line-height: 20px;
  cursor: pointer;
  transition: 0.3s;
}

.closebtn:hover {
  color: black;
}
</style>
   
</head>
<header>
       
        <input type="checkbox" id="btn-menu">
        <label for="btn-menu">&#9776</label>
        
        <nav class="menu">
            
        <ul class="logo"><a href="index.php"><img src="assets/se joga logo3 1.png" width="150"></a></ul>
                
                <ul>
           
               
                <li><a href="vagas">Vagas</a></li>
                <li><a href="noticias">Notícias</a></li>
                <li><a href="stream">Stream</a></li>
                <li><a href="cursos">Cursos</a></li>
                <li><a href="jogos">Jogos</a></li>
                <li><a href="comunidade">Comunidade</a></li>
                
                </ul>
                <ul class="rect"></ul>
                <ul class="login"><li><a href="Login">Login</a></li></ul>
                
                


            </nav>


    </header>
<body>
    <main>

    <img class="gamerRecuperarSenha" src="assets/gamerRecuperarSenha.png"/>
    
    <div class="formLogin" style="border-radius:60px;
    border:solid;
    border-width:4px;
    border-color:#ec2044;
    background-color:white;
    width:550px;
    padding: 20px;">
    <?php
        if(isset($_SESSION['msg']))
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
        ?>
        <div style="position:relative;width:300px; text-align:center;left:130px;align-content: center;">
        <b>
            <span style ="font-size:24px;">Esqueci a <font color="#ec2044;">senha</font>
            </span><br>
            <span style ="font-size:14px;">
            <font font-size="14px">Para redefinir a senha, digite seu e-mail cadastrado em nossa plataforma</font>
            </span></b>
        </div>
        <br>
        <form action="processaRecuperarsenha.php" class="formulario" method="get">
            <div class="mb-3">
                
                <input type="text" class="formLoginInputRecupSenha" id="email" name="email">
                <label for="email" class="formLoginLabelRecupSenha">e-mail</label>
                
            </div>
            <br>
            
            <input type="submit" name="acao"  value="Redefinir senha" class="formLoginBtn" style="background:black;color:white;
            border:0px solid;border-radius: 15px;"><br>
            <a style="text-decoration:none;" href="Login">
            <input type="button" name="acao"  value="Logar" class="formLoginBtn" style="background:#ec2044;color:white;
            border:0px solid;border-radius: 15px;width:110px;left:195px;"></a>

       
        </div>
    </div>
       

    </main>
    <footer>
    <ul class="logo"><img class="union-1" src="assets/Vector.png" />
    <img class="se-joga-2022" src="assets/Se joga2022.png"/></ul>
    <div class="rodape">
                <ul>
           
                <li><a href="doar">Doar</a></li>
                <li><a href="denunciar">Denunciar</a></li>
                <li><a href="parcerias">Parcerias</a></li>
                <li><a href="SeJoga">Sobre nós</a></li>
                <li><a href="termos">Termos de uso</a></li>
                <li><a href="comunidade">Comunidade</a></li>
                <li><a href="https://www.linkedin.com/company/se-joga-garota/" target="_blank"><img class="linkedin-logo-2" src="assets/linkedin-logo 2.png" width="25"/></a></li>
                <li><a href="https://www.instagram.com/sejoga.garota/" target="_blank"><img class="instagram-2" src="assets/instagram 2.png" width="25"/></a></li>
                
                </ul>

    </div>
    </footer>
</body>

</html>