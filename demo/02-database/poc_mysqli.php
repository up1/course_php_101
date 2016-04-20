<?php
$host = "localhost";
$username = "root";
$password = "mypassword";
$database_name = "shop";

$connection = mysqli_connect($host, $username, $password, $database_name) 
                                                or die ('Could not connect: '. mysqli_error($connection));


$result = mysqli_query($connection, "SELECT * from employee")
                                     or die ('Invalid query: '. mysqli_error($connection));

while($row = mysqli_fetch_assoc($result)) {
    echo $row['firstname'] . "\n";
}

mysqli_close($connection);
?>