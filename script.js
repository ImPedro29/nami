
function botaoClicado_N() {
    cont1();
    window.location = "SELEÇÃO.html";
}

function botaoClicado_P(){
    cont2();
    window.location = "SELEÇÃO.html";
}

//saida
function cont1(){
    $.ajax({
        url: "requisicoes/inserir.php",
        type: "GET",
        dataType: "json",
        data: {tipo: "1"},
        cache: false,
        success: function(data){
            var conteudo= "N"+ data.senha +" (" + document.querySelector("title").textContent + ")";
            imprimir(conteudo);
        }
    });



}

function cont2(){
    $.ajax({
        url: "requisicoes/inserir.php",
        type: "GET",
        dataType: "json",
        data: {tipo: "0"},
        cache: false,
        success: function(data){
            var conteudo= "P"+ data.senha +" (" + document.querySelector("title").textContent + ")";
            imprimir(conteudo);
        }
    });
}

function imprimir(ct){
    tela_impressao = window.open('about:blank');
    tela_impressao.document.write(ct);
    tela_impressao.window.print();
    tela_impressao.window.close();
}
