<?php

class AdminUserController extends AdminBase {
    
    public function actionIndex()
    {
        // Verifying access
        self::checkAdmin();

        // Get the list of movies
        $userList = User::getUserList();

        // Connecting view
        require_once(ROOT . '/views/admin_user/index.php');
        return true;
    }

    // Action for page "Add movie"
    public function actionCreate()
    {
        self::checkAdmin();
        
        $userList = User::getUserList();

        // Processing forms
        if (isset($_POST['submit'])) {
            // If the form is submitted
            // Get the data from the form
            $options['firstName'] = $_POST['firstName'];
            $options['lastName'] = $_POST['lastName'];
            $options['username'] = $_POST['username'];
            $options['password'] = $_POST['password'];
            $options['usertype'] = $_POST['usertype'];
            
            $errors = false;

            // Validation
            if (!isset($options['firstName']) || empty($options['firstName']) || !isset($options['lastName']) || empty($options['lastName']) || !isset($options['username']) || empty($options['username'])) {
                $errors[] = 'Fill in the required fields';
            }

            if ($errors == false) {
                // If there are no errors
                // Add a new item
                $id = User::createUser($options);
                                
                // Redirecte to the page control movies
                header("Location: /admin/user");
            }
        }

        // Connect view
        require_once(ROOT . '/views/admin_user/create.php');
        return true;
    }

    
    // Action for page "Delete movie"
    public function actionDelete($id)
    {
        self::checkAdmin();

        if (isset($_POST['submit'])) {
                                
            User::deleteUserById($id);

            header("Location: /admin/user");
        }

        require_once(ROOT . '/views/admin_user/delete.php');
        return true;
    }
}
