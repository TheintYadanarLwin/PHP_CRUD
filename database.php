<?php
    $server = 'localhost';
    $name = 'root';
    $password = '';
    $dbname = 'basic_php_crud';

    $db = mysqli_connect($server,$name,$password,$dbname);

    if($db == false) {
        die('Error: '.mysqli_connect_error($db));
    } 
?>
