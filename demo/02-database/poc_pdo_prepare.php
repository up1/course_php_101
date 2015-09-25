<?php
$host = "localhost";
$username = "root";
$password = "mypassword";
$database_name = "shop";

$connection = new PDO("mysql:host=".$host."; dbname=".$database_name."", 
                                        $username, $password,
                                        array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8"));

$sql = 'SELECT * FROM USER WHERE id = :user_id';
$statement = $connection->prepare($sql);
$statement->execute(array(':user_id' => 1));

$result = $statement->fetchAll();
foreach ($result as $row) {
    echo $row['firstname'] . "\n";
}
?>