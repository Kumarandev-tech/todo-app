<?php


 function delete()
 {
     require_once 'config.php';
     $id=$_POST['id'];

     $sql="DELETE FROM todo WHERE task_list_id='$id'";
     $q=$pdo->prepare($sql);
     $q->execute();
    
     if ($q) {
         echo 1;
     } else {
         echo 0;
     }
 }
delete();
