<?php

    // configuration 
    $hostname = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'newblogs';
    
    // connection
    $conn = mysqli_connect($hostname,$username,$password,$database);
    if(!$conn){
        die("ERROR IN DATABASE CONNECTION");
    }
    

