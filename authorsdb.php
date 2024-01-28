<?php
    require_once('config.php');
        // function retrieve all blogs
        function getAuthors(){
            $sql = "SELECT * FROM authors ;";
            // 4 run Query 
            $result = mysqli_execute_query($GLOBALS['conn'],$sql);
            return $result;
        }