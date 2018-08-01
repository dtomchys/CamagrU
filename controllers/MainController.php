<?php
/**
 * Created by PhpStorm.
 * User: dtomchys
 * Date: 7/31/18
 * Time: 9:36 AM
 */

class MainController
{
        private $content_page;

        public function actionIndex($path_content = null) {
            if (!isset($path_content)) {
                $this->content_page = file_get_contents(ROOT.'/views/main.php');
            }
            else {
                $this->content_page = file_get_contents($path_content);
            }
            require_once ROOT . '/views/default.php';
        }
}