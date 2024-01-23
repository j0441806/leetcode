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

        $haystackLen = strlen($haystack);
        $needleLen = strlen($needle);

        // if ($haystack === $needle) {
        //     return 0;
        // }

        for($i = 0;$i < $haystackLen;$i++) {
            $match = true;

            for ($j = 0; $j < $needleLen; $j++) {
                // echo $i, $j;
                if ($haystack[$i + $j] !== $needle[$j]) {
                    $match = false;
                    break;
                }
            }

            if ($match) {
                return $i;
            }


            // if ($haystack[$i] === $needle[$matchLoc]) {
            //     // echo $i, $matchLoc;
            //     $find = true;
            //     if ($matchLoc === $needleLen - 1) {
            //         // echo $i, $matchLoc;
            //         $result = $i - $matchLoc;
            //         return $result;
            //     }
                
            //     $matchLoc++;
            // } else {
            //     if ($find === true) {
            //         // echo $haystackLen - $i + 1;
            //         if ($haystackLen - $i + 1 > $needleLen) {
            //             echo $haystack[$i];
            //             echo $i;
            //             $matchLoc = 0;
            //             $find = false;
            //         } else {
            //             return $result;
            //         }
            //     }
            // }
        }
        // return $result;
        return -1;
        
        
    }
}
// @lc code=end
$haystack = "sadbutsad";
$needle = "sad";
// $haystack = "leetcode";
// $needle = "leeto";
// $haystack = "hello";
// $needle = "ll";
// $haystack = "mississippi";
// $needle = "issip";
echo (new Solution())->strStr($haystack, $needle);

// 2024/1/23
// この問題の場合、二重ループを使用することが鍵
// $needleの途中でマッチしなかったらfalseにして、needleのループを抜ける
// if ($haystack[$i + $j] !== $needle[$j]) {
// かえって冗長になる場合、return -1;を記述しないことにこだわらない


