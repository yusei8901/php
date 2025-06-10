<?php

// ビンゴ用の数字ランダム出力
echo "ー ビンゴ用の数字ランダム出力 ー";
echo "<br>";
$randomNumber = mt_rand(1, 75);
echo "出た番号は". $randomNumber. "です。";
echo "<br>";
echo "ーーーーーーーーーー";
echo "<br>";

// ランダム数字配列
// $array_size = 10; // ←生成する配列の数（生徒の人数）
// $numbers = array();
// for ($i=0; $i < $array_size; $i++) {
//     $numbers[] = rand(50, 100);
// }

// 固定の数字配列
$numbers = [60, 35, 43, 28, 77, 90, 55, 39, 87, 64];
$array_size = count($numbers);

// 配列の点数の表示
echo "生徒". $array_size. "人の点数一覧";
echo "<br>";
foreach($numbers as $number) {
    echo "・". $number. "点";
    echo "<br>";
}
echo "ーーーーーーーーーー";
echo "<br>";

// 並び替え
echo "点数を昇順に並び替え";
echo "<br>";

// 昇順に並び替える
$ascending_order = array();
sort($numbers);
foreach($numbers as $number) {
    $ascending_order[] = $number;
}

// 昇順に並び替えた点数の表示
foreach($ascending_order as $score) {
    echo "・". $score. "点";
    echo "<br>";
}

echo "ーーーーーーーーーー";
echo "<br>";


// 配列の合計値
$total = 0;
foreach($numbers as $number) {
    $total += $number;
}

echo "合計点：". $total. "点";
echo "<br>";

echo "ーーーーーーーーーー";
echo "<br>";


// 平均値を出す関数
function getAverage () {
    $average = $GLOBALS['total'] / $GLOBALS['array_size'];
    round($average, 1);
    return $average;
}
// $average = getAverage();
echo "平均値：". getAverage(). "点";
echo "<br>";

echo "ーーーーーーーーーー";
echo "<br>";



// 中央値を出す関数
function getMedian() {
    if($GLOBALS['array_size'] % 2 === 1) {
        $gotMedian = $GLOBALS['ascending_order'][round($GLOBALS['array_size'] / 2, 0) - 1];
    } elseif($GLOBALS['array_size'] % 2 === 0) {
        $gotMedian = ($GLOBALS['ascending_order'][$GLOBALS['array_size'] / 2 - 1] + $GLOBALS['ascending_order'][$GLOBALS['array_size'] / 2]) / 2;
    }
    return $gotMedian;
}
$median = getMedian();
echo "中央値：". $median. "点";
echo "<br>";

echo "ーーーーーーーーーー";
echo "<br>";

// 分散を出す関数
$squareSum = 0;
function getVariance() {
    foreach($GLOBALS['numbers'] as $number) {
        $GLOBALS['squareSum'] += ($number - $GLOBALS['average']) ** 2;
    }
    $variance = $GLOBALS['squareSum'] / $GLOBALS['array_size'];
    return $variance;
}
$variance = getVariance();
echo "分散：". $variance;
echo "<br>";

echo "ーーーーーーーーーー";
echo "<br>";

// 標準偏差を出す関数
function getStandardDeviation() {
    $gotStandardDeviation = sqrt($GLOBALS['variance']);
    return $gotStandardDeviation;
}
$standardDeviation = round(getStandardDeviation(), 1);
echo "標準偏差：". $standardDeviation. "　(小数第２位を四捨五入)";
echo "<br>";

echo "ーーーーーーーーーー";
echo "<br>";

// 偏差値を出す関数
function getDeviationScore($score) {
    $gotDeviationScore = ($score - $GLOBALS['average']) / 20 * 10 + 50;
    return $gotDeviationScore;
}
$examScore = 90;
$deviationScore = getDeviationScore($examScore);
echo "このテストの". $examScore. "点の偏差値は". $deviationScore. "です。";
echo "<br>";

echo "ーーーーーーーーーー";
echo "<br>";
?>