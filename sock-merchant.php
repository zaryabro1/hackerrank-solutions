<?php
# Problem: Sales by match

/*
There is a large pile of socks that must be paired by color. Given an array of integers representing the color of each sock, determine how many pairs of socks with matching colors there are.

Example:
n = 7
ar = [1,2,1,2,1,3,2]

There is one pair of color 1 and one of color 2. There are three odd socks left, one of each color. The number of pairs is 2.



Problem URL: https://www.hackerrank.com/challenges/sock-merchant/problem?isFullScreen=true
*/



function sockMerchant($n, $array) {
    // Write your code here
        $pairs = 0;
        $count = array_count_values($array);
        foreach ($count as $val) {
            if ($val % 2 == 0) {
                $pairs = $pairs + $val / 2;
            } else {
                $val--;
                if ($val != 0 && $val % 2 == 0) {
                    $pairs = $pairs + $val / 2;
                }
            }
        }
        return $pairs;
}
