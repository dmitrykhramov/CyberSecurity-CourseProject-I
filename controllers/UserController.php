<?php

class UserController {
    
    // Action for page Log In 
    public function actionLogin()
    {
        // Variables for the form
        $username = '';
        $password = '';
        
        if (isset($_POST['submit'])) {
            // If form is sent - get info from it
            $username = $_POST['username'];
            $password = $_POST['password'];

//            $salt = "sklvjnslknlkdns";
//            $encryptedPassword = $password.$salt;
//            $encryptedPassword = sha1($encryptedPassword);
            
            $errors = false;
                        
            // Validation of fields
            if (!User::checkUserName($username)) {
                $errors[] = 'Incorrect username or password';
            }            
            
            if (!User::checkPassword($password)) {
                $errors[] = 'Incorrect username or password';
            }
            
            // Check if the user exists
            $userId = User::checkUserData($username, $password);
            
            if ($userId == false) {
                
                // If the data is incorrect - show error
                $errors[] = 'Incorrect information to access the site';
            } 
            
            else {
                // If the data is correct, remember user (session)
                User::auth($userId);
                
                // Redirects the user to the closed part - cabinet 
                header("Location: /cabinet/"); 
            }

        }

        require_once(ROOT . '/views/user/login.php');

        return true;
    }
    
    // Delete the user data from the session
    public function actionLogout()
    {
        // Remove the user from the session
        unset($_SESSION["user"]);
        
        // Redirect to the main page
        header("Location: /");
    }
    
    
     public function actionRegister()
    {
        $firstName = '';
        $lastName = '';
        $userName = '';
        $password = '';
        $usertype = 3;
        $result = false;
        
        if (isset($_POST['submit'])) {
            
            $firstName = $_POST['firstName'];
            $lastName = $_POST['lastName'];
            $userName = $_POST['userName'];
            $password = $_POST['password'];

//            $salt = "sklvjnslknlkdns";
//            $encryptedPassword = $password.$salt;
//            $encryptedPassword = sha1($encryptedPassword);
            
            $errors = false;
            
            if (!User::checkUserName($firstName) || !User::checkUserName($lastName) || !User::checkUserName($userName)) {
                $errors[] = 'All the fields should have at least 2 characters.'; 
            }
            
            if (!User::checkPassword($password)) {
                $errors[] = 'Password should be more than 6 characters.'; 
            }
            
            if (User::checkUserNameExists($userName)) {
                $errors[] = 'User with the same username already exists.'; 
            }
            
            if ($errors == false) {
                $result = User::register($firstName, $lastName, $userName, $password, $usertype);
            }
                
        }        
                
        require_once(ROOT . '/views/user/register.php'); 
        return true;
    }
}

