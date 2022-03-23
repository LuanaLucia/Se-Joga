$("#email").keyup(function(e){
    var email = $(this).val();
    $.get('verificanomeUser.php',{'email':email},function(data){
        if (data=="E-mail já cadastrado"){
            $("#resultadoEmail").html(data);
            jQuery('#acao').prop('disabled', true);
            document.getElementById("acao").style.background = "#818181";
            document.getElementById("email").style.background = "#ff899e"
        }else{
            $("#resultadoEmail").html("");
            jQuery('#acao').prop('disabled', false);
            document.getElementById("acao").style.background = "#09D69D";
            document.getElementById("email").style.background = "#ffffff"
        }
    })
})

$("#nomeUser").keyup(function(e){
    var nomeUser = $(this).val();
    $.get('verificanomeUser.php',{'nomeUser':nomeUser},function(data2){
        if (data2=="Nome de usuária já extiste"){
            $("#resultadoUser").html(data2);
            jQuery('#acao').prop('disabled', true);
            document.getElementById("acao").style.background = "#818181";
            document.getElementById("nomeUser").style.background = "#ff899e"
        }else{
            $("#resultadoUser").html("");
            jQuery('#acao').prop('disabled', false);
            document.getElementById("acao").style.background = "#09D69D";
            document.getElementById("nomeUser").style.background = "#ffffff"
        }
    })
})

$("#Convite").keyup(function(e){
    var Convite = $(this).val();
    $.get('verificanomeUser.php',{'Convite':Convite},function(data3){
        if (data3=="Convite válido"){
            $("#resultadoConvite").html("");
            jQuery('#acao').prop('disabled', true);
            document.getElementById("acao").style.background = "#818181";
            document.getElementById("Convite").style.background = "#09D69D"
        }else{
            $("#resultadoConvite").html(data3);
            jQuery('#acao').prop('disabled', false);
            document.getElementById("acao").style.background = "#09D69D";
            document.getElementById("Convite").style.background = "#ff899e"
        }
    })
})