﻿<?php
// 配列に「日本,アメリカ,イギリス,フランス」を格納し、foreach文を使って順番に下記のフォーマットで出力して下さい。
// 要素番号:国名


$countries = ["日本", "アメリカ", "イギリス", "フランス"];

foreach ($countries as $key => $country){
    echo $key . ':'. $country. '<br/>';
}
// $countries = [
//         '1:' => '日本',
//         '2:' => 'アメリカ',
//         '3:' => 'イギリス',
//         '4:' => 'フランス',
// ];

// foreach ($countries as $key => $country){
//     echo ''. $key . ''. $country. '<br/>';
// }

