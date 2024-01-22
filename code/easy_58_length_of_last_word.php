<?php

/*
 * @lc app=leetcode id=58 lang=php
 *
 * [58] Length of Last Word
 */

// @lc code=start
class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function lengthOfLastWord($s) {
        $words = explode(" ", $s);
        $length = count($words);
        // print_r($words);

        for ($i =$length - 1;$i >= 0;$i--) {
            if (!empty($words[$i])) {
                $last_word = $words[$i];
                // echo strlen($last_word);
                // break;
                return strlen($last_word);
            }
        }
      
    }
}
// @lc code=end
$s = "   fly me   to   the moon  ";
(new Solution())->lengthOfLastWord($s);
