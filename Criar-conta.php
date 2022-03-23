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
  background-color: #f44336;
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
    
    <script>
        function senhaValid()
            {
                if(document.getElementById("senha").value != document.getElementById("senha2").value){
                   
                    document.getElementById("senha2").style.background = "#ff899e";
                }else{
                    document.getElementById("senha2").style.background = "white";
                }
            
            }
        </script>


    <main>
        
    <img class="ilustraCriarConta" src="assets/5323314 1.png"/>
    <img class="faixaAzulCriarConta" src="assets/Rectangle 3620.png"/>
    <img class="faixaVermelhaCriarConta" src="assets/Rectangle 3633.png"/>
    
    
    <div class="formCriarConta" style="overflow: auto;">
    <?php
        if(isset($_SESSION['msg']))
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
        ?>
            <span>
                
            <span class="span1CriarConta">Que bom te ver como </span>
            <span class="span2CriarConta">amiga</span><span class="span1CriarConta">!</span>
            </span>
            <br><br>
            <span class="spanNota"> Para manter nossa comunidade segura, é
                preciso entrar na lista de espera ou entrar via
                convite recebido por amigue cadastrade. </span><div style="text-align: center;"> 
                <a href="listaespera.php" style="text-decoration:none;color:#ffffff;font-size: 14px;text-align: center;">  Se não tiver convite ainda <b>clique aqui!</b></a>
        </div><br>
    
        <form action="processaCadastro.php" class="formulario" method="get">
            <div class="mb-3">
                
                <label for="Convite" class="formCriarContaLabel">Convite:</label>
                <input type="text" class="formCriarContaInput" id="Convite" name="Convite">
                <span id="resultadoConvite" style="position:absolute; right:10px;font-size:10px;"></span>

                <label for="nomePreferido" class="formCriarContaLabel">Nome:</label>
                <input type="text" class="formCriarContaInput" id="nomePreferido" name="nomePreferido">
                
                <label for="nomeUser" class="formCriarContaLabel">Nome de usuária:</label>
                <input type="text" class="formCriarContaInput" id="nomeUser" name="nomeUser" onkeyup="removeEspaço()">
                <span id="resultadoUser" style="position:absolute; right:10px;font-size:10px;"></span>

                <label for="genero" class="formCriarContaLabel">Gênero:</label>
                <select id="genero" class="formCriarContaSelect" name="genero" class="formCriarContaE">>
                    <option value="MCis">Mulher Cis</option>
                    <option value="MTrans">Mulher Trans</option>
                    <option value="NBinarie">Não-Binárie</option>
                    <option value="Mu">Mulher Travesti</option>
                </select>

                <label for="pronome" class="formCriarContaLabel">Pronome preferido:</label>
                <select id="pronome" class="formCriarContaSelect" name="pronome" class="formCriarContaE">>
                    <option value="Ela/Dela">Ela/Dela</option>
                    <option value="Elu/Delu">Elu/Delu</option>
                </select>
                
                <label for="email" class="formCriarContaLabel">E-mail</label>
                <input type="email" class="formCriarContaInput" id="email" name= "email" required>
                <span id="resultadoEmail" style="position:absolute; right:10px;font-size:10px;"></span>

                <label for="senha" class="formCriarContaLabel">Senha</label>
                <input type="password" class="formCriarContaInput" id="senha" name="senha" required minlength="6">

                <label for="senha2" class="formCriarContaLabel">Confirme a senha</label>
                <input type="password" class="formCriarContaInput" id="senha2" name="senha2" required minlength="6" onkeyup="senhaValid()">
                
                
            
            
            <input type="checkbox" class="checkboxCriarConta" id="termoUsos" name="termoUsos" required>
            <label for="scales" class="TermoUso">Concordo com os <a href="termos.php" style="color: #000000;text-decoration:none"><b>termos de uso</b></a></label>
            
            <input type="submit" name="acao"  id="acao" value="Cadastrar" class="formCriarContaBtn">
            </div>
            <span class="span3LGPD">Ao criar seu perfil, você 
                estará dando consentimento para 
                o uso dos seus dados informados 
                para a plataforma Se joga! De 
                acordo com a Lei 13.709 de 2018.</span>

       
        </div>
    </div>
    <script src = "https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="ValidaEmail.js"> </script>
    <script> 
    function removeEspaço(){
        var str = document.getElementById("nomeUser").value; 
        var res = str.replace(" ", "");
        res = res.replace(",", "");
        res = res.replace(".", "");
        res = res.replace("?", "");
        res = res.replace("/", "");
        res = res.replace("*", "");
        res = res.replace("'", "");
        res = res.replace("[", "");
        res = res.replace("]", "");
        res = res.replace("{", "");
        res = res.replace("}", "");
        res = res.replace("^", "");
        res = res.replace("$", "");
        res = res.replace("~", "");
        res = res.replace("!", "");
        document.getElementById("nomeUser").value = res;
        }
    </script>
       
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