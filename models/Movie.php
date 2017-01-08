<?php

class Movie {
    
    // Number of default showed movies
    const SHOW_BY_DEFAULT = 9;
    
    // Returns an array of last added movies
    public static function getLatestMovies($count = self::SHOW_BY_DEFAULT) {
        
        // Connection with database
        $db = DataBase::getConnection();
                
        $sql = 'SELECT movieCode, title, image, catID, movieDesc '
                . 'FROM movie '
                . 'ORDER BY movieCode DESC '
                . 'LIMIT :count';
        
        // Using prepared request
        $result = $db->prepare($sql);
        $result->bindParam(':count', $count, PDO::PARAM_INT);

        // Show that want to get data as an array
        $result->setFetchMode(PDO::FETCH_ASSOC);
        
        // Execution of command
        $result->execute();
        
        // Getting and returning the result
        $i = 0;
        $movieList = array();
        
        while($row = $result->fetch()) {
            $movieList[$i]['movieCode'] = $row['movieCode'];
            $movieList[$i]['title'] = $row['title'];
            $movieList[$i]['image'] = $row['image'];
            $movieList[$i]['catID'] = $row['catID'];
            $movieList[$i]['movieDesc'] = $row['movieDesc'];
            $i++;
        }
        
        return $movieList;
    }
    
    public static function getMostPopularMovies() {
        
        // Connection with database
        $db = DataBase::getConnection();
                
        $sql = 'SELECT movieCode, title, image, year '
                . 'FROM movie '
                . 'WHERE popular = "1" '
                . 'ORDER BY movieCode DESC ';
        
        // Using prepared request
        $result = $db->prepare($sql);
        
        // Show that want to get data as an array
        $result->setFetchMode(PDO::FETCH_ASSOC);
        
        // Execution of command
        $result->execute();
        
        // Getting and returning the result
        $i = 0;
        $movieList = array();
        
        while($row = $result->fetch()) {
            $movieList[$i]['movieCode'] = $row['movieCode'];
            $movieList[$i]['title'] = $row['title'];
            $movieList[$i]['image'] = $row['image'];
            $movieList[$i]['year'] = $row['year'];
            $i++;
        }
        
        return $movieList;
    }
    
    // Returns an array of all movies A-Z
    public static function getMovieList() {
        
        $db = DataBase::getConnection();
                
        $sql1 = 'SELECT m.movieCode, title, image, movieDesc, name, year '
                . 'FROM movie m, categories c '
                . 'WHERE m.catID = c.catId '
                . 'ORDER BY title ';
                                
        $result1 = $db->prepare($sql1);
        $result1->setFetchMode(PDO::FETCH_ASSOC);
        $result1->execute();
                
        $i = 0;
        $movieList = array();
        
        while($row = $result1->fetch()) {
            $movieList[$i]['movieCode'] = $row['movieCode'];
            $movieList[$i]['title'] = $row['title'];
            $movieList[$i]['image'] = $row['image'];
            $movieList[$i]['movieDesc'] = $row['movieDesc'];
            $movieList[$i]['name'] = $row['name'];
            $movieList[$i]['year'] = $row['year'];
                        
            $i++;
        }
        
        return $movieList;
    }
    
    // Returns an array of movies for a specific category     
    public static function getMovieListByCategory($categoryId)
    {
                 
        $db = DataBase::getConnection();

        $sql = "SELECT movieCode, title, image FROM movie "
                . "WHERE catID = :categoryId "
                . "ORDER BY title";
        
        $result = $db->prepare($sql);
        $result->bindParam(':categoryId', $categoryId, PDO::PARAM_INT);
        $result->setFetchMode(PDO::FETCH_ASSOC);
        $result->execute();
        
        $i = 0;
        $movies = array();
        
        while ($row = $result->fetch()) {
            $movies[$i]['movieCode'] = $row['movieCode'];
            $movies[$i]['title'] = $row['title'];
            $movies[$i]['image'] = $row['image'];
            $i++;
        }
        return $movies;
    }
    
    // Returns info about one specified movie
    public static function getMovieById($id)
    {
        $db = DataBase::getConnection();

        $sql = 'SELECT * FROM movie m, categories c, role r, artist a WHERE m.catID = c.catId AND r.movieCode = m.movieCode AND r.artistId = a.artistId  AND m.movieCode = :id';

        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);

        $result->setFetchMode(PDO::FETCH_ASSOC);

        $result->execute();

        return $result->fetch();
    }
    
    public static function deleteMovieById($id)
    {
        $db = DataBase::getConnection();

        $sql = 'DELETE FROM movie WHERE movieCode = :id';

        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        return $result->execute();
    }
    
    public static function createMovie($options)
    {
        $db = DataBase::getConnection();

        $sql = 'INSERT INTO movie '
                . '(title, image, catID, movieDesc, year)'
                . 'VALUES '
                . '(:title, :image, :catID, :movieDesc, :year)';

        $result = $db->prepare($sql);
        $result->bindParam(':title', $options['title'], PDO::PARAM_STR);
        $result->bindParam(':image', $options['image'], PDO::PARAM_STR);
        $result->bindParam(':movieDesc', $options['movieDesc'], PDO::PARAM_STR);
        $result->bindParam(':catID', $options['catID'], PDO::PARAM_INT);
        $result->bindParam(':year', $options['year'], PDO::PARAM_INT);
        if ($result->execute()) {
            
            return $db->lastInsertId();
        }
        return 0;
    }
    
    public static function updateMovieById($id, $options)
    {
        $db = DataBase::getConnection();

        $sql = "UPDATE movie
            SET 
                title = :title, 
                catID = :catID, 
                movieDesc = :movieDesc, 
                year = :year,
                image = :image
            WHERE movieCode = :id";

        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        $result->bindParam(':title', $options['title'], PDO::PARAM_STR);
        $result->bindParam(':movieDesc', $options['movieDesc'], PDO::PARAM_STR);
        $result->bindParam(':catID', $options['catID'], PDO::PARAM_INT);
        $result->bindParam(':year', $options['year'], PDO::PARAM_INT);
        $result->bindParam(':image', $options['image'], PDO::PARAM_STR);
        return $result->execute();
    }
    
    public static function getImage($id)
    {
        // No image title
        $noImage = 'no-movie.jpeg';

        // Path to the folder with images
        $path = '/template/images/movies/';

        // Path to the image of the movie
        $pathToMovieImage = $path . $id . '.jpg';

        if (file_exists($_SERVER['DOCUMENT_ROOT'].$pathToMovieImage)) {
            // If image exists
            // Return the path to it
            return $pathToMovieImage;
        }

        // Return path to no image
        return $path . $noImage;
    }
       
}
