<?php
// Decision of 300 problem.
// https://leetcode.com/problems/longest-increasing-subsequence/description/

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function lengthOfLIS($nums) {
        $result = [];
        foreach ($nums as $i => $num) {
          if ($i) {
            if ($i === 1) {
                if ($num < $result[0]) {
                    $result[0] = $num;
                }
                elseif ($num > $result[0]) {
                    $result[] = $num;
                }
            }
            else {
              if (count($result) > 1) {
                 $last_key = array_key_last($result);
                 if ($num < $result[$last_key] && $num > $result[$last_key - 1]) {
                    $result[$last_key] = $num;
                 }
                 elseif ($num > $result[$last_key]) {
                    $result[] = $num;
                 }
              }
              else {
                if ($num < $result[0]) {
                  $result[0] = $num;
                }
                elseif ($num > $result[0]) {
                  $result[] = $num;
                }
              }
            }
            
          }
          else {
              $result[$i] = $num;
          }
        }
        return count($result);
    }
}
