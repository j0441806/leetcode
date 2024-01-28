<?php
/*
 * @lc app=leetcode id=383 lang=php
 *
 * [383] Ransom Note
 */

// @lc code=start
class Solution {

    /**
     * @param String $ransomNote
     * @param String $magazine
     * @return Boolean
     */
    function canConstruct($ransomNote, $magazine) {
        // $magazineに含まれる文字と出現回数のペアで配列に格納する
        $casket = [];
        for ($i = strlen($magazine) - 1; $i >= 0 ; $i--) {
            $casket[$magazine[$i]]++;
        }

        // $ransomNoteをイテレートし、$magazineに含まれる文字の場合、
        // 該当する$casketの値をデクリメント
        // 該当する値が0の場合、falseを返す
        for ($j = strlen($ransomNote) - 1; $j >= 0 ; $j--) {
            if ($casket[$ransomNote[$j]]-- == 0) return false;
        }
        return true;

        // // An empty array will be indexed by magazine symbols set mapped to its frequency.
		// // key = symbol, value = symbol's frequency in magazine string.
		// // The casket size is the size of the magazine string unique symbols set,
		// // but maximum 26 lowercase English letters.
		
		// $casket = [];
        
		// // First pass with N iterations through the magazine string fills the casket's cells.
		// // Reverse pass order for single string length calculation.
		
        // for ($i = strlen($magazine) - 1; $i >= 0 ; $i--) {
		
		//     // $magazine[$i] is i-th symbol of the string and it is index (key) of the casket's cell.
			
        //     $casket[$magazine[$i]]++;
        // }
        
		// // Second pass with maximum M iterations (in case ransomNote can be constructed)
		// // through ransomNote string raids the casket's cells. 
		// // Reverse pass order for single string length calculation.
		
        // for ($j = strlen($ransomNote) - 1; $j >= 0 ; $j--) {
		
		//     // The emptiness the letter's cell of the casket (in case of a lack of the required to
		// 	// type symbol) causes the early breaking of the iteration and the return of a
		// 	// negative result. Decrement is performed after checking!
			
        //     if ($casket[$ransomNote[$j]]-- == 0) return false;
        // }
        
		// // The string has successfully typed (typesetting symbols were presented enough).
        // return true;





        // if (strlen($magazine) < strlen($ransomNote)) {
        //     return false;
        // }
        
        // $modifiedString = $magazine;
        // for ($i = 0;$i < strlen($ransomNote);$i++) {
        //     $match = strpos($modifiedString, $ransomNote[$i]);
        //     echo $modifiedString . " " . $ransomNote[$i] . " " .$match . " ";
        //     if ($match) {
        //         if (strlen($modifiedString) > 1) {
        //             $modifiedString = substr($modifiedString, 0, $i) . substr($modifiedString, $i + 1);
        //         }
        //         // echo $modifiedString;
        //         continue;
        //     }
        //     return false;
        // }
        // return true;
          
        
    }
}
// @lc code=end
// $ransomNote = "a";
// $magazine = "b";
// $ransomNote = "aa";
// $magazine = "ab";
$ransomNote = "aa";
$magazine = "aab";
echo (new Solution())->canConstruct($ransomNote, $magazine);

