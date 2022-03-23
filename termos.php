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
        .collapsible {
        background: #EC2044;
        color: white;
        cursor: pointer;
        padding: 18px;
        width: 190px;
        border: none;
        text-align: left;
        outline: none;
        font-size: 12px;
        border-radius: 40px;
        padding: 10px 10px 10px 10px;
        font-family: Poppins;
        font-style: normal;
        font-weight: 500;
        font-size: 18px;
        line-height: 97%;
        padding-left:25px;
        /* or 17px */

        display: flex;
        align-items: center;
        color: #09D69D;
        }

        .active, .collapsible:hover {
        background-color: #ff4265;
        }

        .content {
        padding: 0 18px;
        font-size: 12px;
        display: none;
        overflow: hidden;
        background-color: #f1f1f1;
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
        
    <img class="ilustraRegulamentos" src="assets/2632697 1.svg"/>
    <img class="faixaAzulRegulamentos" src="assets/rectangle.png"/>
    <img class="faixaVerdeRegulamentos" src="assets/Intersect.svg"/>
    <div class ="Regulamentos">
    
    <button type="button" class="collapsible">Para usuárias</button>
        <div class="content">
        <p>1) Somente mulheres cis, trans, não-bináries e travestis são permitidas.</p>
        <p>2) Qualquer tipo de discurso de ódio é proibido e não será tolerado, levando ao banimento da pessoa na plataforma. </p>
        <p>3) Toda a coleta de dados segue os regulamentos da LGPD.</p>
        <p>4) Não compartilhe informações de outras usuárias sem autorização prévia. Dependendo da gravidade do caso gerará advertimento ou banimento da plataforma.</p>
        <p>5) Esta é uma plataforma de apoio à outras mulheres no ambiente de jogos. Evite fazer qualquer comentário que denigra, ofenda ou negativo às membras.</p>
        <p>6) Este não é um lugar de flertes. Toda aproximação de cunho romântico ou sexual indesejado ou incômodo pode ser denunciado e a pessoa será advertida ou banida da plataforma.</p>
        <p>7) Não utilize da plataforma para criar qualquer subgrupo que não esteja relacionado a jogos, mercado de jogos, curso de jogos, streams ou eSports.</p>
        <p>8) Caso experiencie ou presencie qualquer cena de assédio ou discurso de ódio, denuncie o usuário. </p>
        
        </div>
        <br>
    <button type="button" class="collapsible">Para criadoras</button>
        <div class="content">
        <p>1) Somente mulheres cis, trans, não-bináries e travestis são permitidas.  
        </p><p>2) Não é permitido fazer qualquer comentário ou apologia ao assédio, descriminação, racismo, violência (física, moral ou psicológica), transfobia, homofobia, machismo, misoginia, ou qualquer outro tipo de agressão contra mulheres durante qualquer conteúdo futuro ou passado dos últimos 2 anos.
        </p><p>3) Não compartilhe informações ou imagem de outras usuárias sem autorização prévia. Dependendo da gravidade do caso gerará advertimento ou banimento da plataforma.
        </p><p>4) Não utilize da plataforma para publicar quaisquer conteúdos que não estejam relacionadas a jogos, mercado de jogos, curso de jogos, streams ou eSports. </p>

        
        </div>
        <br>
    <button type="button" class="collapsible">Para empresas</button>
        <div class="content">
        <p>1) Somente mulheres cis, trans, não-bináries e travestis são permitidas.  
        </p><p> 2) Não é permitido fazer qualquer comentário ou apologia ao assédio, descriminação, racismo, violência (física, moral ou psicológica), transfobia, homofobia, machismo, misoginia, ou qualquer outro tipo de agressão contra mulheres durante qualquer conteúdo futuro ou passado dos últimos 2 anos.
        </p><p> 3) Não compartilhe informações ou imagem de outras usuárias sem autorização prévia. Dependendo da gravidade do caso gerará advertimento ou banimento da plataforma.
        </p><p>  4) Não utilize da plataforma para publicar quaisquer conteúdos que não estejam relacionadas a jogos, mercado de jogos, curso de jogos, streams ou eSports. </p>

        
        </div>

    </div>
    
        
   
       
    </main>
    <script>
        var coll = document.getElementsByClassName("collapsible");
        var i;

        for (i = 0; i < coll.length; i++) {
        coll[i].addEventListener("click", function() {
            this.classList.toggle("active");
            var content = this.nextElementSibling;
            if (content.style.display === "block") {
            content.style.display = "none";
            } else {
            content.style.display = "block";
            }
        });
        }
    </script>
    <footer>
    <ul class="logo"><img class="union-1" style="position:absolute; top:25px;" src="assets/Vector.png" />
    <img class="se-joga-2022" style="position:absolute; top:50px; left:90px;" src="assets/Se joga2022.png"/></ul>
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