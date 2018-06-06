<?php
namespace app\controllers;

use app\models\AboutModel;
use app\views\View;

class AboutController
{
    public function __construct()
    {
        $showAbout  = new View();
        $showAbout -> showAbout();

        echo "This is AboutController<br>";
    }

    public function actionBusiness()
    {
        $showAbout  = new View();
        $showAbout -> showAbout();

        echo "You have called method actionBusiness from AboutController, here we may call any data from AboutModel";
    }

    public function actionRest()
    {
        $showAbout  = new View();
        $showAbout -> showAbout();

        echo "You have called method actionRest from AboutController, here we may call any data from AboutModel";
    }

}