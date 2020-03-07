<?php

$array = new SplFixedArray(5);
$array[1] = 2;
$array[4] = "foo";

var_dump($array[0]); // NULL
var_dump($array[1]); // int(2)
var_dump($array["4"]); // string(3) "foo"

// 将数组的固定长度设置为 10
$array->setSize(10);

$array[9] = "bar";
var_dump($array[9]); // string(3) "bar"

// 将数组的固定长度设置为 2
$array->setSize(2);
var_dump($array[1]); // int(2)

try {
    var_dump($array["non-numeric"]);
} catch (RuntimeException $re) {
    echo "RuntimeException: ".$re->getMessage()."\n";
}

try {
    var_dump($array[-1]);
} catch (RuntimeException $re) {
    echo "RuntimeException: ".$re->getMessage()."\n";
}

try {
    var_dump($array[5]);
} catch (RuntimeException $re) {
    echo "RuntimeException: ".$re->getMessage()."\n";
}