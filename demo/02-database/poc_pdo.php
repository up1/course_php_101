<?php
$host = "localhost";
$username = "root";
$password = "mypassword";
$database_name = "sample";

$connection = new PDO("mysql:host=".$host."; dbname=".$database_name."", 
                                        $username, $password,
                                        array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8"));

$sql = "SELECT * FROM USER";
$result = $connection->query($sql)->fetchAll();
foreach ($result as $row) {
    echo $row['firstname'] . "\n";
}
?>