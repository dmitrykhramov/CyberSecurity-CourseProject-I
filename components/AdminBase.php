<?php

/*
 * Abstract class AdminBase contains common logic for controllers,
 * used in the admin panel
 */
abstract class AdminBase 
{

    //Checks if user is admin
    public static function checkAdmin()
    {
        // Check if the user is logged, if not he will be redirected to log in
        $userId = User::checkLogged();
        
        // Get info about current user
        $user = User::getUserById($userId);

        // If he is an admin type, give him access
        if ($user['usertype'] == '1' || $user['usertype'] == '2') {
            return true;
        }
        
        // If not finish with access denied
        die('Access denied');
    }

}