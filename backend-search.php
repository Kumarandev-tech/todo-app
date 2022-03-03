<?php

require_once 'config.php';

    if(isset($_REQUEST["term"])){
        // create prepared statement
        $sql = "SELECT * FROM todo WHERE task_details LIKE :term";
        $stmt = $pdo->prepare($sql);
        $term = $_REQUEST["term"] . '%';
        // bind parameters to statement
        $stmt->bindParam(":term", $term);
        // execute the prepared statement
        $stmt->execute();
        if($stmt->rowCount() > 0){
            while($row = $stmt->fetch()){
                echo "<p>" . $row["task_details"] . "</p>";
            }
        } else{
            echo "<p>No matches found</p>";
        }
    }  

unset($stmt);

unset($pdo);
?>