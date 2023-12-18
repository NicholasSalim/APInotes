<?php

    require_once('connection.php');
    parse_str(file_get_contents('php://input'), $value);

    $id = $value['id_notes'];

    $query = "DELETE FROM notes  WHERE id_notes = '$id' ";
    $run = mysqli_query($db_connect, $query);

    if($run){
        echo json_encode(array('message' => 'Deleted!'));
    }else{
        echo json_encode(array('message' => 'error'));
    }

?>