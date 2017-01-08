<?php

class Router {
   
    // Keeps array of routes
    private $routes;
    
    public function __construct(){
        
        // Path to the file with routes
        $routesPath = ROOT.'/config/routes.php';
        
        // Get routes from the file
        $this->routes = include($routesPath);
    }
    
    // Returns query string
    private function getURI(){
        if (!empty($_SERVER['REQUEST_URI'])) {
            return trim($_SERVER['REQUEST_URI'], '/');
        }
    }
        
        // Method for processing a request
        public function run(){
        
        // Get a query string    
        $uri = $this->getURI();        
                
        // Check this query in routes.php
        foreach ($this->routes as $uriPattern => $path) {
            
            // Compare uri and uriPattern
            if (preg_match("~$uriPattern~", $uri)) {
                
                // get an inside path from the external according to the rule
                $internalRoute = preg_replace("~$uriPattern~", $path, $uri);
                
                // Determine which controller and action
                // will handle the query
                $segments = explode('/', $internalRoute);
                $controllerName = ucfirst(array_shift($segments)).'Controller';
                $actionName = 'action'.ucfirst(array_shift($segments));
                
                $parameters = $segments;
                                
                // Connect files of class-controller
                $controllerFile = ROOT . '/controllers/' . $controllerName . '.php';
                
                if (file_exists($controllerFile)) {
                    include_once($controllerFile);
                }
                
                //Hide all warnings 
                error_reporting(E_ALL ^ E_WARNING); 
                
                // Call the $actionName method from class $controllerObject with required $parameters 
                $controllerObject = new $controllerName;
                $result = call_user_func_array(array($controllerObject, $actionName), $parameters);
                
                // If the method is called finish the work of router
                if ($result != null) {
                    break;
                }
            }
                        
        }
        
    }
}
