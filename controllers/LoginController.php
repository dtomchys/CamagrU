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
    private $error = array();
    private $model;

    public function actionViews() {

        $path = ROOT.'/views/login.php';
        if (isset($_POST['log']))
            $this->actionValidate();
        MainController::actionIndex($path);
    }
    private function actionValidate() {
        $this->model = new LoginModel();
        if (isset($_POST['log'])) {

        }
        unset($_POST);
    }
}