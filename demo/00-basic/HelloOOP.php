<?php

class Hello {
    public function __construct() {
        echo "Call constructor\n";
    }

    public function __destruct() {
        echo "Call destructor\n";
    }
    
}

new Hello();

?>

