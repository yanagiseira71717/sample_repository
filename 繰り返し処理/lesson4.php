﻿<?php
// 以下をfor文を使用して表示してください。

// 1
// 21
// 321
// 4321
// 54321
// 654321
// 7654321
// 87654321
// 987654321
//

//下記の変数を起点にして作るようにして下さい。
$input = 9;
for ($i = 1; $i <= $input; $i++) {
    for ($j = $i; 0 < $j; $j--) {
        echo $j;  
    } 
    echo '<br>';
}

// ループ処理は何万回もの処理が繰り返される場合でも正常に機能する必要があるため
// 数字を直接記述するようなコードでは意味がありません。
// 下記のように変数を一箇所変えるだけで同じような規則性で動作するように実装して下さい。

//$input = 6;

// 1
// 21
// 321
// 4321
// 54321
// 654321
//

