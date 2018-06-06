<?php
namespace app\controllers;

use app\models\AccountModel;
use app\views\View;

class AccountController
{
    public function __construct()
    {
        $showAccount  = new View();
        $showAccount -> showAccount();
    }

    public function actionSignin()
    {
        $getAccountModel = new AccountModel();


        //$getAccountModel->validateUsername();


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

    public function validateUsername()
    {

    }
}
