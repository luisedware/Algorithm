<?php

$temp = 0;
$array = [8, 100, 50, 22, 15, 6, 1, 1000, 999, 0];
$length = count($array) - 1;

for ($i = 0; $i <= $length - 1; $i++) {
    for ($j = 0; $j <= $length - $i; $j++) {
        if(isset($array[$j+1]) && $array[$j] < $array[$j+1]){
            $temp = $array[$j];
            $array[$j] = $array[$j+1];
            $array[$j+1] = $temp;
        }
    }
}

echo "[".implode(', ', $array)."]";
?>