<?php
/**
 * Created by PhpStorm.
 * User: dtomchys
 * Date: 7/28/18
 * Time: 7:01 PM
 */

    //1.GENERAL SETTINGS
    ini_set('display_errors',1);
    error_reporting(E_ALL);

    //2.INCLUDING SYSTEM FILES
    define('ROOT', dirname(__FILE__));
    require_once (ROOT.'/components/Router.php');
    //3.SET CONNECTION WITH BD
    require_once 'config/init_db.php';
    //4.CALL ROUTE
    session_start();
    $router = new Router();
    $router->run();