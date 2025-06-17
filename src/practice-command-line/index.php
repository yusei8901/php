<?php

// ランダム数字配列
// $array_size = 10; // ←生成する配列の数（生徒の人数）
// $scores = array();
// for ($i=0; $i < $array_size; $i++) {
//     $scores[] = rand(50, 100);
// }

// 固定の数字配列
// $scores = [60, 35, 43, 28, 77, 90, 55, 39, 87, 64];
// $array_size = count($scores);


// 標準入力から点数を読み込む
echo "生徒のテストの点数をカンマ区切りで入力してください（例: 80,70,90）: ";
$input = trim(fgets(STDIN));

// 入力を配列に変換
$scores = array_map('intval', explode(',', $input));

// 配列の要素数をカウント
$array_size = count($scores);

// 配列の点数の表示
echo "生徒{$array_size}人の点数一覧";
echo "\n";
foreach($scores as $score) {
    echo "{$score}点 ";
}

// 昇順に並び替える
echo "\n";
echo "点数を昇順に並び替え";
echo "\n";
$ascending_orders = array();
sort($scores);
foreach($scores as $score) {
    $ascending_orders[] = $score;
}

// 昇順に並び替えた点数の表示
foreach($ascending_orders as $ascending_order) {
    echo "{$ascending_order}点 ";
}

// 配列の合計値
$total = 0;
foreach($scores as $score) {
    $total += $score;
}
echo "\n";
echo "合計値：{$total}点";
echo "\n";

// 平均値を出す関数
function getAverage () {
    $average = $GLOBALS['total'] / $GLOBALS['array_size'];
    round($average, 1);
    return $average;
}
$average = round(getAverage(), 1);
echo "平均値：{$average}点　(小数点以下が続く場合は小数第２位を四捨五入)";
echo "\n";

// 中央値を出す関数
function getMedian() {
    if($GLOBALS['array_size'] % 2 === 1) {
        $median = $GLOBALS['ascending_orders'][round($GLOBALS['array_size'] / 2, 0) - 1];
    } elseif($GLOBALS['array_size'] % 2 === 0) {
        $median = ($GLOBALS['ascending_orders'][$GLOBALS['array_size'] / 2 - 1] + $GLOBALS['ascending_orders'][$GLOBALS['array_size'] / 2]) / 2;
    }
    return $median;
}
$median = getMedian();
echo "中央値：{$median}点";
echo "\n";

// 分散を出す関数
$squareSum = 0;
function getVariance() {
    foreach($GLOBALS['scores'] as $number) {
        $GLOBALS['squareSum'] += ($number - $GLOBALS['average']) ** 2;
    }
    $variance = $GLOBALS['squareSum'] / $GLOBALS['array_size'];
    return $variance;
}
$variance = round(getVariance(), 1);
echo "分散：{$variance}　(小数点以下が続く場合は小数第２位を四捨五入)";
echo "\n";

// 標準偏差を出す関数
function getStandardDeviation() {
    $standardDeviation = sqrt($GLOBALS['variance']);
    return $standardDeviation;
}
$standardDeviation = round(getStandardDeviation(), 1);
echo "標準偏差：{$standardDeviation}　(小数点以下が続く場合は小数第２位を四捨五入)";
echo "\n";

// 偏差値を出す関数
function getDeviationScore($score) {
    $deviationScore = ($score - $GLOBALS['average']) / 20 * 10 + 50;
    return $deviationScore;
}

$max = max($scores);
$min = min($scores);
echo "このテストの最高点（{$max}点）の偏差値は". getDeviationScore($max). "です。";
echo "\n";
echo "このテストの最低点（{$min}点）の偏差値は". getDeviationScore($min). "です。";
echo "\n";

