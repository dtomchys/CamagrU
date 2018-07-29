<?php
/**
 * Created by PhpStorm.
 * User: dtomchys
 * Date: 7/28/18
 * Time: 8:58 PM
 */

include_once ROOT . '/models/LoginModel.php';

class LoginController
{
    public function actionIndex() {
        $model = new LoginModel();
        require_once ROOT . '/views/default.php';
    }
}