<?php

$array = [6, 1, 2, 7, 9, 3, 4, 5, 10, 8];

function quick_sort(int $left, int $right, array &$array) : void {
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
    
    quick_sort($left, $i - 1, $array);
    quick_sort($i + 1, $right, $array);
    
    return ;
}    


quick_sort(0, count($array) - 1, $array);

echo "[".implode(', ', $array)."]";
?>