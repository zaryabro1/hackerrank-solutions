<?php
# Problem: Drawing Book

/*
A teacher asks the class to open their books to a page number. A student can either start turning pages from the front of the book or from the back of the book. They always turn pages one at a time. When they open the book, page 1 is always on the right side.
When they flip page 1, they see pages 2 and 3. Each page except the last page will always be printed on both sides. The last page may only be printed on the front, given the length of the book. If the book is n pages long, and a student wants to turn to page p, what is the minimum number of pages to turn? They can start at the beginning or the end of the book.

Given n and p, find and print the minimum number of pages that must be turned in order to arrive at page p.

Problem URL: https://www.hackerrank.com/challenges/drawing-book/problem?isFullScreen=true
*/



function pageCount($n, $p) {
    // Write your code here
        $lastPage = $n;
        $startFromEnd = false;
        $lastPageType = "single";
        $flips = 0;
        if ($p > $n/2) {
            $startFromEnd = true;
        }
        if ($n % 2 != 0) {
            $lastPageType = "arr";
        }
        if ($startFromEnd) {
            if ($lastPageType == "arr") {
                $pages = [$lastPage - 1, $lastPage];
                for ($i = 0; $i < $n; $i++) {
                    echo $flips . "<br>";
                    if (in_array($p, $pages)) {
                        echo "end with " . $flips . "<br>"; 
                        return $flips;
                    }
                    // print_r($pages);
                    $pages[0] = $pages[0] - 2;
                    $pages[1] = $pages[1] - 2;
                    $flips++;
                }
            } else {
                if ($p == $n) {
                    return 0;
                }
                $flips = 1;
                $pages = [$n - 2, $n - 1];
                for ($i = 0; $i < $n; $i++) {
                    if (in_array($p, $pages)) {
                        return $flips;
                    }
                    $pages[0] = $pages[0] - 2;
                    $pages[1] = $pages[1] - 2;
                    $flips++;
                }
            } 
        } else {
            if ($p == 1) {
                return 0;
            } else {
                $flips = 1;
                $pages = [2, 3];
                for ($i = 0; $i < $n; $i++) {
                    if (in_array($p, $pages)) {
                        return $flips;
                    }
                    $pages[0] = $pages[0] + 2;
                    $pages[1] = $pages[1] + 2;
                    $flips++;
                }
            }
        }
}
