
<body>
    <div id="num">Senha <br><p class="number">N00</p></div>
    <script
        src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous"></script>
</body>

<style>
    #num{
        position: absolute;
        left: 50%;
        top: 50%;
        transform: translate(-50%, -50%);
        font-size: 4em;
        font-family: "Calibri";
        text-align: center;
    }
    .number{
        font-size: 6em;
        color: #ff3d29;
        font-weight: bold;
        position: relative;
        margin: 0;
        padding: 0;
    }
</style>

<script>

    let inte = setInterval(chame, 3000);
    let msgI = "";

    function chame(){
        $.ajax({
            url: "requisicoes/ultima.php",
            type: "GET",
            dataType: "json",
            data: {},
            success: function(data){
                if(data.none) {
                    msgI = data.tipo + ", senha " + data.senha + ", guichê " + data.guiche;
                    document.getElementsByClassName("number")[0].innerHTML = data.tipo[0].toUpperCase() + "" + data.senha;
                }
            }
        });

        var msg = new SpeechSynthesisUtterance(msgI);
        window.speechSynthesis.speak(msg);
    }

</script>
