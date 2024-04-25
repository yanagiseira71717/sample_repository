<?php
// 以下配列の中身をfor文を使用して表示してください。
// 表が縦横に伸びてもある程度対応できるように柔軟な作りを目指してください。
// 表示はHTMLの<table>タグを使用すること

/**
 * 表示イメージ
 *  _________________________
 *  |_____|_c1|_c2|_c3|横合計|
 *  |___r1|_10|__5|_20|___35|
 *  |___r2|__7|__8|_12|___27|
 *  |___r3|_25|__9|130|__164|
 *  |縦合計|_42|_22|162|__226|
 *  ‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾
 */
$arr = [
    'r1' => ['c1' => 10, 'c2' => 5, 'c3' => 20,  ],
    'r2' => ['c1' => 7, 'c2' => 8, 'c3' => 12, ],
    'r3' => ['c1' => 25, 'c2' => 9, 'c3' => 130,],
];

$arr_count = count($arr);

?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>テーブル表示</title>
<style>
table {
    border:1px solid #000;
    border-collapse: collapse;
}
th, td {
    border:1px solid #000;
    height: 20px;
}
</style>
</head>
<body> 
    <!-- ここにテーブル表示 -->
    <table>
            <?php
                $totals = [];
            
                // ヘッダーの出力
                echo '<tr><th></th>'; 
                for ($l = 1; $l <= count($arr['r1']); $l++) { 
                    
                    $c_key = 'c'.$l;
                    echo "<th>{$c_key}</th>";
                }
                echo '<th>横合計</th></tr>';
                
                // body部分の出力
                for ($i = 1; $i <= count($arr); $i++) {
                    $r_sum = 0;
                    echo '<tr>'; 

                    $r_key = 'r'. $i;
                    echo "<th>{$r_key}</th>"; 
                    
                    for ($j = 1; $j <= count($arr[$r_key]); $j++) {
                        $c_key = 'c'. $j;
                        echo "<td>". $arr[$r_key][$c_key]. "</td>"; 
                        $r_sum = $r_sum + $arr[$r_key][$c_key];

                        if ( !isset($totals[$j - 1]) ) {
                            $totals[$j -1] = $arr[$r_key][$c_key];
                            
                        } else {
                            $totals[$j -1] += $arr[$r_key][$c_key]; 
                        }
                    }
                    
                    echo "<td>{$r_sum}</td>";

                    echo '</tr>';
                }      

                // フッターの出力
                echo "<tfoot><tr><th>縦合計</th>";
                $total_sum = 0;
                for ($k = 0; $k < count($arr[$r_key]); $k++) {
                    echo"<td>{$totals[$k]}</td>";
                   
                    $total_sum = $total_sum + $totals[$k];
                
                }
                echo "<td>{$total_sum}</td>";
            
            ?>
</body>
</html>


