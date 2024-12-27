<?php

class Solution {

    function twoSum($nums, $target) {
        $indices = [];

        foreach($nums as $key1 => $number1) {
            foreach($nums as $key2 => $number2) {
                if ($key1 == $key2) {
                    break;
                }

                if ($number1 + $number2 == $target) {
                    $indices = [$key2, $key1];
                    break;
                }
            }
        }

        return $indices;
    }
}

$solution = new Solution();

$nums = [2,7,11,15];

$target = 9;

$solution->twoSum($nums, $target);