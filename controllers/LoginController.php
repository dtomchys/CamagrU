<?php
/**
 * Created by PhpStorm.
 * User: dtomchys
 * Date: 7/28/18
 * Time: 8:58 PM
 */

include_once ROOT . '/models/LoginModel.php';
include_once ROOT. '/controllers/MainController.php';

class LoginController extends MainController
{
    public function actionViews() {
        $path = ROOT.'/views/login.php';
        MainController::actionIndex($path);
    }
    public function actionEnter() {
        echo 111;
    }
}