<?php
session_start();

// 初期化（セッションが空の場合）
if (!isset($_SESSION['numbers'])) {
    $_SESSION['numbers'] = [];
}

// リセットボタンが押された場合
if (isset($_POST['reset'])) {
    $_SESSION['numbers'] = [];
}

// 追加ボタンが押された場合
if (isset($_POST['add'])) {
    $existing = $_SESSION['numbers'];

    // 未出の数値を抽出
    $remaining = array_diff(range(1, 75), $existing);

    // まだ追加できる場合
    if (count($remaining) > 0) {
        // ランダムに1つ選択
        $random = $remaining[array_rand($remaining)];
        $_SESSION['numbers'][] = $random;
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>ランダム番号ジェネレーター</title>
    <style>
        body {
            font-family: sans-serif;
            padding: 20px;
        }
        .number {
            display: inline-block;
            width: 40px;
            text-align: center;
            margin: 5px;
            padding: 5px;
            background: #f0f0f0;
            border-radius: 5px;
        }
        .separator {
            margin: 10px 0;
            color: #888;
        }
    </style>
</head>
<body>

    <h2>ランダムな数字を生成（1〜75）</h2>

    <form method="post">
        <button type="submit" name="add" <?php if (count($_SESSION['numbers']) >= 75) echo 'disabled'; ?>>数字を追加</button>
        <button type="submit" name="reset">リセット</button>
    </form>

    <div style="margin-top:20px;">
        <?php
        $numbers = $_SESSION['numbers'];

        foreach ($numbers as $i => $num) {
            echo "<span class='number'>{$num}</span>";

            // 5個ごとに区切り線と改行
            if (($i + 1) % 5 == 0) {
                echo "<div class='separator'>ーーーーーー</div>";
            }
        }
        ?>
    </div>

</body>
</html>
