<?php
    require 'config.php';

    $sql = "SELECT * FROM account";

    $result = $mysqli->query($sql);

    while($row = $result->fetch_assoc()){
        $json[] = $row;
    }

    $data['data'] = $json;

    echo json_encode($data);
?>