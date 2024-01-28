<pre>


<?php

    // 1 - connection 
    $host = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'news';
    $port = 3306;

    $conn = mysqli_connect($host,$username,$password,$database,$port);
    // mysqli_connect(hostname:$host , username:$username,database:$database);
    // check connection
    if(!$conn){
        die("error in database connections");
    }
    // 2 SQL
    $sql = 'SELECT * FROM `blogs` limit 10;';
    // $sql = 'SELECT ID as identifier ,Title as blog_title FROM `posts` limit 10;';
    // 3 run query 
    $results = mysqli_execute_query($conn,$sql);
    // print_r($results); 
    // $rows = mysqli_fetch_assoc($results);
    // print_r($rows);
    // $rows = mysqli_fetch_assoc($results);
    // print_r($rows);
    $rows = mysqli_fetch_assoc($results);
    print_r($rows);
    // $rows = mysqli_fetch_all($results);
    // print_r($rows);
    // foreach($rows as $post){
    //     echo $post[0];
    // }



    while($row = mysqli_fetch_assoc($results)){
        echo '<hr>';
        echo "<h1> ".$row['Title']."</h1>";
        // echo "ID :".$row['ID']." Name :".$row['Title'].PHP_EOL;

    }

    // 4 close connection

    mysqli_close($conn);

?>
</pre>