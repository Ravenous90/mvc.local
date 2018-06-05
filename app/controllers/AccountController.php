<?php
namespace app\controllers;

use app\models\AccountModel;
use app\views\View;

class AccountController
{
    public function actionSignin()
    {
        $getAccountModel = new AccountModel();
        $getAccountModel -> getDataFromDb();

        $showAccount  = new View();
        $showAccount -> showAccount();
    }

    public function actionSignup()
    {
        $getAccountModel = new AccountModel();
        $getAccountModel ->setDataToDb();

        $showAccount  = new View();
        $showAccount -> showAccount();

    }

    public function actionSignout()
    {
        //TODO
    }

}