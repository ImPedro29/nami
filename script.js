
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
    insertAndGet(1, function(out){
        conteudo= "N"+ out.senha +" (" + document.querySelector("title").textContent + ")";
        imprimir(conteudo);
    });
}

function cont2(){
    insertAndGet(0, function(out){
        conteudo= "P"+ out.senha +" (" + document.querySelector("title").textContent + ")";
        imprimir(conteudo);
    });
}

function insertAndGet(t, output){
    $.ajax({
        url: "requisicoes/inserir.php",
        type: "GET",
        dataType: "json",
        data: {tipo: t},
        cache: false,
        success: function(data){
            output(data);
        }
    });
}

function imprimir(ct){
    tela_impressao = window.open('about:blank');
    tela_impressao.document.write(ct);
    tela_impressao.window.print();
    tela_impressao.window.close();
}
