<?php
/**
 * Created by PhpStorm.
 * User: dtomchys
 * Date: 7/28/18
 * Time: 9:33 PM
 */

class LoginModel
{
    private function setSession($userId) {
            $_SESSION['user'] = $userId;
    }

    public function getLoggedIn($login, $password, $activation) {
        $db = DataBase::getConnect();

        $result = $db->prepare('SELECT * FROM users WHERE username = :name 
        AND password = :pass AND active = :act');
        $result->bindParam(':name', $login, PDO::PARAM_STR);
        $result->bindParam(':pass', $login, PDO::PARAM_STR);
        $result->bindParam(':act', $login, PDO::PARAM_STR);

    }
}