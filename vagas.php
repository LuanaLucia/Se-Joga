<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
    
<head>
    <meta charset="utf-8">
    
    <title>Se Joga!</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="stylePainel.css">

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
    <main style="background-color: #ffffff;min-height: 75vh;">
    
    <div id="id01" class="w3-modal" >
    <div class="w3-modal-content" style="border-radius: 20px; background-color:#83E8CB;">
      <div class="w3-container">
        <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-display-topright">&times;</span>
        <p><h1>ENGENHEIRA DE SOFTWARE BACKEND SÊNIOR JAVA</h1></p>
        <p><h2>Quem somos?</h2></p>

            Pipa Studios é líder no segmento de Bingo Social na América do Sul e atua no desenvolvimento de jogos mobile desde 2012. Nossa base está em São Paulo, Brasil, e atuamos de forma global marcando presença nos mercados do México, Espanha, Itália, França e USA.

            O portfólio de jogos é diverso e inclui o best-seller Praia Bingo. Somos uma das maiores empresas de jogos do Brasil e seguimos crescendo com novos produtos e ideias. Alcançamos esse sucesso por sermos um grupo de pessoas ágeis, criativas, inquietas, inovadoras e talentosas com objetivos grandiosos.

            <p><h2>A nossa proposta:</h2></p>


            Nossos serviços atendem mais de 5 mil requisições por segundo e nós esperamos que este número siga crescendo. O time de engenharia é responsável por implementar novos projetos que sirvam nossa visão de negócio e buscar soluções rápidas para situações que podem impactar na experiência do jogador. 

            Buscamos pessoas com sólida base técnica de programação, conhecimento em desenvolvimento de sistemas e que gostam de resolver problemas. Aqui na Pipa é fundamental ter habilidade de comunicação e resiliência emocional, pois os nossos desafios e códigos são tão grandiosos quanto a nossa sede de crescer. Seguem abaixo algumas das principais responsabilidades do Engenheiro(a) de Software Backend:</p>
            <br>- Desenvolvimento do ambiente servidor de jogos multiplayer e aplicações remotas com foco em performance, confiabilidade, escalabilidade e segurança
            <br>- Desenvolvimento de processos de qualidade e integração com serviços remotos e APIs
            <br>- Desenvolvimento de sistemas e relatórios de inteligência de negócio e análise de dados
            <br>
            <br>
            <p><h2>Habilidades sociais:</h2></p>

            Os Pipeiros são o nosso maior ativo e por isso valorizamos as habilidades sociais que reforçam a importância de saber trabalhar com outras pessoas na criação de um ambiente criativo e leve, mas ao mesmo tempo de alta performance. As principais características esperadas dos nossos profissionais são: Criatividade, Comunicação, Resiliência Emocional e Mentalidade de Crescimento

            <p><h2>Habilidades técnicas:</h2></p>
            - 5+ anos de experiência profissional em Java, C# e/ou em desenvolvimento backend
            <br>- Graduação em Ciência da Computação, Engenharia da Computação ou equivalente
            <br>- Excelente capacidade de abstração, análise e solução de problemas
            <br>- Conhecimento de boa parte da stack: Spring, Maven, Git, Linux, Apache Web Server e Tomcat, MySQL, gRPC, AWS
            <br>- Conhecimento básico de redes e infraestrutura de servers
            <br>- Experiência com testes automatizados (testes unitários e de integração)
            <br>
            <p><h2>Requisitos adicionais:</h2></p>
            - Inglês Avançado
            <br>- Experiência com ferramentas e procedimentos de devops e em soluções AWS Cloud (RDS Aurora, DynamoDB, EC2, S3)
            <p><h2>Benefícios:</h2></p>

            Salário à combinar
            <br>- Horário flexível
            <br>- Flexibilidade de férias
            <br>- Política de estudo
            <br>- Auxílio Home Office
            <br>- Política de bônus baseada no desempenho da empresa + performance
                        <br><br><br>
                        <p class="card-text"><button onclick="window.location.href='https://www.pipastudios.com/jobs-engenheiro-de-software-backend-senior-java/'" style="background-color: #EC2044;border-radius: 20px; color:#000000;border:0px;width: 80px;height: 40px;">Aplicar</button></p>
                        <br><br><br>

            </div>
                </div>
              </div>



    <div id="id02" class="w3-modal" >
      <div class="w3-modal-content" style="border-radius: 20px; background-color:#7ED4FC;;">
      <div class="w3-container">
        <span onclick="document.getElementById('id02').style.display='none'" class="w3-button w3-display-topright">&times;</span>
        <p><h1>DESENVOLVEDORA UNITY SÊNIOR</h1></p>
        <p><h2>Quem somos?</h2></p>

            Pipa Studios é líder no segmento de Bingo Social na América do Sul e atua no desenvolvimento de jogos mobile desde 2012. Nossa base está em São Paulo, Brasil, e atuamos de forma global marcando presença nos mercados do México, Espanha, Itália, França e USA.

            O portfólio de jogos é diverso e inclui o best-seller Praia Bingo. Somos uma das maiores empresas de jogos do Brasil e seguimos crescendo com novos produtos e ideias. Alcançamos esse sucesso por sermos um grupo de pessoas ágeis, criativas, inquietas, inovadoras e talentosas com objetivos grandiosos.

            <p><h2>A nossa proposta:</h2></p>


            Faça parte de uma equipe com muita energia e com sede de aprendizado. Você vai interagir com pessoas dinâmicas que sempre buscam excelência e terá voz em decisões chave sobre tecnologia e estruturas de desenvolvimento dos jogos da Pipa. Trabalhamos com a mente aberta para inovações e buscamos pessoas que estão sempre prontas para contribuir com o crescimento de todo o time e do negócio, tendo como principais responsabilidades:
            
            - Atuar como peça fundamental no desenvolvimento dos nossos jogos em Unity
            <br>- Se envolver no processo de produção de ponta a ponta
            <br>- Desenvolver e dar suporte à engine de jogos
            <br>- Criar e programar estruturas que conectam animações e objetos de jogo
            <br>- Ajustes em performance para mobile (debug e profiling)
            <br>- Demonstrar atitude e proatividade
            <br>- Ter habilidade de aprendizagem rápida em situações nunca vividas antes
            <br>- Entregar resultados no prazo e com qualidade
            <br>- Ter interesse em compreender a operação da Pipa e se tornar capaz de identificar falhas de processo e oportunidades de melhoria
            <br>
            <p><h2>Habilidades sociais:</h2></p>

            Os Pipeiros são o nosso maior ativo e por isso valorizamos as habilidades sociais que reforçam a importância de saber trabalhar com outras pessoas na criação de um ambiente criativo e leve, mas ao mesmo tempo de alta performance. As principais características esperadas dos nossos profissionais são: Criatividade, Comunicação, Resiliência Emocional e Mentalidade de Crescimento

            <p><h2>Habilidades técnicas:</h2></p>
            5+ anos experiência com Unity3D
            <br>- 5+ anos de experiência com programação (C#, C++, Objective-C, java, ActionScript3, python)
            <br>- 4+ anos de experiência com engine de games (Flash, Unity3D, Unreal)
            <br>

            <p><h2>Requisitos adicionais:</h2></p>
            - Inglês Avançado
            <br>- Conhecimento de exportação mobile Google Play e App Store (plus)
            <br>- Experiência com desenvolvimento 2D no Unity – Canvas, Unity UI (plus)
            <br>
            <p><h2>Benefícios:</h2></p>

            Salário à combinar
            <br>- Horário flexível
            <br>- Flexibilidade de férias
            <br>- Política de estudo
            <br>- Auxílio Home Office
            <br>- Política de bônus baseada no desempenho da empresa + performance
                        <br><br><br>
                        <p class="card-text"><button onclick="window.location.href='https://www.pipastudios.com/jobs-desenvolvedora-unity-senior/'" style="background-color: #EC2044;border-radius: 20px; color:#000000;border:0px;width: 80px;height: 40px;">Aplicar</button></p>
                        <br><br><br>

            </div>
                </div>
      </div>

  <div id="id03" class="w3-modal" >
    <div class="w3-modal-content" style="border-radius: 20px; background-color:#83E8CB;">
      <div class="w3-container">
        <span onclick="document.getElementById('id03').style.display='none'" class="w3-button w3-display-topright">&times;</span>
        <p><h1>ENGENHEIRA DE SOFTWARE BACKEND .NET SÊNIOR</h1></p>
        <p><h2>Quem somos?</h2></p>

            Pipa Studios é líder no segmento de Bingo Social na América do Sul e atua no desenvolvimento de jogos mobile desde 2012. Nossa base está em São Paulo, Brasil, e atuamos de forma global marcando presença nos mercados do México, Espanha, Itália, França e USA.

            O portfólio de jogos é diverso e inclui o best-seller Praia Bingo. Somos uma das maiores empresas de jogos do Brasil e seguimos crescendo com novos produtos e ideias. Alcançamos esse sucesso por sermos um grupo de pessoas ágeis, criativas, inquietas, inovadoras e talentosas com objetivos grandiosos.

            <p><h2>Perfil:</h2></p>


            Estamos em ritmo acelerado de crescimento e não mediremos esforços para ir cada vez mais longe. Procuramos  um(a) Engenheiro(a) .NET Sênior para se juntar à nossa equipe e criar serviços de back-end incríveis usando tecnologias de ponta.
            
            
            <p><h2>Responsabilidadess:</h2></p>
            Analisar os requisitos do sistema e priorizar tarefas
            <br>- Escrever código limpo e testável usando linguagens de programação .NET
            <br>- Desenvolvimento de especificações técnicas e arquitetura
            <br>- Teste e debug de aplicativos .NET
            <br>- Revisar e refatorar o código
            <br>- Implantar aplicativos totalmente funcionais
            <br>- Atualizar programas existentes
            <br>- Apoiar o trabalho dos Engenheiros juniores
            <br>- Desenvolvimento de documentos e procedimentos operacionais
            <br>- Participação em todo o ciclo de vida de desenvolvimento de software, debug de aplicativos e configuração de sistemas existentes.
            <br><br>

                Se você estiver igualmente feliz em arregaçar as mangas para escrever códigos e revisar o trabalho de outros membros da equipe, gostaríamos de conhecê-lo(a).
            
            <p><h2>Habilidades técnicas:</h2></p>
            - Formação em Ciências da Computação, Engenharia da Computação ou área relevante;
            <br>- Experiência profissional como Engenheiro(a) .NET (.Net Core, .Net 5 e 6)
            <br>- Conhecimento profundo de C #
            <br>- Familiaridade com ambientes ágeis
            <br>- Habilidades de solução de problemas
            <br>- Boas habilidades de comunicação
            <br>
            <p><h2>Requisitos adicionais:</h2></p>
            - Proficiência na construção de aplicativos baseados na web com ASP.NET
            <br>- Experiência com serviços em nuvem como Azure ou AWS
            <br>- Experiência com Sistemas Distribuídos
            <br>- Experiência com Unity
            <br>- Compreensão técnica (leitura / escrita) em Inglês
            <p><h2>Benefícios:</h2></p>

            Salário à combinar
            <br>- Horário flexível
            <br>- Flexibilidade de férias
            <br>- Política de estudo
            <br>- Auxílio Home Office
            <br>- Política de bônus baseada no desempenho da empresa + performance
                        <br><br><br>
                        <p class="card-text"><button onclick="window.location.href='https://www.pipastudios.com/jobs-engenheiro-de-software-backend-senior-net/'" style="background-color: #EC2044;border-radius: 20px; color:#000000;border:0px;width: 80px;height: 40px;">Aplicar</button></p>
                        <br><br><br>

            </div>
                </div>
    </div>

  <div id="id04" class="w3-modal" >
    <div class="w3-modal-content" style="border-radius: 20px; background-color:#83E8CB;">
      <div class="w3-container">
        <span onclick="document.getElementById('id04').style.display='none'" class="w3-button w3-display-topright">&times;</span>
        <p><h1>ENGENHEIRA DE SOFTWARE FRONT-END .NET SÊNIOR</h1></p>
        <p><h2>Quem somos?</h2></p>

            Pipa Studios é líder no segmento de Bingo Social na América do Sul e atua no desenvolvimento de jogos mobile desde 2012. Nossa base está em São Paulo, Brasil, e atuamos de forma global marcando presença nos mercados do México, Espanha, Itália, França e USA.

            O portfólio de jogos é diverso e inclui o best-seller Praia Bingo. Somos uma das maiores empresas de jogos do Brasil e seguimos crescendo com novos produtos e ideias. Alcançamos esse sucesso por sermos um grupo de pessoas ágeis, criativas, inquietas, inovadoras e talentosas com objetivos grandiosos.

            <p><h2>Perfil:</h2></p>


            Estamos procurando um(a)  Desenvolvedor(a) .NET Sênior para se juntar à nossa equipe de engenharia e construir incríveis aplicativos da Web de front-end ASP.NET usando tecnologias de ponta. Por fim, você usará sua experiência em .NET para nos ajudar a implantar aplicativos de alta qualidade.
            
            <p><h2>Responsabilidadess:</h2></p>
            Analisar os requisitos do sistema e priorizar tarefas
            <br>- Escrever código limpo e testável usando linguagens de programação .NET
            <br>- Desenvolvimento de especificações técnicas e arquitetura
            <br>- Teste e debug de aplicativos .NET
            <br>- Revisar e refatorar o código
            <br>- Implantar aplicativos totalmente funcionais
            <br>- Atualizar programas existentes
            <br>- Apoiar o trabalho dos Engenheiros juniores
            <br>- Desenvolvimento de documentos e procedimentos operacionais
            <br>- Participação em todo o ciclo de vida de desenvolvimento de software, debug de aplicativos e configuração de sistemas existentes.
            <br><br>
    
            <p><h2>Habilidades técnicas:</h2></p>
            - Formação em Ciências da Computação, Engenharia da Computação ou área relevante;
            <br>- Experiência profissional como Engenheiro(a) .NET (.Net Core, .Net 5 e 6)
            <br>- Conhecimento profundo de C #
            <br>- Familiaridade com ambientes ágeis
            <br>- Habilidades de solução de problemas
            <br>- Boas habilidades de comunicação
            <br>
            <p><h2>Requisitos adicionais:</h2></p>
            - A proficiência na criação de aplicações com ASP.NET Blazor é uma grande vantagem!
            <br>- Experiência com serviços em nuvem como Azure ou AWS
            <br>- Compreensão técnica (leitura / escrita) em Inglês

            <p><h2>Benefícios:</h2></p>

            Salário à combinar
            <br>- Horário flexível
            <br>- Flexibilidade de férias
            <br>- Política de estudo
            <br>- Auxílio Home Office
            <br>- Política de bônus baseada no desempenho da empresa + performance
                        <br><br><br>
                        <p class="card-text"><button onclick="window.location.href='https://www.pipastudios.com/jobs-frontend-net-senior/'" style="background-color: #EC2044;border-radius: 20px; color:#000000;border:0px;width: 80px;height: 40px;">Aplicar</button></p>
                        <br><br><br>

            </div>
                </div>
    </div>

    <div id="id05" class="w3-modal" >
      <div class="w3-modal-content" style="border-radius: 20px; background-color:#83E8CB;">
      <div class="w3-container">
        <span onclick="document.getElementById('id05').style.display='none'" class="w3-button w3-display-topright">&times;</span>
        <p><h1>ENGENHEIRA DE SOFTWARE – INFRA/DEVOPS/SRE</h1></p>
        <p><h2>Quem somos?</h2></p>

            Pipa Studios é líder no segmento de Bingo Social na América do Sul e atua no desenvolvimento de jogos mobile desde 2012. Nossa base está em São Paulo, Brasil, e atuamos de forma global marcando presença nos mercados do México, Espanha, Itália, França e USA.

            O portfólio de jogos é diverso e inclui o best-seller Praia Bingo. Somos uma das maiores empresas de jogos do Brasil e seguimos crescendo com novos produtos e ideias. Alcançamos esse sucesso por sermos um grupo de pessoas ágeis, criativas, inquietas, inovadoras e talentosas com objetivos grandiosos.

            <p><h2>A NOSSA PROPOSTA:</p></h2>

              Nossos serviços atendem mais de 5 mil requisições por segundo e nós esperamos que este número siga crescendo. O time de engenharia é responsável por implementar novos projetos que sirvam nossa visão de negócio e buscar soluções rápidas para situações que podem impactar na experiência do jogador. 

              Buscamos pessoas com sólida base técnica de programação, conhecimento em desenvolvimento de sistemas e que gostam de resolver problemas. Aqui na Pipa é fundamental ter habilidade de comunicação e resiliência emocional, pois os nossos desafios e códigos são tão grandiosos quanto a nossa sede de crescer. 

              Seu maior foco será evoluir nossa infraestrutura na nuvem e on-premises, propondo e desenvolvendo soluções em conjunto com a equipe de aplicação para melhorar nossa operação. Isso envolve os seguintes pontos:
              <br><br>
              <br>- Desenvolver ferramentas para melhorar a observabilidade dos nossos serviços: monitoramento, alertas, ingestão de logs, etc.
              <br>- Evoluir nossas plataformas de desenvolvimento e produção na nuvem, pensando na sua disponibilidade, escalabilidade e praticidade e automatizando componentes de infraestrutura para serem usados pelo time de engenharia
              <br>- Estender e manter nosso pipeline automatizado de build, testes e implantação
              <br>- Participar de análise de performance e tuning dos serviços de produção
              <br>- Auxiliar e definir boas práticas em respostas a incidentes, diagnósticos e follow-ups do ambiente de produção
              <br><br>
              <p><h2>HABILIDADES SOCIAIS:</p></h2>

              Os Pipeiros são o nosso maior ativo e por isso valorizamos as habilidades sociais que reforçam a importância de saber trabalhar com outras pessoas na criação de um ambiente criativo e leve, mas ao mesmo tempo de alta performance. As principais características esperadas dos nossos profissionais são: Crítico, Criatividade, Comunicação, Resiliência Emocional e Mentalidade de Crescimento
    
            <p><h2>Habilidades técnicas:</h2></p>
            - Graduação em Ciência da Computação, Engenharia da Computação ou equivalente
            <br>- Experiência com Infraestrutura Cloud (AWS e Azure) e Devops
            <br>- Excelente capacidade de abstração, análise e solução de problemas
            <br>- Excelentes habilidades de programação em pelo menos uma linguagem moderna (Java, C#, Go)
            <br>- Experiência com observabilidade de serviços na nuvem, incluindo sistemas de monitoramento e logging
            <br>- Experiência com containers (Docker/Kubernetes)
            <br>- Experiência com Configuration Management/IAC: Terraform, CloudFormation, Ansible, etc
            <br>
            <p><h2>Benefícios:</h2></p>

            Salário à combinar
            <br>- Horário flexível
            <br>- Flexibilidade de férias
            <br>- Política de estudo
            <br>- Auxílio Home Office
            <br>- Política de bônus baseada no desempenho da empresa + performance
                        <br><br><br>
                        <p class="card-text"><button onclick="window.location.href='https://www.pipastudios.com/jobs-backend-infra-devops-sre/'" style="background-color: #EC2044;border-radius: 20px; color:#000000;border:0px;width: 80px;height: 40px;">Aplicar</button></p>
                        <br><br><br>

            </div>
                </div>
    </div>

    <div class="card-columns" style = "position:absolute;top:90px; height:75vh;width:90%;left:5%">
  
          <div class="card text-center" style="border-radius: 20px; background-color:#7ED4FC;">
          <div class="card-body">
            <h5 class="card-title">Engenheira de Software Backend JAVA</h5>
            <p class="card-text"><button onclick="document.getElementById('id01').style.display='block'" style="background-color: #00AEFF;border-radius: 20px; color:#000000;border:0px;width: 80px;height: 40px;">Ver mais</button></p>
            <p class="card-text"><small class="text-muted">Pipa Studios</small></p>
          </div>
        </div>

        <div class="card text-center" style="border-radius: 20px; background-color:#83E8CB;">
          <div class="card-body">
            <h5 class="card-title">Engenheira de Software– INFRA/DEVOPS/SRE</h5>
            <p class="card-text"><button onclick="document.getElementById('id05').style.display='block'" style="background-color: #09D69D;border-radius: 20px; color:#000000;border:0px;width: 80px;height: 40px;">Ver mais</button></p>
            <p class="card-text"><small class="text-muted">Pipa Studios</small></p>
          </div>
        </div>
        <div class="card text-center" style="border-radius: 20px; background-color:#83E8CB;">
          <div class="card-body">
            <h5 class="card-title">Desenvolvedora Unity Sênior</h5>
            <p class="card-text"><button onclick="document.getElementById('id02').style.display='block'" style="background-color: #09D69D;border-radius: 20px; color:#000000;border:0px;width: 80px;height: 40px;">Ver mais</button></p>
            <p class="card-text"><small class="text-muted">Pipa Studios</small></p>
          </div>
        </div>
        
        <div class="card text-center" style="border-radius: 20px; background-color:#F48D9E;">
          <div class="card-body">
            <h5 class="card-title">Engenheira de Software Backend .NET Sênior</h5>
            <p class="card-text"><button onclick="document.getElementById('id03').style.display='block'"style="background-color: #EC2044;border-radius: 20px; color:#000000;border:0px;width: 80px;height: 40px;">Ver mais</button></p>
            <p class="card-text"><small class="text-muted">Pipa Studios</small></p>
          </div>
        </div>

        <div class="card text-center" style="border-radius: 20px; background-color:#F48D9E;">
          <div class="card-body">
            <h5 class="card-title">Engenheira de Software Front-End .NET Sênior</h5>
            <p class="card-text"><button onclick="document.getElementById('id04').style.display='block'" style="background-color: #EC2044;border-radius: 20px; color:#000000;border:0px;width: 80px;height: 40px;">Ver mais</button></p>
            <p class="card-text"><small class="text-muted">Pipa Studios</small></p>
          </div>
        </div>
        <div class="card text-center" style="border-radius: 20px; background-color:#7ED4FC;">
          <div class="card-body">
            <h5 class="card-title">Em breve mais vagas</h5>
           <p class="card-text"><small class="text-muted">Se Joga!</small></p>
          </div>
        </div>

        
</div>
       

    </main>
    <footer>
    <ul class="logo"><img class="union-1" src="assets/Vector.png" />
    <img class="se-joga-2022" src="assets/Se joga2022.png"/></ul>
    <div class="rodape" style="position:relative; top:-1000px">
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