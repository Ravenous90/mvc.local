<?php
namespace app\controllers;

use app\models\ItemsModel;
use app\views\View;

class ItemsController
{
    public function __construct()
    {
        $showAbout  = new View();
        $showAbout -> showItems();

        echo "This is ItemsController<br>";
    }

}