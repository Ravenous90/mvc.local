<?php

namespace app\models;

class AccountModel
{
    public $name = '';
    public $email = '';
    public $password = '';

    public function __construct()
    {
        $this->name = $_POST['name'];
        $this->email = $_POST['email'];
        $this->password = $_POST['password'];
    }

    public function setDataToDb()
    {
        $pdo = DB::getInstance()->PDO();

        $stmt_set = $pdo->prepare("INSERT INTO test (name, email, password) VALUES (:name, :email, :password)");
        $stmt_set->execute(array('name' => $this->name,
            'email' => $this->email,
            'password' => $this->password
        ));
    }

    public function getDataFromDb()
    {
        $pdo = DB::getInstance()->PDO();

        $stmt_get = $pdo->prepare("SELECT * FROM test WHERE name= ?");
        $stmt_get->execute(array($this->name));
        $get_array = $stmt_get->fetch(\PDO::FETCH_ASSOC);
        if (!empty($get_array)) {
            print_r($get_array);
        } else {
            echo "There are no account with name = " . $this->name;
        }

    }
}