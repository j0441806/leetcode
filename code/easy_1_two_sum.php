<?php
/*
 * @lc app=leetcode id=1 lang=php
 *
 * [1] Two Sum
 */

/*
Given an array of integers nums and an integer target, return indices of the two numbers such that they add up to target.

 You may assume that each input would have exactly one solution, and you may not use the same element twice.

You can return the answer in any order.

 

Example 1:

Input: nums = [2,7,11,15], target = 9
Output: [0,1]
Explanation: Because nums[0] + nums[1] == 9, we return [0, 1].
Example 2:

Input: nums = [3,2,4], target = 6
Output: [1,2]
Example 3:

Input: nums = [3,3], target = 6
Output: [0,1]
 

Constraints:

2 <= nums.length <= 104
-109 <= nums[i] <= 109
-109 <= target <= 109
Only one valid answer exists.
 

Follow-up: Can you come up with an algorithm that is less than O(n2) time complexity?
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

/*
このコードは、与えられた整数配列から特定の目標値を達成するための要素の組み合わせを見つけるものです。
twoSumという関数が定義されています。

まず、与えられた配列 $nums をループしています。
ループの中で、配列内の各要素を取り出し、その要素と目標値との差分を計算しています。
これを「補数」と呼びます。その後、補数が配列 $map 内に存在するかを確認しています。

具体的には、配列 $map は要素とそのインデックスを関連付ける連想配列です。
配列をループしている間に、各要素とそのインデックスを $map に追加しています。
そして、現在の要素の補数が $map 内に存在するかどうかをチェックし、
存在すればその補数のインデックスと現在の要素のインデックスのペアを返します。
これにより、目標値を達成するための要素のインデックスが見つかります。

もし補数が $map 内に存在しない場合は、その要素とそのインデックスを $map に追加し、次の要素に進みます。
全ての要素を調べても目標値を達成する要素のペアが見つからない場合は、空の配列を返します。

このコードの時間計算量はO(n)です。配列を1回だけループしているため、要素の数に比例して処理時間が増えます。
*/

/*
array_key_exists — 指定したキーまたは添字が配列にあるかどうかを調べる
*/
