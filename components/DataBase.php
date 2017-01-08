<?php

class DataBase {
    
    // Connect with database
    public static function getConnection() {
        
        // get database parameters from db_params.php
        $paramPath = ROOT . '/config/db_params.php';
        $params = include($paramPath);
        
        // Make connection, make ojbect of PDO class 
        try {      
        $db = new PDO("mysql:host={$params['host']};dbname={$params['dbname']}", $params['user'], $params['password']);
        //"mysql:host={$params['host']};dbname={$params['dbname']}"  is data sourse name
        //'driver:host;DBname', 'user', 'password'
        
        $db -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
        //set up property
        }
        catch (PDOException $error) {
            die('Database problem.');
        }
        
        return $db;  //return PDO class object
        
    }
}
