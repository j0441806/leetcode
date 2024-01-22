<?php
/*
 * @lc app=leetcode id=14 lang=php
 *
 * [14] Longest Common Prefix
 */

// @lc code=start
class Solution {

    /**
     * @param String[] $strs
     * @return String
     */
    function longestCommonPrefix($strs) {
        // echo $strs[0][0];
        $common_prefix = "";
        $common_prefix = $strs[0];

        if (count($strs) === 1) {
            return $strs[0];
        } else {
            if ($strs[0][0] !== $strs[1][0]) {
                return "";
            } else {
                for ($i =1;$i < count($strs);$i++) {
                    $target_word = $strs[$i];
    
                    for ($j =0;$j < strlen($target_word);$j++) {
                        // echo $target_word;
                        if ($common_prefix[$j] !== $target_word[$j]) {
                            break;
                        }
                    }
                    $common_prefix = substr($common_prefix, 0, $j);
                    // echo $common_prefix;
                }
                return $common_prefix;
            }
        }
       
    }
}
// @lc code=end
$strs = ["flower","flow","flight"];
(new Solution())->longestCommonPrefix($strs);

