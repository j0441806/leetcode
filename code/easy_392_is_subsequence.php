<?php
/*
 * @lc app=leetcode id=392 lang=php
 *
 * [392] Is Subsequence
 */

// @lc code=start
class Solution {

    /**
     * @param String $s
     * @param String $t
     * @return Boolean
     */
    function isSubsequence($s, $t) {
        $j = 0;
        $s_len = strlen($s);
        $t_len = strlen($t);

        for ($i = 0;$i < $t_len;$i++) {
            if ($j < $s_len && $t[$i] === $s[$j]) {
                $j++;
            }

            if ($j === $s_len) {
                return true;
            }
        }

        return $j === $s_len;
        
    }
}
// @lc code=end
// $s = "abc";
// $t = "ahbgdc";
$s = "axc";
$t = "ahbgdc";
echo (new Solution())->isSubsequence($s, $t);

