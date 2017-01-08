<?php

class CategoryController {
    
    public function actionCatItem($categoryId)
    {
        // List of categories for left menu
        $categories = Category::getCategoriesList();

        // List of movies in a category
        $categoryMovies = Movie::getMovieListByCategory($categoryId);

        // Connecting view
        require_once(ROOT . '/views/categories/categories.php');
        return true;
    }
    
}
