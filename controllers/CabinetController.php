<?php

class CabinetController
{

    // Action for the index page of cabinet
    public function actionIndex()
    {
        // Get the user ID of the session
        $userId = User::checkLogged();
        
        // Get information about the user from DB
        $user = User::getUserById($userId);
                
        require_once(ROOT . '/views/cabinet/index.php');

        return true;
    }  
    
    // Action for page edit info
    public function actionEdit()
    {
        // Get the user ID of the session
        $userId = User::checkLogged();
        
        // Get information about the user from DB
        $user = User::getUserById($userId);
        
        // Fill variables for form fields
        $name = $user['firstName'];
        $password = $user['password'];
                
        $result = false;     

        if (isset($_POST['submit'])) {
            
            // If the form is submitted
            // We get data from the edit form
            $name = $_POST['name'];
            $password = $_POST['password'];

//            $salt = "sklvjnslknlkdns";
//            $encryptedPassword = $password.$salt;
//            $encryptedPassword = sha1($encryptedPassword);
            
            $errors = false;
            
            // Validation
            if (!User::checkUserName($name)) {
                $errors[] = 'Name should not be less than 2 letters';
            }
            
            if (!User::checkPassword($password)) {
                $errors[] = 'Password should not be less than 6 characters';
            }
            
            // If no errors - save changes
            if ($errors == false) {
                $result = User::edit($userId, $name, $password);
            }

        }

        require_once(ROOT . '/views/cabinet/edit.php');

        return true;
    }

}