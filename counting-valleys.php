<?php
# Problem: Counting Valleys

/*
An avid hiker keeps meticulous records of their hikes. During the last hike that took exactly  steps, for every step it was noted if it was an uphill, U, or a downhill, D step. Hikes always start and end at sea level, and each step up or down represents a 1 unit change in altitude. We define the following terms:

- A mountain is a sequence of consecutive steps above sea level, starting with a step up from sea level and ending with a step down to sea level.
- A valley is a sequence of consecutive steps below sea level, starting with a step down from sea level and ending with a step up to sea level.

Problem URL: https://www.hackerrank.com/challenges/counting-valleys/problem?isFullScreen=true
*/



function countingValleys($steps, $path) {
    // Write your code here
    $isPersonBelowSeaLevel = false;
    $level = 0;
    $valleys = 0;
    $path = str_split($path);
    foreach ($path as $step) {
        if ($step == "U") {
            $level++;
        } else {
            $level--;
        }
        
        if (!$isPersonBelowSeaLevel) {
            if ($level < 0) {
                $isPersonBelowSeaLevel = true;
                $valleys++;
            }
        }
              
        if ($level >= 0) {
            $isPersonBelowSeaLevel = false;
        }
    }
    return $valleys;
}
