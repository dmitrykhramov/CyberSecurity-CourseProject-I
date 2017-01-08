<?php


class AdminMovieController extends AdminBase {
    
    // Action for page "Control movies"
    public function actionIndex()
    {
        // Verifying access
        self::checkAdmin();

        // Get the list of movies
        $movieList = Movie::getMovieList();

        // Connecting view
        require_once(ROOT . '/views/admin_movie/index.php');
        return true;
    }

    // Action for page "Add movie"
    public function actionCreate()
    {
        self::checkAdmin();

        $categoriesList = Category::getCategoriesList();
        $artistList = Artist::getArtistList();

        // Processing forms
        if (isset($_POST['submit'])) {
            // If the form is submitted
            // Get the data from the form
            $options['title'] = $_POST['title'];
            $options['catID'] = $_POST['catID'];
            $options['movieDesc'] = $_POST['movieDesc'];
            $options['year'] = $_POST['year'];
            
            $errors = false;

            // Validation of the values
            if (!isset($options['title']) || empty($options['title']) || !isset($_POST['artistId'])) {
                $errors[] = 'Fill in the required fields';
            }

            if ($errors == false) {
                // If there are no errors
                // Add a new item
                $id = Movie::createMovie($options);
                
                // Adding artists who plays in this movie
                foreach ($_POST['artistId'] as $value) {
                    Role::createRole($id, $value);
                }
                

                // If an entry is added
                if ($id) {
                    // Verify if the image was loaded 
                    if (is_uploaded_file($_FILES["image"]["tmp_name"])) {
                        // If uploaded, move it to the desired folder, give a new name
                        move_uploaded_file($_FILES["image"]["tmp_name"], $_SERVER['DOCUMENT_ROOT'] . "/template/images/movies/{$id}.jpg");
                    }
                };
                
                $options['image'] = Movie::getImage($id);
                Movie::updateMovieById($id, $options);

                // Redirecte to the page control movies
                header("Location: /admin/movie");
            }
        }

        // Connect view
        require_once(ROOT . '/views/admin_movie/create.php');
        return true;
    }

    // Action for page "Edit movie"
    public function actionUpdate($id)
    {
        self::checkAdmin();

        $categoriesList = Category::getCategoriesList();
        $artistList = Artist::getArtistList();
        $roleList = Role::getRoles();

        $movie = Movie::getMovieById($id);

        if (isset($_POST['submit'])) {
            $options['title'] = $_POST['title'];
            $options['catID'] = $_POST['catID'];
            $options['movieDesc'] = $_POST['movieDesc'];
            $options['year'] = $_POST['year'];

            // Save changes
            if (Movie::updateMovieById($id, $options)) {


                if (is_uploaded_file($_FILES["image"]["tmp_name"])) {

                    move_uploaded_file($_FILES["image"]["tmp_name"], $_SERVER['DOCUMENT_ROOT'] . "/template/images/movies/{$id}.jpg");
                }
            }
            
            $options['image'] = Movie::getImage($id);
            Movie::updateMovieById($id, $options);
            
            foreach ($_POST['artistId'] as $value) {
                Role::updateRole($movie['movieCode'], $value);
            }

            header("Location: /admin/movie");
        }

        require_once(ROOT . '/views/admin_movie/update.php');
        return true;
    }

    // Action for page "Delete movie"
    public function actionDelete($id)
    {
        self::checkAdmin();

        if (isset($_POST['submit'])) {
            
            Role::deleteRoleMovieById($id);
            
            Movie::deleteMovieById($id);

            header("Location: /admin/movie");
        }

        require_once(ROOT . '/views/admin_movie/delete.php');
        return true;
    }

}
