<?php
    $mq = mysqli_connect("mysql995.umbler.com", "nami", "tg0vvlbb5o", "nami");

    $sql = "SELECT * FROM fila_normal";
    $result = $mq->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "id: " . $row["id"]. " - Name: " . $row["dia"]. " " . $row["chamado"]. "<br>";
        }
    }
?>