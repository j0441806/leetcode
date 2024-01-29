<?php

/*
 * @lc app=leetcode id=205 lang=php
 *
 * [205] Isomorphic Strings
 */

// @lc code=start
class Solution {

    /**
     * @param String $s
     * @param String $t
     * @return Boolean
     */
    function isIsomorphic($s, $t) {
        $map = [];

        for ($i = 0; $i < strlen($s); $i++) {
            if (array_key_exists($s[$i], $map)) {
                // Check if the mapping is consistent
                if ($t[$i] !== $map[$s[$i]]) {
                    return false;
                }
            } else {
                // Check if the same character in $t is not already mapped
                if (in_array($t[$i], $map)) {
                    // if the character in $t ($t[$i]) is already mapped, result should be false
                    // when the character in $s ($s[$i]) is not already mapped
                    return false;
                }
                // Create a new mapping
                $map[$s[$i]] = $t[$i];
            }
        }
        return true;
    }
}
// @lc code=end
// $s = "egg";
// $t = "add";
// $s = "foo";
// $t = "bar";
// $s = "paper";
// $t = "title";
$s = "badc";
$t = "baba";
echo (new Solution())->isIsomorphic($s, $t);

