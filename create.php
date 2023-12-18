<?php

    require_once('connection.php');

    $note = $_POST['note'];

    $query = "INSERT INTO notes(note) VALUES ('$note')";
    $run = mysqli_query($db_connect, $query);

    if($run){
        echo json_encode(array('message' => 'Created!'));
    }else{
        echo json_encode(array('message' => 'error'));
    }

?>