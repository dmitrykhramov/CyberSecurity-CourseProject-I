<?php

class User {
    
    // Check if the user exists with the specified $username and $password
    
    public static function checkUserData($username, $password)
    {
        $db = DataBase::getConnection();

        $sql = 'SELECT * FROM user WHERE username = :username AND password = :password';

        $result = $db->prepare($sql);
        $result->bindParam(':username', $username, PDO::PARAM_INT);
        $result->bindParam(':password', $password, PDO::PARAM_STR);
        $result->execute();

        $user = $result->fetch();
        if ($user) {
            return $user['userId'];
        }

        return false;
    }
    
    public static function checkUserName($name)
    {
        if (strlen($name) >= 2) {
            return true;
        }
        return false;
    }

    public static function checkPassword($password)
    {
        if (strlen($password) >= 6) {
            return true;
        }
        return false;
    }
    
    // Remember the user
    public static function auth($userId)
    {
        $_SESSION['user'] = $userId;
    }
    
    public static function checkLogged()
    {
        // If the session exists, return the user ID
        if (isset($_SESSION['user'])) {
            return $_SESSION['user'];
        }

        header("Location: /user/login");
    }
    
    public static function isGuest()
    {
        if (isset($_SESSION['user'])) {
            return false;
        }
        return true;
    }
    
    public static function isAdmin()
    {
        if (isset($_SESSION['user'])) {
            $user = User::getUserById($_SESSION['user']);
            if ($user['usertype'] == 3) {
                return false;
            }
        }
        return true;
    }
    
    public static function getUserById($id)
    {
        if ($id) {
            $db = DataBase::getConnection();
            $sql = 'SELECT * FROM user WHERE userId = :id';

            $result = $db->prepare($sql);
            $result->bindParam(':id', $id, PDO::PARAM_INT);

            // Specify to get the data into an array
            $result->setFetchMode(PDO::FETCH_ASSOC);
            $result->execute();

            return $result->fetch();
        }
    }
    
    // Edit user data
    public static function edit($id, $name, $password)
    {
        $db = DataBase::getConnection();
        
        $sql = "UPDATE user 
            SET firstName = :name, password = :password 
            WHERE userId = :id";
        
        $result = $db->prepare($sql);                                  
        $result->bindParam(':id', $id, PDO::PARAM_INT);       
        $result->bindParam(':name', $name, PDO::PARAM_STR);    
        $result->bindParam(':password', $password, PDO::PARAM_STR); 
        return $result->execute();
    }
    
    public static function checkEmail($email)
    {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return true;
        }
        return false;
    }
    
    public static function getUserList() {
        
        $db = DataBase::getConnection();
        $userList = array();
        
        $sql = 'SELECT * '
                . 'FROM user '
                . 'ORDER BY lastName ';
        
                        
        $result = $db->prepare($sql);
        $result->setFetchMode(PDO::FETCH_ASSOC);
        $result->execute();
                
        $i = 0;
        while($row = $result->fetch()) {
            $userList[$i]['userId'] = $row['userId'];
            $userList[$i]['firstName'] = $row['firstName'];
            $userList[$i]['lastName'] = $row['lastName'];
            $userList[$i]['username'] = $row['username'];
            $userList[$i]['password'] = $row['password'];
            $userList[$i]['usertype'] = $row['usertype'];
                        
            $i++;
        }
        
        return $userList;
    }
    
    public static function createUser($options)
    {
        $db = DataBase::getConnection();

        $sql = 'INSERT INTO user '
                . '(firstName, lastName, username, password, usertype)'
                . 'VALUES '
                . '(:firstName, :lastName, :username, :password, :usertype)';

        $result = $db->prepare($sql);
        $result->bindParam(':firstName', $options['firstName'], PDO::PARAM_STR);
        $result->bindParam(':lastName', $options['lastName'], PDO::PARAM_STR);
        $result->bindParam(':username', $options['username'], PDO::PARAM_STR);
        $result->bindParam(':password', $options['password'], PDO::PARAM_INT);
        $result->bindParam(':usertype', $options['usertype'], PDO::PARAM_INT);
        if ($result->execute()) {
            
            return $db->lastInsertId();
        }
        return 0;
    }
    
    public static function register($firstName, $lastName, $userName, $password, $usertype)
    {
        $db = DataBase::getConnection();

        $sql = 'INSERT INTO user '
                . '(firstName, lastName, username, password, usertype)'
                . 'VALUES '
                . '(:firstName, :lastName, :username, :password, :usertype)';

        $result = $db->prepare($sql);
        $result->bindParam(':firstName', $firstName, PDO::PARAM_STR);
        $result->bindParam(':lastName', $lastName, PDO::PARAM_STR);
        $result->bindParam(':username', $userName, PDO::PARAM_STR);
        $result->bindParam(':password', $password, PDO::PARAM_INT);
        $result->bindParam(':usertype', $usertype, PDO::PARAM_INT);
        
        return $result->execute();
    }
    
    public static function checkUserNameExists($userName)
    {
        $db = DataBase::getConnection();

        $sql = 'SELECT COUNT(*) FROM user WHERE username = :username';

        $result = $db->prepare($sql);
        $result->bindParam(':username', $userName, PDO::PARAM_STR);
        $result->execute();

        if ($result->fetchColumn())
            return true;
        return false;
    }
    
        
    public static function deleteUserById($id)
    {
        $db = DataBase::getConnection();

        $sql = 'DELETE FROM user WHERE userId = :id';

        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        return $result->execute();
    }
}
