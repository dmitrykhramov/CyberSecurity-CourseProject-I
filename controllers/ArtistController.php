<?php


class ArtistController {
    
    // Info about one artist
    public function actionArtistDetail($ArtistId) {
        
        $categories = Category::getCategoriesList();
        $artist = Artist::getArtistById($ArtistId);
        $role = Role::getRoles();
        
        require_once(ROOT . '/views/artist/artistDetail.php');
        return true;
    }
    
    // List of all artists
    public function actionList() {
        
        $allartists = array();
        $allartists = Artist::getArtistList();
        $role = Role::getRoles();
        
        require_once(ROOT . '/views/lists/artistlist.php');
    }
    
}
