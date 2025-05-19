<?php

// 引数と戻り値あり
// function outputNumber($a) {
//     echo "引数の値は" . $a . "です";
//     return;
// }
// outputNumber(2);

// 引数と戻り値なし
// function outputHello() {
//     echo "Hello World";
// }
// outputHello();

// 引数と戻り値あり
// function text($number1, $number2) {
//     $value = $number1 + $number2;
//     return $value;
// }
// $total = text(2, 3);
// echo $total;


// function addNumber($number1, $number2) {
//     $sum = $number1 + $number2;
//     return $sum;
// }
// $answer = addNumber(2, 3);
// echo $answer;

// 自分の解答↓
// function sumNumbers($score1, $score2, $score3) {
//     $scores = $score1 + $score2 + $score3;
//     if($scores > 210) {
//         echo "合計点は" . $scores . "点なので合格です";
//     }else{
//         echo "合計点は" . $scores . "点なので不合格です";
//     }
//     return;
// }
// $score = sumNumbers(80, 90, 50);
// echo $score;

// 模範解答
// function exam($score1, $score2, $score3) {
//     $total = $score1 + $score2 + $score3;
//     if($total > 210) {
//         echo $total . "点なので合格です";
//     } else {
//         echo $total . "点なので不合格です";
//     }
// }
// echo (exam(80, 60, 90));

// 自分の解答↓
// function triangleArea($base, $height) {
//     $triangle = $base * $height / 2;
//     return $triangle;
// }
// function squareArea($height, $width) {
//     $square = $height * $width;
//     return $square;
// }
// function trapezoidArea($upperBase, $bottomBase, $height) {
//     $trapezoid = ($upperBase + $bottomBase) * $height / 2;
//     return $trapezoid;
// }
// echo (triangleArea(4, 4)) . "<br>";
// echo (squareArea(4, 8)) . "<br>";
// echo (trapezoidArea(4, 8, 3)) . "<br>";

// 模範解答↓
// function getSquareArea($base, $height) {
//     return $base * $height;
// }
// function getTriangleArea($base, $height) {
//     return $base * $height / 2;
// }
// function getTrapezoidArea($upperBase, $lowerBase, $height) {
//     return ($upperBase + $lowerBase) * $height / 2;
// }
// echo getSquareArea(5, 5) . "\n";
// echo getTriangleArea(7, 8) . "\n";
// echo getTrapezoidArea(4, 5, 4);

?>