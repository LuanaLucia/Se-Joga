<?php
//enviar
    $nome = 'Luana Lúcia';
    $email= 'contato@sejoga.net';
    
    $arquivo  =utf8_decode("<html><br>").$nome.utf8_decode(", bem-vinde à primeira comunidade inteiramente feminina de gamers do Brasil-sil-sil &#x1F3AE; &#x1F30E;<br>
                      <br>
                      Abaixo temos o formato do teu convite. Você tem direito a convidar mais 15 mulheres para a nossa plataforma. Para manter nossa comunidade segura, leia e siga as regras abaixo"). "&#128071;".
                      utf8_decode("<br><br>
                      1) Somente mulheres cis, trans, não-bináries e travestis são permitidas.
                      <br>
                      2) Qualquer tipo de discurso de ódio é proibido e não será tolerado, levando ao banimento da pessoa na plataforma.
                      <br>
                      3) Toda a coleta de dados segue os regulamentos da LGPD.
                      <br>
                      4) Não compartilhe informações de outras usuárias sem autorização prévia. Dependendo da gravidade do caso gerará advertimento ou banimento da plataforma.
                      <br>
                      5) Esta é uma plataforma de apoio a outras mulheres no ambiente de jogos. Evite fazer qualquer comentário que denigra, ofenda ou seja negativo às membras.
                      <br>
                      6) Este não é um lugar de flertes. Toda aproximação de cunho romântico ou sexual indesejado ou incômodo pode ser denunciado e a pessoa será advertida ou banida da plataforma.
                      <br>
                      7) Não utilize da plataforma para criar qualquer subgrupo que não esteja relacionado a jogos, mercado de jogos, curso de jogos, streams ou eSports.
                      <br>
                      8) Caso experiencie ou presencie qualquer cena de assédio ou discurso de ódio, denuncie o usuário.
                      <br>
                      9) Seu convite é: <b> <font color='#ec2247'>xxxx</font></b>. Repasse apenas à mulheres gamers de seu contato e confiança.
                      <br>
                      <br>
                      Mais uma vez, estamos gratas por ter você conosco &#x1F49E;
                      <br>
                      <br><br>

                      Siga nossas redes sociais para saber mais informações
                      <br><br>
                      <b><font color='#ec2247'>Instagram: </font></b><a href='https://www.instagram.com/sejoga.garota/'>@sejoga.garota</a> <br>

                      <b><font color='#ec2247'>Linkedin: </font></b><a href='https://www.linkedin.com/company/se-joga-garota/'>/company/se-joga-garota</a>


                      <br>
                      <br>
                      <img src='https://i.gifer.com/BzYj.gif'>
                      </html>
                      ");


  // emails para quem será enviado o formulário
  $emailenviar = "luanasantos@outlook.com; luly93.01@gmail.com";
  $destino = $emailenviar;
  $assunto = "Contato pelo Site";

  // É necessário indicar que o formato do e-mail é html
  $headers  = 'MIME-Version: 1.0' . "\r\n";
      $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
      $headers .= 'From: Se Joga! <contato@sejoga.net>';

  if(!mail($emailenviar, $assunto, $arquivo, $headers ,"-r"."contato@sejoga.net")){ // Se for Postfix
    $headers .= "Return-Path: " . "contato@sejoga.net" . "\n"; // Se "não for Postfix"
    mail($emailenviar, $assunto, $arquivo, $headers );
}
?>