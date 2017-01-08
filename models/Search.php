<?php

class Search {
    
    
    public static function getSearch($words, $table) {
        
        $words = htmlspecialchars($words);
        $query_search = "";
        
        $array_words = explode(" ", $words);
        if ($table == "movie") {
            foreach ($array_words as $key => $value) {
                if (isset($array_words[$key - 1])) {
                    $query_search .= " OR ";
                }
                $query_search .= "title LIKE '%$value%'";
            }
        }
        
        else {
            foreach ($array_words as $key => $value) {
                if (isset($array_words[$key - 1])) {
                    $query_search .= ' OR ';
                }
                $query_search .= "firstName LIKE '%$value%' OR lastName LIKE '%$value%'";
            }
        }
        
        $sql = "SELECT * FROM $table WHERE $query_search";
        
        $db = DataBase::getConnection();
                
        $result = $db->prepare($sql);
        $result->setFetchMode(PDO::FETCH_ASSOC);
        $result->execute();
        
        $i = 0;
        $searchList = array();
        
        while ($row = $result->fetch()) {
            if ($row == NULL) {
                $searchList = NULL;
            }
            
            else {
                if ($table == "movie") {
                    $searchList[$i]['title'] = $row['title'];
                    $searchList[$i]['image'] = $row['image'];
                    $searchList[$i]['year'] = $row['year'];
                    $searchList[$i]['movieCode'] = $row['movieCode'];
                }

                else {
                    $searchList[$i]['artistId'] = $row['artistId'];
                    $searchList[$i]['firstName'] = $row['firstName'];
                    $searchList[$i]['lastName'] = $row['lastName'];
                    $searchList[$i]['dateOfBirth'] = $row['dateOfBirth'];
                    $searchList[$i]['artistImage'] = $row['artistImage'];
                    $searchList[$i]['nationality'] = $row['nationality'];
                }
            }
            
            $i++;
        }
               
        return $searchList;
    }
   
}
