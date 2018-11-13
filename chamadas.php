<?php
    $mq = mysqli_connect("mysql995.umbler.com", "nami", "tg0vvlbb5o", "nami");

    $sql = "SELECT * FROM fila_normal";
    $result = $mq->query($sql);

    

?>

<script>

    var msg = new SpeechSynthesisUtterance('Senha ');
    window.speechSynthesis.speak(msg);

</script>
