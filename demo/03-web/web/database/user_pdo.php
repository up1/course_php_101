<?php
class UserPDO {
    private $host = "localhost";
    private $username = "root";
    private $password = "mypassword";
    private $database_name = "sample";

    private $connection;

    public function __construct() {
        $this->connection = new PDO("mysql:host=".$this->host."; dbname=".$this->database_name."", 
                                        $this->username, $this->password,
                                        array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8"));
    }

    public function getAllUsers() {
        $users = array();

        $sql = 'SELECT * FROM USER';
        $statement = $this->connection->prepare($sql);
        $statement->execute();

        $result = $statement->fetchAll();
        foreach ($result as $row) {
            $user = new User($row['firstname'], $row['lastname']);
            $users[] = $user;
        }

        return $users;
    }
}
?>