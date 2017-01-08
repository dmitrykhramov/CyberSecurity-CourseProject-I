<?php

class MovieController {
    
    // Action for watching movie details
    public function actionMovieDetail($MovieId) {
        
        // Get cattegories for left menu
        $categories = Category::getCategoriesList();
        
        // Get info about the movie 
        $movie = Movie::getMovieById($MovieId);
        
        // Get all the actors
        $role = Role::getRoles();
        
        // Connect view
        require_once(ROOT . '/views/movie/movieDetail.php');
        return true;
    }
    
    // Action for watching list of movies
    public function actionList() {
        
        $allmovies = Movie::getMovieList();
        $role = Role::getRoles();
                        
        require_once(ROOT . '/views/lists/movielist.php');
    }
    
}
