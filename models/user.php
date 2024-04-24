<?php

require_once 'utils/db.php';
class User {
    public $id;
    public $name;
    public $phone;
    public $email;
    public $password;
    public $is_admin;

    public function __construct($id,$name, $phone, $email, $password, $is_admin = 0) {
        $this->id = $id;
        $this->name = $name;
        $this->phone = $phone;
        $this->email = $email;
        $this->password = $password;
        $this->is_admin = $is_admin;
    }

    // Getter methods
    public function getId() {
        return $this->id;
    }

    public function getName() {
        return $this->name;
    }

    public function getPhone() {
        return $this->phone;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getPassword() {
        return $this->password;
    }

    public function isAdmin() {
        return $this->is_admin;
    }

    public static function isAuthorized($email,$password){
        $userResult = executeQuery("SELECT * FROM users WHERE email='$email' AND password='$password'");
        if($userResult->num_rows>0){
            $userRow = $userResult->fetch_assoc();
            return new User($userRow['id'],$userRow['name'], $userRow['phone'], $userRow['email'], $userRow['password'], $userRow['is_admin']);
        }
        return false;
    }

    public static function saveUser($name,$phone,$email,$password){
        return executeQuery("INSERT INTO users(name,phone,email,password) VALUES('$name','$phone','$email','$password')");

    }

}


?>