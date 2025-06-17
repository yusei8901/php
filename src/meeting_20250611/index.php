<?php
// 標準入力から点数を読み込む
echo "テストの点数をカンマ区切りで入力してください（例: 80,70,90）: ";
$input = trim(fgets(STDIN));

// 入力を配列に変換
$scores = array_map('intval', explode(',', $input));

// 合計と平均を計算
$total = array_sum($scores);
$average = count($scores) > 0 ? $total / count($scores) : 0;

// 結果を表示
echo "合計点: {$total}\n";
echo "平均点: " . round($average, 2) . "\n";
