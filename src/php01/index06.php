<?php

// メモ
// for($i = 初期値; $i <= 回数; 増減式) {
//     処理
// }

// for($i = 1; $i <= 5; $i++) {
//     echo ($i * 2)."<br>";
// }

// $count = 0;
// while($count < 20) {
//     ++$count;
//     echo $count."<br>";
// }

// $count = 0;
// while($count <= 100) {
//     if($count % 3 === 0) {
//         $count++;
//         continue;
//     }
//     if($count > 19) {
//         break;
//     }
//     echo $count."<br>";
//     $count++;
// }

// $num = 0;
// do {
//     echo "num = ". $num . "<br>";
//     $num++;
// } while($num < 3);

// for($i = 1; $i <= 50; $i++) {
//     if($i % 3 === 0 && $i % 5 === 0) {
//         echo "FizzBuzz";
//     }else if($i % 3 === 0) {
//         echo "Fizz";
//     }else if($i % 5 === 0) {
//         echo "Buzz";
//     }else {
//         echo $i;
//     }
//     echo "<br>";
// }

// 自分の解答↓
// for($i = 1; $i <= 25; $i++) {
//     echo "●";
//     if($i % 5 === 0) {
//         echo "<br>";
//     }
// }

// 模範解答↓
for($i = 1; $i < 6; $i++) {
    for($j = 1; $j < 6; $j++) {
        echo "●";
    }
    echo "<br>";
}



?>