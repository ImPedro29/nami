<?php

?>

<html>
    <head>
        <title>Pagina Atendente</title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <script
            src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha256-3edrmyuQ0w65f8gfBsqowzjJe2iM6n0nKciPUp8y+7E="
            crossorigin="anonymous"></script>
    </head>

    <body>
        <button type="button" onclick="repetir();" ><h1>Repetir Chamada</h1></button>
        <button type="button" onclick="chamar();" ><h1>Chamar Senha</h1></button>
    </body>

    <script>
        let st = parseInt(prompt("Digite o numero do seu Guiche:"));
        let tipoAtual = 0;

        function chamar() {
            $.ajax({
                type: "POST",
                url: "/requisicoes/chamar.php",
                data: { guiche: st, tipo: tipoAtual}
            });

            if(tipoAtual === 0)
                tipoAtual = 1;
            else
                tipoAtual = 0;
        }


    </script>

</html>
