<?php
    $mq = mysqli_connect("mysql995.umbler.com", "nami", "tg0vvlbb5o", "nami");

    $tipo = $_GET["tipo"];
    $today = getdate();
    $data = STR_TO_DATE($today['year'] . "-" . $today['mon'] . $today['mday']);

    if($tipo == 1)
         $sql = "INSERT INTO fila_normal (dia) VALUES ('$data')";
    else
        $sql = "INSERT INTO fila_prioridade (dia) VALUES ('$data')";

    $mq->query($sql);
?>