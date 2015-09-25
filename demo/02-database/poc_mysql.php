<?php
$host = "localhost";
$username = "root";
$password = "mypassword";
$database_name = "shop";

$connection = mysql_connect($host, $username, $password) 
                                                or die ('Could not connect: '. mysql_error());

mysql_select_db($database_name)
       or die ('Could not select sample database');

$result = mysql_query("SELECT * from user", $connection)
                                     or die ('Invalid query: '. mysql_error());

while($row = mysql_fetch_assoc($result)) {
    echo $row['firstname'] . "\n";
}

mysql_close($connection);
?>