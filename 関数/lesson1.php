<?php
// 引数として数値を渡すと3倍にして返す関数を作ってください。
function triple($num) {
    return $num * 3;
}
$number = 5;
$result = triple($number);
echo $result;