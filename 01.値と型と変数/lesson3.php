﻿<?php
// 連想配列のkey
// name, age, genderに
// 山田,  20,  女性
// という値を格納し、

// 山田
// 20歳・女性

// という形で出力してください。

$human = array(
    'name'   => '山田',
    'age'    => '20歳',
    'gender' => '女性',
);

echo $human['name'] . '<br>';
echo $human['age'] . '・' . $human['gender'];