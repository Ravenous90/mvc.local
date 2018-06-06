<?php
namespace app\controllers;

use app\models\HomeModel;
use app\views\View;

class HomeController
{
    public function __construct()
    {
        $showHome  = new View();
        $showHome -> showHome();

        echo "This is HomeController<br>";
    }

    public function actionGuide()
    {
        $showHome  = new View();
        $showHome -> showHome();

        echo "You have called method actionGuide from HomeController, here we may call any data from HomeModel";
    }

    public function actionHelp()
    {
        $showHome  = new View();
        $showHome -> showHome();

        echo "You have called method actionHelp from HomeController, here we may call any data from HomeModel";
    }

}