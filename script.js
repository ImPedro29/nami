
function botaoClicado_N() {
    senhaNor++;
    cont1(senhaNor);
    window.location = "SELEÇÃO.html";
}

function botaoClicado_P(){
    senhaPri++;
    cont2(senhaPri);
    window.location = "SELEÇÃO.html";
}

//Senhas

let senhaNor = 0;
var senhaPri=0;

window.onload = function(){
    if (getCookie(document.querySelector("title").textContent + "normal"))
        senhaNor = parseInt(getCookie(document.querySelector("title").textContent + "normal"));
    if (getCookie(document.querySelector("title").textContent + "prioridade"))
        senhaPri = parseInt(getCookie(document.querySelector("title").textContent + "prioridade"));
}


//saida
function cont1(senhaN) {
    var conteudo= "N"+senhaN+" (" + document.querySelector("title").textContent + ")";
    tela_impressao = window.open('about:blank');
    tela_impressao.document.write(conteudo);
    tela_impressao.window.print();
    tela_impressao.window.close();
    setCookie(document.querySelector("title").textContent + "normal", senhaN, 0.3);
}

function cont2(senhaP) {
    var conteudo= "P"+senhaP+" (" + document.querySelector("title").textContent + ")";
    tela_impressao = window.open('about:blank');
    tela_impressao.document.write(conteudo);
    tela_impressao.window.print();
    tela_impressao.window.close();
    setCookie(document.querySelector("title").textContent + "prioridade", senhaP, 0.3);
}


function getCookie(cname) {
    var name = cname + "=";
    var decodedCookie = decodeURIComponent(document.cookie);
    var ca = decodedCookie.split(';');
    for(var i = 0; i <ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}

function setCookie(cname, cvalue, exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays*24*60*60*1000));
    var expires = "expires="+ d.toUTCString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}
