<?php

function insert()
{
    require_once 'config.php';
    $todo = ($_POST['todovalue']);
    if (empty($todo)) {
        echo '<script> alert("enter the some values")</script>';
    } else {
        $sql = "INSERT INTO todo(task_details)VALUES('$todo')";
        $q = $pdo->prepare($sql);
        $q->execute();
        if ($q ) {
            echo "1";
        } else {
            echo "0";
        }
    }
}
insert();
