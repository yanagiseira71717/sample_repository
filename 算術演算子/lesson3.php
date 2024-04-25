<?php
// 100円のチョコレートを1個
// 50円のアメを3個買いました。

// 各値段の計算を変数に代入し、
// その合計を$sumと言う変数に代入して
// 「○○○円です。」という形で出力してください。
$chocolate_price = 100;
$chocolate_quantity = 1;
$candy_price = 50;
$candy_quantity = 3;

$chocolate_price_sum = $chocolate_price * $chocolate_quantity;
$candy_price_sum = $candy_price * $candy_quantity;

$sum = $chocolate_price_sum + $candy_price_sum;
echo $sum."円です。";