<?php
    $mq = mysqli_connect("mysql995.umbler.com", "nami", "tg0vvlbb5o", "nami");

    $guiche = $_POST["guiche"];
    $tipo = intval($_POST["tipo"]);
    $sq;
    $qtd = 0;

    echo $tipo;

    if($tipo == 1){
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

        if ($result->num_rows > 0){
            while ($row = $result->fetch_assoc())
                if ($row["chamado"] == 0){
                    $sq = "UPDATE fila_prioridade SET chamado=1, guiche=$guiche WHERE id=" . $row["id"];
                    $qtd++;
                    break;
                }
        }

        $sq2 = "SELECT * FROM fila_normal";
        $result2 = $mq->query($sq2);

        if ($qtd > 1)
            while ($row = $result2->fetch_assoc())
                if ($row["chamado"] == 0){
                    $sq = "UPDATE fila_normal SET chamado=1, guiche=$guiche WHERE id=" . $row["id"];
                    break;
                }

    }

    $mq->query($sq);
?>