<?php
namespace app\controllers;

use app\models\HomeModel;
use app\views\View;

class HomeController
{
    public function actionMain()
    {
        $getHomeModel = new HomeModel();

        $showHome  = new View();
        $showHome -> showHome();
    }

    public function actionGuide()
    {
        $getHomeModel = new HomeModel();
        echo "You have called method actionGuide from HomeController";

        $showHome  = new View();
        $showHome -> showHome();
    }

    public function actionResult()
    {
        $getHomeModel = new HomeModel();
        echo "You have called method actionResult from HomeController";

        $showHome  = new View();
        $showHome -> showHome();
    }

}