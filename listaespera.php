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
           
               
                <li><a href="vagas.php">Vagas</a></li>
                <li><a href="noticias.php">Notícias</a></li>
                <li><a href="stream.php">Stream</a></li>
                <li><a href="cursos.php">Cursos</a></li>
                <li><a href="jogo.php">Jogos</a></li>
                <li><a href="comunidade.php">Comunidade</a></li>
                
                </ul>
                <ul class="rect"></ul>
                <ul class="login"><li><a href="Login.php">Login</a></li></ul>
                
                


            </nav>


    </header>
<body>
    
    <main>
        
    <img class="ilustraCriarConta" src="assets/5323314 1.png"/>
    <img class="faixaAzulCriarConta" src="assets/Rectangle 3620.png"/>
    <img class="faixaVermelhaCriarConta" src="assets/Rectangle 3633.png"/>
    
    
    <div class="formCriarConta" style="overflow: auto; width:500px;">
    <?php
        if(isset($_SESSION['msg']))
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
        ?>
            <span>
                
            <span class="span2CriarConta"style="left:0px;"style="width:700px;"><span class="span1CriarConta"style="left:0px;"style="width:700px;">Quer se juntar, mas ainda não tem <font style="color:#f44336;"> convite</font>?</span>
            
            </span>
            <p>
            <span class="spanNota"> Cadastre-se na lista de espera!</span><p>

    
        <form action="processalistaespera.php" class="formulario" method="get">
            <div class="mb-3">

                <label for="nomePreferido" class="formCriarContaLabel">Nome:</label>
                <input type="text" class="formCriarContaInput" id="nomePreferido" name="nomePreferido" required>
                
                <label for="email" class="formCriarContaLabel">E-mail</label>
                <input type="email" class="formCriarContaInput" id="email" name= "email" required>
                <span id="resultadoEmail" style="position:absolute; right:10px;font-size:10px;"></span>
                  
        
            
            <input type="submit" name="acao"  id="acao" value="Solicitar convite" class="formCriarContaBtn" style="width:200px;">
            </div>

       
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