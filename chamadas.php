
<body>
    <div id="num">Senha <br><p class="number">N00</p></div>
</body>

<style>
    #num{
        position: absolute;
        left: 50%;
        top: 50%;
        transform: translate(-50%, -50%);
        font-size: 4em;
        font-family: "Calibri";
    }
    .number{
        font-size: 5em;
        color: #ff3d29;
        font-weight: bold;
    }
</style>

<script>

    var msg = new SpeechSynthesisUtterance('Senha ');
    window.speechSynthesis.speak(msg);

</script>
