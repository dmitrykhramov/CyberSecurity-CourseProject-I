<?php


class Artist {
    
    public static function getArtistList() {
        
        $db = DataBase::getConnection();
        $artistList = array();
        
        $sql = 'SELECT artistId, firstName, lastName, dateOfBirth, nationality, otherInfo, artistImage '
                . 'FROM artist '
                . 'ORDER BY lastName ';
                        
        $result = $db->prepare($sql);
        
        $result->setFetchMode(PDO::FETCH_ASSOC);
        
        $result->execute();
        
        $i = 0;
        
        while($row = $result->fetch()) {
            $artistList[$i]['artistId'] = $row['artistId'];
            $artistList[$i]['firstName'] = $row['firstName'];
            $artistList[$i]['lastName'] = $row['lastName'];
            $artistList[$i]['dateOfBirth'] = $row['dateOfBirth'];
            $artistList[$i]['nationality'] = $row['nationality'];
            $artistList[$i]['otherInfo'] = $row['otherInfo'];
            $artistList[$i]['artistImage'] = $row['artistImage'];
            $i++;
        }
        
        return $artistList;
    }
    
    public static function getArtistById($id)
    {
                           
        $db = DataBase::getConnection();

        $sql = 'SELECT * FROM artist WHERE artistId= :id';
        
        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        $result->setFetchMode(PDO::FETCH_ASSOC);
        $result->execute();

        return $result->fetch();
        
    }
    
    public static function deleteArtistById($id)
    {
        $db = DataBase::getConnection();

        $sql = 'DELETE FROM artist WHERE artistId = :id';

        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        return $result->execute();
    }
    
    public static function createArtist($options)
    {
        $db = DataBase::getConnection();

        $sql = 'INSERT INTO artist '
                . '(firstName, lastName, dateOfBirth, nationality, otherInfo)'
                . 'VALUES '
                . '(:firstName, :lastName, :dateOfBirth, :nationality, :otherInfo)';

        $result = $db->prepare($sql);
        $result->bindParam(':firstName', $options['firstName'], PDO::PARAM_STR);
        $result->bindParam(':lastName', $options['lastName'], PDO::PARAM_STR);
        $result->bindParam(':dateOfBirth', $options['dateOfBirth'], PDO::PARAM_INT);
        $result->bindParam(':nationality', $options['nationality'], PDO::PARAM_STR);
        $result->bindParam(':otherInfo', $options['otherInfo'], PDO::PARAM_STR);
        
        if ($result->execute()) {
            
            return $db->lastInsertId();
        }
        
        return 0;
    }
    
    public static function updateArtistById($id, $options)
    {
        $db = DataBase::getConnection();

        $sql = "UPDATE artist
            SET 
                firstName = :firstName, 
                lastName = :lastName, 
                dateOfBirth = :dateOfBirth, 
                nationality = :nationality,
                otherInfo = :otherInfo,
                artistImage = :artistImage
            WHERE artistId = :id";

        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        $result->bindParam(':firstName', $options['firstName'], PDO::PARAM_STR);
        $result->bindParam(':lastName', $options['lastName'], PDO::PARAM_STR);
        $result->bindParam(':dateOfBirth', $options['dateOfBirth'], PDO::PARAM_INT);
        $result->bindParam(':nationality', $options['nationality'], PDO::PARAM_STR);
        $result->bindParam(':otherInfo', $options['otherInfo'], PDO::PARAM_STR);
        $result->bindParam(':artistImage', $options['artistImage'], PDO::PARAM_STR);
        return $result->execute();
    }
    
    public static function getImage($id)
    {
        // No image title
        $noImage = 'no-artist.png';

        // Path to the folder with images
        $path = '/template/images/artists/';

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
