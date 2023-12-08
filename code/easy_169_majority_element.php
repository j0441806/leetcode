<?php

/*
 * @lc app=leetcode id=169 lang=php
 *
 * [169] Majority Element
 */

// @lc code=start
class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function majorityElement($nums) {
        $counter = 0;
        $possible_element = 0;
        for ($i = 0;$i < count($nums);$i++) {
            if ($counter === 0) {
                $possible_element = $nums[$i];
                $counter = 1;
            } elseif ($nums[$i] === $possible_element) {
                $counter++;
            } else {
                $counter--;
            }
        }
        // var_dump($possible_element);
        return $possible_element;

        
    }
}
// @lc code=end
$array = [2,2,1,1,1,2,2];
(new Solution())->majorityElement($array);

/*
Reference
https://stackoverflow.com/questions/4325200/find-the-majority-element-in-array
*/