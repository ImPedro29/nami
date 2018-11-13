<?php

$mq = mysqli_connect("mysql995.umbler.com", "nami", "tg0vvlbb5o", "nami");

$sql = "SELECT * FROM fila_normal";
$result = $mq->query($sql);

$sql2 = "SELECT * FROM fila_prioridade";
$result2 = $mq->query($sql2);

if($result2->num_rows > 0){
    while ($row = $result2->fetch_assoc())
        if ($row["chamado"] == 1){
            $sq = "UPDATE fila_prioridade SET chamado=2, guiche=$guiche WHERE id=" . $row["id"];
            $mq->query($sq);
            $data = ['senha' => $row["id"], 'guiche' => $row['guiche']];
            die(json_encode($data));
            break;
        }
}

if ($result->num_rows > 0)
    while ($row = $result->fetch_assoc())
        if ($row["chamado"] == 1){
            $sq = "UPDATE fila_normal SET chamado=2, guiche=$guiche WHERE id=" . $row["id"];
            $mq->query($sq);
            $data = ['senha' => $row["id"], 'guiche' => $row['guiche']];
            die(json_encode($data));
            break;
        }

?>