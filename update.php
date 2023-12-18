<?php

    require_once('connection.php');
    parse_str(file_get_contents('php://input'), $value);

    $id = $value['id_notes'];
    $note = $value['note'];

    $query = "UPDATE notes SET note = '$note' WHERE id_notes = '$id' ";
    $run = mysqli_query($db_connect, $query);

    if($run){
        echo json_encode(array('message' => 'Updated!'));
    }else{
        echo json_encode(array('message' => 'error'));
    }

?>