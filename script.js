
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
    var conteudo= "N"+ insertAndGet(1) +" (" + document.querySelector("title").textContent + ")";
    imprimir(conteudo);
}

function cont2(){
    var conteudo= "P"+ insertAndGet(0) +" (" + document.querySelector("title").textContent + ")";
    imprimir(conteudo);
}

function insertAndGet(t){
    $.ajax({
        url: "requisicoes/inserir.php",
        type: "GET",
        dataType: "json",
        data: {tipo: t},
        cache: false,
        success: function(data){
            return data.senha;
        }
    });
}

function imprimir(ct){
    tela_impressao = window.open('about:blank');
    tela_impressao.document.write(ct);
    tela_impressao.window.print();
    tela_impressao.window.close();
}
