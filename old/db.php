<pre>
<?php   
    // 1: Connection with database
    $host = 'localhost';
    $username = 'root';
    $password = '';
    $port = 3306;
    $database = 'news';

    // mysqli_connect($host,$username,$password,$database,$port);
    $conn = mysqli_connect(hostname:$host,username:$username,database:$database,port:$port);
    // print_r($conn);
    // 2: test is connection is correct 
    if (!$conn){
        die("Error in DATABASE Connection");
    }

    // 3: Write SQL 
    $sql = "SELECT * FROM `blogs` join authors on author_id = authors.id;";
    // 4: Run SQL 
    $result = mysqli_execute_query($conn,$sql);

    // 5 : fetch result
    // $row = mysqli_fetch_assoc($result);
    // print_r($row)

    while ($row = mysqli_fetch_assoc($result)){
        echo $row['title'].' wrote by :' . $row['name'].PHP_EOL;
    }
    // 6: Closing Connection 

    mysqli_close($conn);

?>
</pre>