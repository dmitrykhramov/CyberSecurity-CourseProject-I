<?php


class AdminController extends AdminBase {
    
    public function actionIndex()
    {
        // Verifying access
        self::checkAdmin();
        
        // Calling methods to decide which user type is admin
        $id = User::checkLogged();
        $user = User::getUserById($id); 

        require_once(ROOT . '/views/admin/index.php');
        return true;
    }
}
