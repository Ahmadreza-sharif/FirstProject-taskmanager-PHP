<?php



    function get_tasks()
    {
        global $dbc;
        $sql = "select * from tasks";
        $statement = $dbc->prepare($sql);
        $statement->execute();
        $data = $statement->fetchall(pdo::FETCH_OBJ);
        return $data ;

    }

    function deleteTask($var)
    {
        global $dbc;
        $sql = "delete from tasks where id = $var" ;
        $statement = $dbc->prepare($sql);
        $statement->execute();
    }

    function userid()
    {
        return 1 ;
    }

    function addtask($var,$id)
    {
        global $dbc;
        $sql = "INSERT INTO `tasks` ( `name`, `user_id` ) VALUES ( '$var', '$id');" ;
        $statement = $dbc->prepare($sql);
        $statement->execute();
        
    }
    function get_numtask()
    {
        global $dbc;
        $sql = "select * from tasks where `situation` = 0";
        $statement = $dbc->prepare($sql);
        $statement->execute();
        return $statement->rowCount();
        
    }
    function all_task()
    {
        global $dbc;
        $sql = "select * from tasks ";
        $statement = $dbc->prepare($sql);
        $statement->execute();
        return $statement->rowCount();
        
    }
    function setu_change($var)
    {
        global $dbc ;
        $sql = "UPDATE `tasks` SET `situation` = '0' WHERE `id` = $var";
        $statement = $dbc->prepare($sql);
        $statement->execute();
    }
?>