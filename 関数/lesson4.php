<?php
// ＜アルゴリズムの注意点＞
// アルゴリズムではこれまでのように調べる力ではなく物事を論理的に考える力が必要です。
// 検索して答えを探して解いても考える力には繋がりません。
// まずは検索に頼らずに自分で処理手順を考えてみましょう。

// 以下は自動販売機のお釣りを計算するプログラムです。
// 150円のお茶を購入した際のお釣りを計算して表示してください。
// 計算内容は関数に記述し、関数を呼び出して結果表示すること
// $yen と $product の金額を変更して計算が合っているか検証を行うこと

// 表示例1）
// 10000円札で購入した場合、
// 10000円札x0枚、5000円札x1枚、1000円札x4枚、500円玉x1枚、100円玉x3枚、50円玉x1枚、10円玉x0枚、5円玉x0枚、1円玉x0枚

// 表示例2）
// 100円玉で購入した場合、
// 50円足りません。
// 50円で購入した場合100円足りませんと表示されるようにする

// お釣りを計算する関数
function calculateChange($yen, $product) {
    // 購入金額の表示処理
    if ($yen >= 1000) {
        echo $yen . "札で購入した場合、";
    } else {
        echo $yen . "円で購入した場合、";
    }
    echo "<br>";

    // お釣りの枚数を表示
    if ($yen >= $product) {
        // お釣り計算
        $change = $yen - $product;

        // お釣りの紙幣・硬貨の種類と枚数を初期化
        $denominations = [
            10000 => 0,
            5000 => 0,
            1000 => 0,
            500 => 0,
            100 => 0,
            50 => 0,
            10 => 0,
            5 => 0,
            1 => 0,
        ];
        // お釣りを紙幣・硬貨ごとに分解して枚数を計算
        foreach ($denominations as $denomination => $count) {
            while ($change >= $denomination) {
                $change -= $denomination;
                $denominations[$denomination]++;
            }
        }
        $output = "";
        foreach ($denominations as $denomination => $count) {
            $output .= $denomination . "円" . "x" . $count . "枚、";
        }
        $output .= "<br>";
    }
    //表示例２
    elseif ($yen < $product) {
        $shortage = $product - $yen;
        $output = "{$shortage}円足りません。<br>";
    }
    return $output;
}
// 購入金額と商品価格
$yen = 10000; // お金の額
$product = 150; // 商品の価格

?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>自動販売機のお釣り計算</title>
</head>
<body>
    <section>
    <?php echo calculateChange($yen, $product) ?>
    </section>
</body>
</html>