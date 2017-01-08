<?php

class SiteController {
    
    // Action for main page
    public function actionIndex() {
        
        $categories = Category::getCategoriesList();
        
        $latestMovies = Movie::getLatestMovies();
        
        $sliderMovies = Movie::getMostPopularMovies();
                      
        require_once(ROOT . '/views/site/index.php');
                
        return true;
    }
    
    // Action for page contacts
    public function actionContact() {
                
        // Variables for the form
        $userEmail = '';
        $userText = '';
        $subject = '';
        $result = false;
        
        if (isset($_POST['submit'])) {

            try
            {
                // Run CSRF check, on POST data, in exception mode, for 10 minutes, in one-time mode.
                NoCSRF::check( 'csrf_token', $_POST, true, 60*10, false );

                // If form is sent get info from the form
                $userEmail = htmlspecialchars($_POST['userEmail']);
                $userText = htmlspecialchars($_POST['userText']);
                $subject = htmlspecialchars($_POST['Subject']);

                $errors = false;

                // Validation
                if (!User::checkEmail($userEmail)) {
                    $errors[] = 'Incorrect email';
                }

                // If no errors - send e-mail to admin
                if ($errors == false) {
                    $adminEmail = 'dmitrii.hramov@mail.ru';
                    $message = "Text: {$userText}. From {$userEmail}";
                    $result = mail($adminEmail, $subject, $message);
                    $result = true;
                }
            }
            catch ( Exception $e )
            {
                // CSRF attack detected
            }


        }

        $token = NoCSRF::generate( 'csrf_token' );
        
        require_once(ROOT . '/views/site/contact.php');
        
        return true;
    }
    
    public function actionSearch() {
                
        if (isset($_POST['search'])) {
        
            $words = $_POST['words'];
            $table = $_POST['filter'];
            
            $errors = false;
            
             if (empty($words)) {
                $errors[] = 'Empty request was sent'; 
            }
            
            else if (strlen($words) < 2 || strlen($words) > 64) {
                $errors[] = 'Search request should be from 3 to 64 characters'; 
            }
                       
            else {
                $searchResults = Search::getSearch($words, $table);
            }
                
        }
                 
        require_once(ROOT . '/views/search/index.php');
                        
        return true;
    }
    
    
}
