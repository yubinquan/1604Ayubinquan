<?php
#二分查找
function binarySearch(Array $arr, $target) {
    $low = 0;
    $high = count($arr) - 1;

    while($low <= $high) {
        $mid = floor(($low + $high) / 2);
        #找到元素
if($arr[$mid] == $target) return $mid;
             #中元素比目标大,查找左部
             if($arr[$mid] > $target) $high = $mid - 1;
             #重元素比目标小,查找右部
             if($arr[$mid] < $target) $low = $mid + 1;
         }

         #查找失败
         return false;
     }
$arr = array(1, 3, 5, 7, 9, 11);
$inx = binarySearch($arr, 1);
var_dump($inx);