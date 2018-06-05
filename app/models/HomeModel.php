<?php
namespace app\models;

class HomeModel
{
    public $age = '';
    public $phone = '';
    public $info = '';

    public function __construct ()
    {
        $this->age = $_POST['age'];
        $this->phone = $_POST['phone'];
        $this->info = $_POST['info'];
    }

    public function __conasduct ()
    {
        $this->age = $_POST['age'];
        $this->phone = $_POST['phone'];
        $this->info = $_POST['info'];
    }
}