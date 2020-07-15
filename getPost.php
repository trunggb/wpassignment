<?php
    require 'config.php';

    $sql = "SELECT * FROM post";

    $result = $mysqli->query($sql);

    while($row = $result->fetch_assoc()){

        $mem_id = $row['by_member'];

        $sql1 = "SELECT * FROM account WHERE id = '".$mem_id."'";

        $result1 = $mysqli->query($sql1);
        
        while($row1 = $result1->fetch_assoc()){
            $row['by_member'] = $row1['fname'] ." " .$row1['lname'];
        }

        $post_id = $row['id'];

        

        $sql2 = "SELECT * FROM comment WHERE by_post = '".$post_id."'";

        $result2 = $mysqli->query($sql2);
        
        while($row2 = $result2->fetch_assoc()){
            $comment[] = $row2;
        }

        $row['comment'] = $comment;
        $comment = [];
        $json[] = $row;
    }

    $data['data'] = $json;

    echo json_encode($data);
?>