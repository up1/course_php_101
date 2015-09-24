<?php
class User {
    private $id;
    private $firstname;
    private $lastname;

    public function __construct( $firstname, $lastname ) {
        $this->firstname = $firstname;
        $this->lastname = $lastname;
    }

    public function getFirstname() {
        return $this->firstname;
    }

    public function getLastname() {
        return $this->lastname;
    }
}
?>