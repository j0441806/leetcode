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
        if (strlen($magazine) < strlen($ransomNote)) {
            return false;
        }
        
        $modifiedString = $magazine;
        for ($i = 0;$i < strlen($ransomNote);$i++) {
            $match = strpos($modifiedString, $ransomNote[$i]);
            echo $modifiedString . " " . $ransomNote[$i] . " " .$match . " ";
            if ($match) {
                if (strlen($modifiedString) > 1) {
                    $modifiedString = substr($modifiedString, 0, $i) . substr($modifiedString, $i + 1);
                }
                // echo $modifiedString;
                continue;
            }
            return false;
        }
        return true;
          
        
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

