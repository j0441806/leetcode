<?php

/*
 * @lc app=leetcode id=88 lang=php
 *
 * [88] Merge Sorted Array
 */

// @lc code=start
class Solution {

    /**
     * @param Integer[] $nums1
     * @param Integer $m
     * @param Integer[] $nums2
     * @param Integer $n
     * @return NULL
     */
    // function merge(&$nums1, $m, $nums2, $n) {
    function merge(&$nums1, $m, $nums2, $n) {
        $i = $m - 1; // nums1 の最後の要素のインデックス
        $j = $n - 1; // nums2 の最後の要素のインデックス
        $k = $m + $n - 1; // マージ結果の nums1 の最後の要素のインデックス
    
        while ($i >= 0 && $j >= 0) {
            // nums1 と nums2 の大きい方を nums1 の末尾に配置
            if ($nums1[$i] > $nums2[$j]) {
                $nums1[$k] = $nums1[$i];
                $i--;
            } else {
                $nums1[$k] = $nums2[$j];
                $j--;
            }
            $k--;
        }
    
        // nums2 に残った要素を nums1 の先頭にコピー
        while ($j >= 0) {
            $nums1[$k] = $nums2[$j];
            $j--;
            $k--;
        }
    }
}


// @lc code=end

/*
マージ用のポインターとして $i, $j, $k を初期化します。

$i は nums1 のマージされた部分の最後の要素を指します。
$j は nums2 の最後の要素を指します。
$k はマージされた結果を格納するための nums1 の最後の要素を指します。
while ループを使って、nums1 と nums2 の要素を比較・マージします。

$i と $j が 0 より大きい間、大きい方の要素を $nums1[$k] に格納します。
$i や $j のポインターはマージの進行に応じて減少させます。
$k もデクリメントして、次のマージ先の位置を示します。
二つの配列の要素をマージした後、nums2 に残った要素があれば、
それらを nums1 の先頭にコピーします。

$j ポインターが 0 より大きい間、nums2 の残りの要素を nums1 の先頭から順にコピーし、
$k をデクリメントします。
このアルゴリズムは、nums1 と nums2 の両方が
非減少順にソートされていることを利用し、効率的に二つの配列をマージしています。
結果は nums1 に直接格納され、余分な領域を使用することなく要求された形式で配列がマージされます。
*/

/*
ポイント
* nums1 と nums2 の両方が非減少順にソートされていること
* num1にnum2をマージする分の要素は0になっていること
 nums1 has a length of m + n,
 where the first m elements denote the elements that should be merged, 
 and the last n elements are set to 0 and should be ignored. 
 nums2 has a length of n.
*/

/*
&$nums1 は PHP における参照渡しの構文です。
これは関数に変数を渡す際に、その変数の参照を渡すことを意味します。
通常、関数内で変数を変更すると、その変更は関数の外の変数には影響を与えませんが、
参照渡しを行うことで関数内での変更が関数外の変数にも反映されます。

このコードで $nums1 は参照渡しされており、
merge 関数内で $nums1 を変更すると、
関数を呼び出したコンテキスト（つまり関数の外）の $nums1 も変更されます。
これにより、merge 関数は与えられた nums1 配列を直接変更できるため、
配列を統合するためのアルゴリズムを実行した結果を元の変数に保存できます。
*/

