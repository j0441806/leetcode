<?php
/*
 * @lc app=leetcode id=1 lang=php
 *
 * [1] Two Sum
 */

// @lc code=start
class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum($nums, $target) {
        $map = [];

        foreach ($nums as $index => $num) {
            $complement = $target - $num;
            if (array_key_exists($complement, $map)) {
                return [$map[$complement], $index];
            }
            $map[$num] = $index;
        }

        return [];
    }
}
// @lc code=end

