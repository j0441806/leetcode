<?php

/*
 * @lc app=leetcode id=26 lang=php
 *
 * [26] Remove Duplicates from Sorted Array
 */

// @lc code=start
class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function removeDuplicates(&$nums) {

        // $length = count($nums);
        // $checked = [];
        // $k = 0;
        // for ($i = 0; $i < $length; $i++) {
        //     if (!array_search($nums[$i], $checked)) {
        //         $nums[$k] = $nums[$i];
        //         var_dump($k, $i);
        //         $k++; 
        //         array_push($checked, $nums[$i]);
        //     }
        // }
        // print_r($nums);
        // var_dump($k);

        $length = count($nums);
        $k = 0;
        for ($i = 0; $i < $length; $i++) {
            if ($i === 0 || $nums[$i] !== $nums[$i - 1]) { // 直前の要素と比較
                $nums[$k] = $nums[$i]; // 直前の要素と異なる場合にのみ新しい要素を追加
                $k++; 
            }
        }
        // print_r($nums);
        // var_dump($k);
        return $k;
        
    }
}

$nums = [0,0,1,1,1,2,2,3,3,4];
(new Solution())->removeDuplicates($nums);
// @lc code=end

/*
array_search 関数を使って重複をチェックする代わりに、
配列がソートされていることを利用して、直前の要素と比較する方法に変更しました。
ループ内の条件を変更して、直前の要素と異なる場合にのみ新しい要素を追加するようにしました。
*/

