<?php
$host = "localhost";
$username = "root";
$password = "mypassword";
$database_name = "shop";

$connection = new PDO("mysql:host=".$host."; dbname=".$database_name."", 
                                        $username, $password,
                                        array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8"));

$sql = "INSERT INTO employee (firstname, lastname)VALUES (:firstname, :lastname)";
$statement = $connection->prepare($sql);
$statement->execute(array(
                                    ':firstname' => 'somkiat',
                                    ':lastname' => 'puisungnoen'
                                    ));

$connection = null;
?>