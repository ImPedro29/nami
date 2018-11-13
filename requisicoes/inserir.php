<?php
    $mq = mysqli_connect("mysql995.umbler.com", "nami", "tg0vvlbb5o", "nami");

    $tipo = $_GET["tipo"];
    $today = getdate();
    $data = $today['year'] . "-" . $today['mon'] . "-" . $today['mday'];
    $senha;

    if($tipo == 1){
        $sql = "INSERT INTO fila_normal (dia) VALUES ('$data')";
        $sql2 = "SELECT * FROM fila_normal";
        $result = $mq->query($sql2);

        if ($result->num_rows > 0)
            while ($row = $result->fetch_assoc()){
                if ($row["chamado"] == 0){
                    $senha = $row["id"];
                }
            }
    }else{
        $sql = "INSERT INTO fila_prioridade (dia) VALUES ('$data')";
        $sql2 = "SELECT * FROM fila_prioridade";
        $result = $mq->query($sql2);

        if ($result->num_rows > 0)
            while ($row = $result->fetch_assoc()){
                if ($row["chamado"] == 0){
                    $senha = $row["id"];
                }
            }
    }

    $mq->query($sql);
    header('Content-Type: application/json');
    $data = ['senha' => ($senha+1), 'tipo' => $tipo];

    echo json_encode($data);
?>