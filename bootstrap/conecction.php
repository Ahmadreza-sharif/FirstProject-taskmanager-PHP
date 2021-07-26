<?php
    $host = "localhost" ;
    $user = "root";
    $password = "";
    $dbname = "first_project";

    

    try {
        $dbc = new PDO("mysql:host=$host;dbname=$dbname",$user,$password);
    } catch (PDOException $th) {
        echo $th;
        die ;
    }
?>