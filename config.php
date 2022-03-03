<?php
class db{
    
}
define('DB_SERVER','localhost');
define('DB_USERNAME','root');
define('DB_PASSWORD','kumaranM@1');
define('DB_NAME','testing');

try{
    
    $pdo=new PDO("mysql:host=".DB_SERVER.";dbname=".DB_NAME,DB_USERNAME,DB_PASSWORD);
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
   
    
}catch(PDOException $e){
    echo 'cannot success database in .DB_NAME'.$e->getMessage();
}
