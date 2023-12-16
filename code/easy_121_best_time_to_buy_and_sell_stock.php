<?php

/*
 * @lc app=leetcode id=121 lang=php
 *
 * [121] Best Time to Buy and Sell Stock
 */

// @lc code=start
class Solution {

    /**
     * @param Integer[] $prices
     * @return Integer
     */
    function maxProfit($prices) {
        $length = count($prices);

        // 
        if ($length <= 1) {
            return 0; // もし配列が1つ以下の要素しか持たない場合は利益は0
        }

        // $k = 0;
        // $profit = 0;
        // for ($i = 0;$i < $length;$i++) {
        //     for ($k = $i + 1;$k < $length;$k++) {
        //         if ($prices[$i] < $prices[$k]) {
        //             $diff = $prices[$k] - $prices[$i];
        //             if ($profit < $diff) {
        //                 $profit = $diff;
        //             }
        //        }
        //     //    $k++;
        //     }
                

        // }
        // var_dump($profit);
        // return $profit;

        $minPrice = $prices[0]; // 初期化
        $maxProfit = 0; // 初期化

        for ($i = 1; $i < $length; $i++) {
            if ($prices[$i] < $minPrice) {
                $minPrice = $prices[$i]; // もし新しい最小価格を見つけたら更新
            } else {
                $currentProfit = $prices[$i] - $minPrice; // それ以外の場合、利益を計算
                if ($currentProfit > $maxProfit) {
                    $maxProfit = $currentProfit; // もし新しい最大利益を見つけたら更新
                }
            }
        }

        return $maxProfit;
    }
}
// @lc code=end

$prices = [7,1,5,3,6,4];
(new Solution())->maxProfit($prices);


/*
無駄なループを削減する:

当所、2重のループを使っているため、計算量が多くなっていた。(Time Limit Exceeded)
->単一のループに減らす。
->最小価格と最大利益を追跡する:
一つのループで、それまでの最小価格とその後の価格との差を計算し、それを利益として保持する。

配列が1つ以下の要素しか持たない場合は利益を計算する必要がないので最初に除外しておく。
*/
