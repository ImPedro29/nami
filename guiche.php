<?php

?>

<html>
    <head>
        <title>Pagina Atendente</title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <script
                src="https://code.jquery.com/jquery-3.3.1.min.js"
                integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
                crossorigin="anonymous"></script>
    </head>

    <body>
        <button type="button" onclick="repetir();" ><h1>Repetir Chamada</h1></button>
        <button type="button" onclick="chamar();" ><h1>Chamar Senha</h1></button>
    </body>

    <script>
        let st = parseInt(prompt("Digite o numero do seu Guiche:"));
        let tipoAtual = 0;

        function chamar(){
            $.ajax({
                url: "requisicoes/chamar.php",
                type: "GET",
                dataType: "json",
                data: { guiche: st, tipo: tipoAtual },
                success: function(data){
                    if(!data.prioridade)
                        chamarDnv();


                },
                error: function(error){
                    if(!error.prioridade)
                        chamarDnv();

                }
            });

            if(tipoAtual == 0)
                tipoAtual = 1;
            else
                tipoAtual = 0;

        }

        function chamarDnv(){
            $.ajax({
                url: "requisicoes/chamar.php",
                type: "GET",
                dataType: "json",
                data: { guiche: st, tipo: tipoAtual }
            });
        }

        function repetir(){
            $.post( "requisicoes/repetir.php", { guiche: st, tipo: tipoAtual } );
        }

    </script>

</html>
