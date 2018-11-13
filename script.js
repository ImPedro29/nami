
function botaoClicado_N() {
    cont1();
    window.location = "SELEÇÃO.html";
}

function botaoClicado_P(){
    cont2();
    window.location = "SELEÇÃO.html";
}

//Senhas

window.onload = function(){
    if (getCookie(document.querySelector("title").textContent + "normal"))
        senhaNor = parseInt(getCookie(document.querySelector("title").textContent + "normal"));
    if (getCookie(document.querySelector("title").textContent + "prioridade"))
        senhaPri = parseInt(getCookie(document.querySelector("title").textContent + "prioridade"));
}


//saida
function cont1() {
    senhaNor
    $.ajax({
        url: "requisicoes/ultima.php",
        type: "GET",
        dataType: "json",
        data: {},
        cache: false,
        success: function(data){
            if(!data.none){
                msgI = data.tipo + ", senha " + data.senha + ", guichê " + data.guiche;
                document.getElementsByClassName("number")[0].innerHTML = data.tipo[0].toUpperCase() + "" + data.senha;
                var msg = new SpeechSynthesisUtterance(msgI);
                window.speechSynthesis.speak(msg);
            }
        }
    });
    var conteudo= "N"+senhaN+" (" + document.querySelector("title").textContent + ")";
    tela_impressao = window.open('about:blank');
    tela_impressao.document.write(conteudo);
    tela_impressao.window.print();
    tela_impressao.window.close();
    setCookie(document.querySelector("title").textContent + "normal", senhaN, 0.3);



}

function cont2(){
    senhaP

    var conteudo= "P"+senhaP+" (" + document.querySelector("title").textContent + ")";
    tela_impressao = window.open('about:blank');
    tela_impressao.document.write(conteudo);
    tela_impressao.window.print();
    tela_impressao.window.close();
    setCookie(document.querySelector("title").textContent + "prioridade", senhaP, 0.3);
}
