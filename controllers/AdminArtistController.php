<?php

class AdminArtistController extends AdminBase {
    
     // Action for page "Control artists"
    public function actionIndex()
    {
        // Verifying access
        self::checkAdmin();

        // Get the list of artists
        $artistList = Artist::getArtistList();

        // Connecting view
        require_once(ROOT . '/views/admin_artist/index.php');
        return true;
    }

    // Action for page "Add artist"
    public function actionCreate()
    {
        self::checkAdmin();
        
        $movieList = Movie::getMovieList();

        // Processing forms
        if (isset($_POST['submit'])) {
            // If the form is submitted
            // Get the data from the form
            $options['firstName'] = $_POST['firstName'];
            $options['lastName'] = $_POST['lastName'];
            $options['dateOfBirth'] = $_POST['dateOfBirth'];
            $options['nationality'] = $_POST['nationality'];
            $options['otherInfo'] = $_POST['otherInfo'];
                        
            $errors = false;

            // Validation of fields
            if (!isset($options['firstName']) || empty($options['firstName']) || !isset($options['lastName']) || empty($options['lastName']) || !isset($_POST['movieCode'])) {
                $errors[] = 'Fill in the required fields';
            }

            if ($errors == false) {
                // If there are no errors
                // Add a new item
                $id = Artist::createArtist($options);
                
                // Adding movies in which this artist plays
                foreach ($_POST['movieCode'] as $value) {
                    Role::createRole($value, $id);
                }
                
                // If an entry is added
                if ($id) {
                    // Verify if the image was loaded 
                    if (is_uploaded_file($_FILES["artistImage"]["tmp_name"])) {
                        // If uploaded, move it to the desired folder, give a new name
                        move_uploaded_file($_FILES["artistImage"]["tmp_name"], $_SERVER['DOCUMENT_ROOT'] . "/template/images/movies/{$id}.jpg");
                    }
                };
                
                $options['artistImage'] = Artist::getImage($id);
                Artist::updateArtistById($id, $options);

                // Redirecte to the page control movies
                header("Location: /admin/artist");
            }
        }

        // Connect view
        require_once(ROOT . '/views/admin_artist/create.php');
        return true;
    }

    // Action for page "Edit movie"
    public function actionUpdate($id)
    {
        self::checkAdmin();
        
        $artist = Artist::getArtistById($id);

        if (isset($_POST['submit'])) {
            $options['firstName'] = $_POST['firstName'];
            $options['lastName'] = $_POST['lastName'];
            $options['dateOfBirth'] = $_POST['dateOfBirth'];
            $options['nationality'] = $_POST['nationality'];
            $options['otherInfo'] = $_POST['otherInfo'];

            // Save changes
            if (Artist::updateArtistById($id, $options)) {


                if (is_uploaded_file($_FILES["artistImage"]["tmp_name"])) {

                    move_uploaded_file($_FILES["artistImage"]["tmp_name"], $_SERVER['DOCUMENT_ROOT'] . "/template/images/movies/{$id}.jpg");
                }
            }
            $options['artistImage'] = Artist::getImage($id);
            Artist::updateArtistById($id, $options);

            header("Location: /admin/artist");
        }

        require_once(ROOT . '/views/admin_artist/update.php');
        return true;
    }

    // Action for page "Delete movie"
    public function actionDelete($id)
    {
        self::checkAdmin();

        if (isset($_POST['submit'])) {
            
            Role::deleteRoleArtistById($id);
            
            Artist::deleteArtistById($id);

            header("Location: /admin/artist");
        }

        require_once(ROOT . '/views/admin_artist/delete.php');
        return true;
    }
}
