<?php

$array = [6, 1, 2, 7, 9, 3, 4, 5, 10, 8];

function quick_sort(array &$array, $left = null, $right = null) : void {
    $left = $left === null ? 0 :$left;
    $right = $right === null ? count($array) - 1 : $right;
    
    if($left > $right){
        return ;
    }
    
    $i = $left;
    $j = $right;
    $temp = $array[$left];
    
    while ($i != $j) {
        while ($array[$j] >= $temp && $i < $j) {
            $j--;
        }
        
        while ($array[$i] <= $temp && $i < $j) {
            $i++;
        }
        
        if($i < $j){
            $t = $array[$j];
            $array[$j] = $array[$i];
            $array[$i] = $t;
        }
    }
    
    $array[$left] = $array[$i];
    $array[$i] = $temp;
    
    quick_sort($array, $left, $i - 1);
    quick_sort($array, $i + 1, $right);
    
    return ;
}    


quick_sort($array);

echo "[".implode(', ', $array)."]";
?>