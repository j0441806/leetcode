<?php
/*
 * @lc app=leetcode id=125 lang=php
 *
 * [125] Valid Palindrome
 */

// @lc code=start
class Solution {

    /**
     * @param String $s
     * @return Boolean
     */
    function isPalindrome($s) {
        $palindrome = "";
        
        for ($i = 0;$i < strlen($s);$i++) {
            // Zero - Nine : 48-57
            // Uppercase A - Uppercase Z : 65-90
            // Lowercase a - Lowercase z :  97-122
            $code = ord($s[$i]);
            if (($code >= 65 && $code <= 90)) {
                $s[$i] = strtolower($s[$i]);
                $palindrome .= $s[$i];
            } elseif (($code >= 48 && $code <= 57) || ($code >= 97 && $code <= 122)) {
                $palindrome .= $s[$i];
            }
        }

        $palindrome_len = strlen($palindrome);
        $half = floor($palindrome_len / 2);
        $first_half = "";
        $last_half = "";
        if (strlen($palindrome) % 2 === 0) {
            $first_half = substr($palindrome, 0, $half);
            $last_half = substr($palindrome, $half, $half);
        } else {
            $first_half = substr($palindrome, 0, $half);
            $last_half = substr($palindrome, $half + 1, $half);
        }
        // echo $first_half . " " . $last_half;
        $match = true;
        for ($i = 0;$i < strlen($first_half);$i++) {
            if ($first_half[$i] !== $last_half[strlen($last_half) - $i - 1]) {
                $match = false;
                break;
            }
        }
        if ($match) {
            return true;
        }
        return false;

    }
}
// @lc code=end
// $s = "A man, a plan, a canal: Panama";
// $s = "race a car";
$s = " ";
echo (new Solution())->isPalindrome($s);


