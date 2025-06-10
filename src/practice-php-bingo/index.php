<?php

session_start();

// 初回アクセス時、配列を初期化
if(!isset($_SESSION['numbers'])) {
    $_SESSION['numbers'] = [];
    $randomNumbers = [];
}

// ランダムな新しい数値を生成
if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $available_numbers = array_diff(range(1, 75), $_SESSION['numbers']);
    if(count($available_numbers) > 0) {
        $new_number = $available_numbers[array_rand($available_numbers)];
        $_SESSION['numbers'][] = $new_number;
    }
}

?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ビンゴマシーン</title>
    <link rel="stylesheet" href="css/sanitize.css">
    <link rel="stylesheet" href="css/index.css">
</head>
<body>
    <header class="header">
        <a href="index.php" class="header-link">
            <h1 class="header-logo">ビンゴマシーン</h1>
        </a>
    </header>
    <main class="main">
        <div class="wrapper">
            <form method="post">
                <button class="btn" type="submit">ルーレットを回す</button>
            </form>
            <form action="reset.php" method="post">
                <button type="submit">リセット</button>
            </form>
        </div>
        <div class="wrapper">
            <h2 class="wrapper-title">今回の数字</h2>
            <p class="number-font large"><?php echo $new_number ?></p>
        </div>
        <div class="wrapper">
            <h2 class="wrapper-title">出た数字一覧</h2>
            <?php
                $randomNumbers = array_reverse($_SESSION['numbers']);
                $lastElement = end($_SESSION['numbers']);
                foreach($randomNumbers as $i => $number) {
                    $style = ($i === 0) ? 'style="color:red;"' : '';
                    echo "<p class='number-font'><span {$style}>{$number}</span>,</p>";
                    if(($i + 1) % 10 == 0) {
                        echo "<div class='separate'>ーーーーーーーーーーーーーーーーーーーー</div>";
                    }
                }
            ?>
        </div>
    </main>
</body>
</html>