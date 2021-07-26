<?php

// the main file

include "bootstrap/init.php";
$tasks = get_tasks();
if (isset($_GET['del']) ) {
    deleteTask($_GET['del']);
    header('location:index.php');
}
$numtask = get_numtask();
$alltask = all_task();

if (isset($_GET['setu'])) {
    setu_change($_GET['setu']);
    header('location:index.php');
}

include "tpl/main.php";


?>