<?php
$host = "localhost";
$username = "root";
$password = "mypassword";
$database_name = "sample";

$connection = mysqli_connect($host, $username, $password, $database_name) 
                                                or die ('Could not connect: '. mysqli_error());


$result = mysqli_query($connection, "SELECT * from user")
                                     or die ('Invalid query: '. mysqli_error());

while($row = mysqli_fetch_assoc($result)) {
    echo $row['firstname'] . "\n";
}

mysqli_close($connection);
?>