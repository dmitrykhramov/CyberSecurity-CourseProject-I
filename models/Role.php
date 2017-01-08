<?php

class Role {
    
    public static function getRoles() {
        
        $db = DataBase::getConnection();
        $roles = array();
        
        $sql = 'SELECT firstName, lastName, r.movieCode, r.artistId, title '
                . 'FROM movie m, role r, artist a '
                . 'WHERE r.movieCode = m.movieCode AND r.artistId = a.artistId '
                . 'ORDER BY lastName';
                
                        
        $result = $db->prepare($sql);
        
        $result->setFetchMode(PDO::FETCH_ASSOC);
        
        $result->execute();
        
        $i = 0;
        
        while($row = $result->fetch()) {
            $roles[$i]['firstName'] = $row['firstName'];
            $roles[$i]['lastName'] = $row['lastName'];
            $roles[$i]['movieCode'] = $row['movieCode'];
            $roles[$i]['artistId'] = $row['artistId'];
            $roles[$i]['title'] = $row['title'];
            $i++;
        }
        
        return $roles;
    }
    
    public static function createRole($id, $value) {
        
        $db = DataBase::getConnection();
        $roles = array();
        
        $sql = 'INSERT INTO role '
                . '(movieCode, artistId)'
                . 'VALUES '
                . '(:movieCode, :artistId)';

        $result = $db->prepare($sql);
        $result->bindParam(':movieCode', $id, PDO::PARAM_INT);
        $result->bindParam(':artistId', $value, PDO::PARAM_INT);
                       
        return $result->execute();
    }
    
    public static function updateRole($id, $value) {
        
        $db = DataBase::getConnection();
        $roles = array();
        
        $sql = 'UPDATE role ' 
                . 'SET artistId = :artistId ' 
                . 'WHERE movieCode = :id';

        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        $result->bindParam(':artistId', $value, PDO::PARAM_INT);
                       
        return $result->execute();
    }
    
    public static function deleteRoleMovieById($id)
    {
        $db = DataBase::getConnection();

        $sql = 'DELETE FROM role WHERE movieCode = :id';

        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        return $result->execute();
    }
    
    public static function deleteRoleArtistById($id)
    {
        $db = DataBase::getConnection();

        $sql = 'DELETE FROM role WHERE artistId = :id';

        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        return $result->execute();
    }
}
