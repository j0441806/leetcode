<?php

/*
 * @lc app=leetcode id=27 lang=php
 *
 * [27] Remove Element
 */

// @lc code=start
class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $val
     * @return Integer
     */
    // function removeElement(&$nums, $val) {
    //     // while(($index = array_search($val, $nums, true)) !== false) {
    //     //     unset($nums[$index]);
    //     // }

    //     // arsort($nums);

    //     $length = count($nums);
    //     $k = $length;
    //     $switch = 0;
    //     for ($i = 0; $i < $length; $i++) {
    //         if ($nums[$i] === $val) {
    //             // while ($nums[$length - $switch - 1] !== $val) {
    //             //     $nums[$i] = $nums[$length - $switch - 1];
    //             //     $nums[$length - $switch - 1] = 0;
    //             //     $switch++;
    //             // }
    //             // $k--;

    //             while ($i < $length - $switch - 1 && $nums[$length - $switch - 1] === $val) {
    //                 $switch++;
    //             }
    //             if ($i < $length - $switch - 1) {
    //                 $nums[$i] = $nums[$length - $switch - 1];
    //                 $nums[$length - $switch - 1] = 0;
    //                 $switch++;
    //             }
    //             $k--;

    //             print_r($nums);

    //         }
    //     }
    //     // print_r($nums);
    //     // var_dump($k);
    //     // return $k;

        

        
    // }

    function removeElement(&$nums, $val) {
        $k = 0;
        $length = count($nums);
        for ($i = 0; $i < $length; $i++) {
            if ($nums[$i] !== $val) {
                $nums[$k] = $nums[$i];
                $k++;
            }
        }
        // 指定された値を削除するために、残った要素を先頭に移動させた後、残りの要素は無視します
        // print_r($nums);
        // var_dump($k);
        return $k;
    }

  
}

// $array = [0,1,2,2,3,0,4,2];
// $val = 2;
// (new Solution())->removeElement($array, $val);
// @lc code=end

