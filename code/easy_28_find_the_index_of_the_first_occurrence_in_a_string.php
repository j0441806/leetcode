<?php
/*
 * @lc app=leetcode id=28 lang=php
 *
 * [28] Find the Index of the First Occurrence in a String
 */

// @lc code=start
class Solution {

    /**
     * @param String $haystack
     * @param String $needle
     * @return Integer
     */
    function strStr($haystack, $needle) {
        $matchLoc = 0;
        $result = -1;

        for($i = 0;$i < strlen($haystack);$i++) {
            if ($haystack[$i] === $needle[$matchLoc]) {
                // echo $i, $matchLoc;
                if ($matchLoc === 0) {
                    $result = $i;
                }
                if ($matchLoc === strlen($needle) - 1) {
                    // echo $result;
                    return $result;
                }
                $matchLoc++;
                
            }
        }
        return $result;
        
        
    }
}
// @lc code=end
$haystack = "aaa";
$needle = "aaaa";
echo (new Solution())->strStr($haystack, $needle);

