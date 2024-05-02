<?php
// 以下をそれぞれ表示してください。（すべて改行を行って出力すること)
// 現在時刻を自動的に取得するPHPの関数があるので調べて実装してみて下さい。
// 実行するとその都度現在の日本の日時に合わせて出力されるされるようになればOKです。
// 日時がおかしい場合、PHPのタイムゾーン設定を確認して下さい。

// ・現在日時（xxxx年xx月xx日（x曜日））
// ・現在日時から３日後（yyyy年mm月dd日 H時i分s秒）
// ・現在日時から１２時間前（yyyy年mm月dd日 H時i分s秒）
// ・2020年元旦から現在までの経過日数 (ddd日)
date_default_timezone_set('Asia/Tokyo');

echo "現在日時";
$currentDateTime = date('(Y年m月d日（') . getJapaneseDayOfWeek(date('l')) . '）)';
echo $currentDateTime . "<br>";

echo "現在日時から3日後";
$threeDaysLater = date('(Y年m月d日 H時i分s秒)', strtotime('+3 days'));
echo $threeDaysLater . "<br>";

echo "現在日時から12時間前" ;
$twelveHoursBefore = date('(Y年m月d日 H時i分s秒)', strtotime('-12 hours'));
echo $twelveHoursBefore . "<br>";

echo "2020年元旦から現在までの経過日数 ";
$startDate = strtotime('2020-01-01');
$currentDate = time();
$elapsedDays = floor(($currentDate - $startDate) / (60 * 60 * 24));
echo "（" . $elapsedDays . '日）' . "<br>";

function getJapaneseDayOfWeek($dayOfWeek) {
    $dayOfWeekTranslations = array(
        'Monday' => '月曜日',
        'Tuesday' => '火曜日',
        'Wednesday' => '水曜日',
        'Thursday' => '木曜日',
        'Friday' => '金曜日',
        'Saturday' => '土曜日',
        'Sunday' => '日曜日'
    );

    return $dayOfWeekTranslations[$dayOfWeek];
}
?>