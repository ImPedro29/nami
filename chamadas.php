
<body>

    <div id="num">Aguarde...</div>

</body>

<style>
    .num{
        position: absolute;
        left: 50%;
        top: 50%;
        transform: translate(-50%, -50%);
        font-size: 4em;
    }
</style>

<script>

    var msg = new SpeechSynthesisUtterance('Senha ');
    window.speechSynthesis.speak(msg);

</script>
