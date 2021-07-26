<?php
    include_once "../bootstrap/init.php";
    
    if (isset($_POST['action']) and $_POST['action'] == "addtask") {
        addtask($_POST['title'],userid());
    }

?>