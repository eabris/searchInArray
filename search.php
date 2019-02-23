<?php

/**
 * return the last key with a specific value from the array.
 * 
 */

class Search
{
    public static function findLastKey($array, $search_value)
    {
        $mached = array();
        if(is_array($array) && count($array) > 0) {
            foreach($array as $key => $value) {
                if(is_array($value) && count($value) > 0) {
                    self::findLastKey($search_value,$value);
                } else {
                    return array_search($search_value,$array); exit;
                }
            }
        }
        return null;
    }
}

echo Search::findLastKey(array('Hello' => 'Green', 'World' => 'Blue'), 'Blue');

