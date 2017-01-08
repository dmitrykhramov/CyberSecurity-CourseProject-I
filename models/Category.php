<?php


class Category {
    
    public static function getCategoriesList()
    {
        $db = DataBase::getConnection();

        $result = $db->query('SELECT catId, name FROM categories ORDER BY name ASC');

        $i = 0;
        $categoryList = array();
        while ($row = $result->fetch()) {
            $categoryList[$i]['catId'] = $row['catId'];
            $categoryList[$i]['name'] = $row['name'];
            $i++;
        }
        return $categoryList;
    }
    
    
}
