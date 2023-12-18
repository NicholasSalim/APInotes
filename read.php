<?php

    require_once('connection.php');

    $query = "SELECT * FROM notes ORDER BY id_notes DESC";
    $run = mysqli_query($db_connect, $query);

    if($run){
        $result = array();
        while($row = mysqli_fetch_array($run)){
            array_push($result,array(
                'id' => $row['id_notes'],
                'note' => $row['note'],
            ));
        }

        echo json_encode(array('notes' => $result));

    }

?>