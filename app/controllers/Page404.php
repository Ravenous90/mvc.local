<?php
namespace app\controllers;

class Page404
{
    public function __construct()
    {
        require_once '../app/views/Page404View.html';
    }
}