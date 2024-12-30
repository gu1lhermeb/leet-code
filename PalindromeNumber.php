<?php

class Solution {

    function isPalindrome($number) 
    {
        $arrayNumber = str_split($number);

        $reverseArrayNumber = array_reverse($arrayNumber);

        if ($arrayNumber === $reverseArrayNumber) {
            return true;
        } else {
            return false;
        }
    }
}

$number = -121;

$palindrome = new Solution();

$palindrome->isPalindrome($number);