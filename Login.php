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

    <img class="flat-young-woman-pla" src="assets/flat-young-woman.png"/>
    <img class="vector-4" src="assets/Vector 4.png"/>
    
    <div class="formLogin">
    <?php
        if(isset($_SESSION['msg']))
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
        ?>
        <h1 class="por-um-universo-gamevalign-text-middle">
            <span>
            <span class="poppins-semi-bold-midnight-moss-44px">Por um </span>
            <span class="span1">universo gamer<span class="span1"> seguro</span >
            <span class="poppins-semi-bold-midnight-moss-44px"> para as minas</span>
            </span>
        </h1>
    
        <form action="logar.php" class="formulario" method="post">
            <div class="mb-3">
                
                <input type="text" class="formLoginInputE" id="email" name="email">
                <label for="email" class="formLoginLabelE">e-mail</label>
                <input type="password" class="formLoginInputS" id="senha" name="senha">
                <label for="email" class="formLoginLabelS">senha</label>
                
            </div>
            
            <a class="rotEsquecerSenha" href="recuperar-senha">Esqueceu a senha?</a>
            
            <input type="submit" name="acao"  value="Entrar" class="formLoginBtn">
            <div> <a class="rotCliqueAqui" href="Criar-conta.php">Ainda não tem conta? Clique aqui e crie uma!</a></div>

       
        </div>
    </div>
       

    </main>
    <footer>
    <ul class="logo"><img class="union-1" src="assets/Vector.png" />
    <img class="se-joga-2022" src="assets/Se joga2022.png"/></ul>
    <div class="rodape">
                <ul>
           
                <li><a href="doar.php">Doar</a></li>
                <li><a href="denunciar.php">Denunciar</a></li>
                <li><a href="parcerias.php">Parcerias</a></li>
                <li><a href="SeJoga.php">Sobre nós</a></li>
                <li><a href="termos.php">Termos de uso</a></li>
                <li><a href="comunidade.php">Comunidade</a></li>
                <li><a href="https://www.linkedin.com/company/se-joga-garota/" target="_blank"><img class="linkedin-logo-2" src="assets/linkedin-logo 2.png" width="25"/></a></li>
                <li><a href="https://www.instagram.com/sejoga.garota/" target="_blank"><img class="instagram-2" src="assets/instagram 2.png" width="25"/></a></li>
                
                </ul>

    </div>
    </footer>
</body>

</html>