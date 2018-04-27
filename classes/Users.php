<?php
// get all Classes
spl_autoload_register(function($className) {
    require $className . '.php';
});

class Users extends AbstractDBClass
{
    private $ID;
    private $firstName;
    private $lastName;
    private $age;
    private $username;
    private $email;
    private $password;
    private $jobTitle;
    private $salary;
    private $tax;


    // abstract
    protected static $tableName = 'users';
    protected static $tableSchema = array(
        'firstName'     => self::DATA_TYPE_STR,
        'lastName'      => self::DATA_TYPE_STR,
        'age'           => self::DATA_TYPE_INT,
        'username'      => self::DATA_TYPE_STR,
        'email'         => self::DATA_TYPE_STR,
        'password'      => self::DATA_TYPE_STR,
        'jobTitle'      => self::DATA_TYPE_STR,
        'salary'        => self::DATA_TYPE_INT,
        'tax'           => self::DATA_TYPE_INT
    );
    protected static $primaryKey = "ID";



    // Filter Date
    private function filterStrings($string) {
        return trim(ucfirst(ucwords(strtolower(filter_var(filter_var($string, FILTER_SANITIZE_STRING), FILTER_SANITIZE_FULL_SPECIAL_CHARS)))));
    }
    private function filterEmail($email) {
        return trim(strtolower(filter_var(filter_var(filter_var(filter_var($email, FILTER_SANITIZE_STRING), FILTER_SANITIZE_FULL_SPECIAL_CHARS), FILTER_SANITIZE_EMAIL), FILTER_SANITIZE_URL)));
    }
    private function filterPassword($password) {
        return trim(strtolower(filter_var(filter_var(filter_var(filter_var($password, FILTER_SANITIZE_STRING), FILTER_SANITIZE_FULL_SPECIAL_CHARS), FILTER_SANITIZE_EMAIL), FILTER_SANITIZE_URL)));
    }
    private function filterNumber($number) {
        return trim(strtolower(filter_var(filter_var(filter_var(filter_var($number, FILTER_SANITIZE_STRING), FILTER_SANITIZE_FULL_SPECIAL_CHARS), FILTER_SANITIZE_EMAIL), FILTER_SANITIZE_URL)));
    }



    // Set Data
    public function setFirstName($var) {
        $this->firstName = $this->filterStrings($var);
    }
    public function setLastName($var) {
        $this->lastName = $this->filterStrings($var);
    }
    public function setAge($var) {
        $this->age = abs($this->filterNumber($var));
    }
    public function setUsername($var) {
        $this->username = $this->filterStrings($var);
    }
    public function setEmail($var) {
        $this->email = $this->filterEmail($var);
    }
    public function setPassword($var) {
        $this->password = MD5($this->filterPassword($var));
    }
    public function setjobTitle($var) {
        $this->jobTitle = $this->filterStrings($var);
    }
    public function setSalary($var) {
        $this->salary = abs($this->filterNumber($var));
    }
    public function setTax($var) {
        $this->tax = $this->filterNumber($var);
    }


    public function calcSalary() {
        return $this->salary - ($this->salary * $this->tax) / 100;
    }


    // Get Data
    public function __get($prop) {
        return $this->$prop;
    }

}