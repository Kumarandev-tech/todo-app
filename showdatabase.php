<?php

require_once 'config.php';

$sql = "SELECT *FROM todo";
$q = $pdo->prepare($sql);
$q->execute();
if(($q)>0){
    while ($row=$q->fetch()) { 
?>        
        <ul>
            <li>
            <input class="form-check-input" type="checkbox" name="styledText" value=""><?php echo $row['task_details'];?>
            <i id="removeBtn"class="bi bi-file-x" data-id="<?php echo $row['task_list_id']; ?>"></i>
            
        </li> 
        </ul>
<?php
    }
    }else{
        echo ' <li>
        <input class="form-check-input" type="checkbox" name="styledText" value="">No recards found
        <i class="bi bi-file-x"></i>';
    }

?>
 
