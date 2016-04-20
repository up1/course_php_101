<?php
class EmployeeTest extends PHPUnit_Extensions_Database_TestCase {

    private $pdo;

    public function __construct($name = null, array $data = [], $dataName = ''){
        parent::__construct($name, $data, $dataName);
        $this->pdo = $this->getPDO();
        $this->createTable($this->pdo);
    }

    private function getPDO() {
        $pdo = new PDO('sqlite::memory:');
        return $pdo;
    }

    private function createTable(PDO $pdo){
        $query = '
            CREATE TABLE employee (
                id INT PRIMARY KEY,
                firstname VARCHAR(50),
                lastname VARCHAR(50)
            );
        ';
        $pdo->query($query);
    }
    
    public function getConnection(){
        return $this->createDefaultDBConnection($this->pdo);
    }

    public function getDataSet(){
        return new PHPUnit_Extensions_Database_DataSet_YamlDataSet(
            dirname(__FILE__)."/data/employee.yml"
        );
    }

    public function testCountAllEmployeeShouldBe2() {
        $employeeDAO = new EmployeeDAO();
        $employeeDAO->setDatabaseConnection($this->pdo);
        $allEmployee = $employeeDAO->countAll();
        $this->assertEquals(2, $allEmployee);
    }

}
?>