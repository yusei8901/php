<?php
$height = htmlspecialchars($_POST['height'], ENT_QUOTES);
$weight = htmlspecialchars($_POST['weight'], ENT_QUOTES);
$result = round($weight / (($height / 100) * ($height / 100)), 2);
$appropriateWeight = round(($height / 100) * ($height / 100) * 22, 2);
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BMI診断</title>
    <link rel="stylesheet" href="css/sanitize.css">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/result.css">
</head>
<body>
    <header class="header">
        <a href="index.php" class="header-logo__link">
            <h1>BMI診断</h1>
        </a>
    </header>
    <main class="result-wrapper">
        <h2>あなたの入力内容</h2>
        <p>身長：<?php echo $height ?>(cm)</p>
        <p>体重：<?php echo $weight ?>(kg)</p>
        <h3>診断結果</h3>
        <p>あなたのBMIは<?php echo $result ?>です。</p>
        <p>肥満度は
            <?php if($result < 18.5): ?>
                <span class="font-bold">低体重</span>です。
            <?php elseif(18.5 <= $result && $result < 25): ?>
                <span class="font-bold">普通体重</span>です。
            <?php elseif(25 <= $result && $result < 30): ?>
                <span class="font-bold">肥満１度</span>です。
            <?php elseif(30 <= $result && $result < 35): ?>
                <span class="font-bold">肥満２度</span>です。
            <?php elseif(35 <= $result && $result < 40): ?>
                <span class="font-bold">肥満３度</span>です。
            <?php else: ?>
                <span class="font-bold">肥満４度</span>です。
            <?php endif; ?>
        </p>
        <p>適正体重は<?php echo $appropriateWeight; ?>(kg)です。</p>
    </main>
</body>
</html>