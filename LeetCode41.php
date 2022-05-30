<?php
    class Solution {

        /**
         * @param Integer[] $nums
         * @return Integer
         */
        function firstMissingPositive($nums) {
            $miss=1;
            sort($nums);
            for($i=0;$i<count($nums);$i++){
                if($nums[$i]==$miss){
                    $miss++;
                }
            }
            return $miss;
        }
    }
?>