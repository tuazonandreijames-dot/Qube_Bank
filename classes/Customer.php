
<?php
class Customer {
    public $firstname;
    public $lastname;
    public $accounts;

    public function __construct($firstname, $lastname, $accounts = []) {
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->accounts = $accounts;
    }

    public function getFullName() {
        return $this->firstname . ' ' . $this->lastname;
    }
}