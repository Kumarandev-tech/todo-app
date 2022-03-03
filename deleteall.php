<?php

function deleteall(){
    require_once "config.php";
    $id=$_REQUEST['rm'];
    $sql="TRUNCATE TABLE todo WHERE task_list_id='$id'";
        $q=$pdo->prepare($sql);
        $q->execute();
    }


?>