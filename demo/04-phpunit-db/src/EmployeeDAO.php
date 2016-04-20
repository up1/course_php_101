<?php
class EmployeeDAO {

    private $connection;

    function setDatabaseConnection($connection) {
        $this->connection = $connection;
    }
    function countAll() {
        $sql = "SELECT count(*) FROM employee";
        $result = $this->connection->prepare($sql); 
        $result->execute(); 
        $number_of_rows = $result->fetchColumn(); 
        $this->connection = null;
        return $number_of_rows;
    }
}
?>

