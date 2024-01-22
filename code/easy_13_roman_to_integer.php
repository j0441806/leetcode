<?php

/*
 * @lc app=leetcode id=13 lang=php
 *
 * [13] Roman to Integer
 */

// @lc code=start
class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function romanToInt($s) {
        $result = 0;

        $romans = str_split($s); // str_split — 文字列を配列に変換する
        $length = count($romans);
        // print_r($romans);
        $k = 0;
        for ($i = 0;$i < $length;$i++) {
            // echo $i;
            // echo ' ';
            
            //   I
            if ($romans[$i] === 'I') {
                if ($i < $length - 1 && $romans[$i+1] === 'V') {
                    $result += 4;
                    $i++;
                } elseif ($i < $length - 1 && $romans[$i+1] === 'X') {
                    $result += 9;
                    $i++;
                } else {
                    $result += 1;
                }
                continue;
            }
           
            // V
            if ($romans[$i] === 'V') {
                $result += 5;
                continue;
            }

            // X
            if ($romans[$i] === 'X') {
                if ($i < $length - 1 && $romans[$i+1] === 'L') {
                    $result += 40;
                    $i++;
                } elseif ($i < $length - 1 && $romans[$i+1] === 'C') {
                    $result += 90;
                    $i++;
                } else {
                    $result += 10;
                }
                continue;
            }
          
            // L
            if ($romans[$i] === 'L') {
                $result += 50;
                continue;
            }

            // C
            if ($romans[$i] === 'C') {
                if ($i < $length - 1 && $romans[$i+1] === 'D') {
                    $result += 400;
                    $i++;
                } elseif ($i < $length - 1 && $romans[$i+1] === 'M') {
                    $result += 900;
                    $i++;
                } else {
                    $result += 100;
                }
                continue;
            }
           
              // D
              if ($romans[$i] === 'D') {
                $result += 500;
                continue;
            }

              // M
              if ($romans[$i] === 'M') {
                $result += 1000;
                continue;
            }

            // echo $result;
            // echo ' ';
        }

        // print_r($result);
        return $result;
    }
}
// @lc code=end
$s = "MCMXCIV";
(new Solution())->romanToInt($s);

