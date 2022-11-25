<?php

// Decision of https://leetcode.com/problems/group-anagrams/

class Solution {

    /**
     * @param String[] $strs
     * @return String[][]
     */
    function groupAnagrams($strs) {
        $result = [];
        foreach ($strs as $string) {
            $stringParts = str_split($string);
            sort($stringParts);
            $sorted = implode($stringParts);
            $result[$sorted][] = $string;
        }
        return array_values($result);
    }
}
