<?php
namespace app\views;

class View
{
    public function showHome() {
        require_once ('HomeView.html');
    }

    public function showAccount() {
        require_once ('AccountView.html');
    }
}