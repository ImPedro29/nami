<?php
    $mq = mysqli_connect("mysql995.umbler.com", "nami", "tg0vvlbb5o", "nami");

    $guiche = $_POST["guiche"];
    $tipo = $_POST["tipo"];
    $sq;


    if(tipo == 0){
        $sql = "SELECT * FROM fila_normal";
        $result = $mq->query($sql);

        if ($result->num_rows > 0)
            while ($row = $result->fetch_assoc())
                if ($row["chamado"] == 0){
                    $sq = "UPDATE fila_normal SET chamado=1, guiche=$guiche WHERE id=" . $row["id"];
                    break;
            }


    }else{
        $sql = "SELECT * FROM fila_prioridade";
        $result = $mq->query($sql);

        if ($result->num_rows > 0)
            while ($row = $result->fetch_assoc())
                if ($row["chamado"] == 0){
                    $sq = "UPDATE fila_prioridade SET chamado=1, guiche=$guiche WHERE id=" . $row["id"];
                    break;
                }
    }

    $mq->query($sq);
?>