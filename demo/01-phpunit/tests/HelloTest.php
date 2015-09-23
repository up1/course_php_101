<?php
require("src/Hello.php");

class HelloTest extends PHPUnit_Framework_TestCase {
    public function testXXX() {
        $expectedResult = "Hello, somkiat";
        $hello = new Hello();

        $actualResult = $hello->sayHi("somkiat");

        $this->assertEquals($expectedResult, $actualResult);
    }
}
?>