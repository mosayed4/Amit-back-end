<pre>
<?php
// 1 - connection 
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'news';
$port = 3306;

$conn = mysqli_connect($host, $username, $password, $database, $port);
// check connection
if (!$conn) {
    die("error in database connections");
}
// 2 SQL
$sql = 'SELECT * FROM `blogs` limit 10;';
// 3 run query 
$results = mysqli_execute_query($conn, $sql);


?>
<?php while ($row = mysqli_fetch_assoc($results)) : ?>
<hr>
<h1>Title:<?php echo $row['Title'] ?> </h1>
<h3>ID: <?php echo $row['ID'] ?></h3>
<p><?php echo $row['short_description'] ?></p>
<?php endwhile; ?>

<?php
// 4 close connection

mysqli_close($conn);

?>
</pre>