<?php
/**
 * Created by PhpStorm.
 * User: askolotii
 * Date: 04.06.2018
 * Time: 16:24
 */

namespace app\controllers;


class Route
{
    public $route;
    public $route_function;

    public function __construct()
    {
        $route = stristr($_GET['route'], '/', 1);
        echo '<br>ROUTE = ' . $route;

        $route_function = substr(stristr($_GET['route'], '/'), 1);
        echo "<br>ROUTE FUNCTION = " . $route_function;

        $this->route = $route;
        $this->route_function = $route_function;
    }

    public function callControllers($route, $route_function)
    {
        echo "<br> FROM callControler ROUTE = " . $this->route;
        echo "<br> FROM callControler ROUTE_FUNCTION = " . $this->route_function;

        switch ($this->route) {
            case 'home':
                switch ($this->route_function) {
                    case 'main':
                        $home = new Home();
                        break;

                }
            case 'account':
                switch ($this->route_function) {
                    case 'signin':
                        $account = new Account();
                        $account->signIn();
                        break;
                    case 'signup':
                        $account = new  Account();
                        $account->signUp();
                        break;
                    case 'signout':
                        $account = new Account();
                        $account->signOut();
                        break;

                }
            case 'contacts':
                switch ($this->route_function) {
                    case 'usa':
                        $contacts = new Contact();
                        $contacts->usa();
                        break;
                    case 'japan':
                        $contacts = new  Contact();
                        $contacts->japan();
                        break;
                }


        }
    }
}