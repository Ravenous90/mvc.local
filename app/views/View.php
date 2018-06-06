<?php
namespace app\views;

class View
{
    public function showHome() {
        require_once ('HomeView.html');
    }

    public function showAbout() {
        require_once ('AboutView.html');
    }

    public function showAccount() {
        require_once ('AccountView.html');
    }

    public function showItems() {
        require_once ('ItemsView.html');
    }

}