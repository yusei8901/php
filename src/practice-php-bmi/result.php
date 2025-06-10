<?php
$height = htmlspecialchars($_POST['height'], ENT_QUOTES);
$weight = htmlspecialchars($_POST['weight'], ENT_QUOTES);
$sex = htmlspecialchars($_POST['sex'], ENT_QUOTES);
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
        <div class="result-wrapper__input-contents">
            <h2>あなたの入力内容</h2>
            <div class="input-wrapper">
                <p class="input-content">性別：
                    <?php if($sex === "man"): ?>
                        男性
                    <?php else: ?>
                        女性
                    <?php endif; ?>
                </p>
                <p class="input-content">身長：<?php echo $height ?>(cm)</p>
                <p class="input-content">体重：<?php echo $weight ?>(kg)</p>
            </div>
        </div>
        <div class="result-wrapper__result-contents">
            <h2>診断結果</h2>
            <div class="result-wrapper__result-contents-center">
                <div class="result-wrapper__result-contents-left">
                    <p class="result-content">あなたのBMIは<span class="font-bold"><?php echo $result ?></span>です。</p>
                    <p class="result-content">肥満度は
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
                    <p class="result-content">適正体重は<span class="font-bold"><?php echo $appropriateWeight; ?>(kg)</span>です。</p>
                </div>
                <div class="result-wrapper__result-contents-right">
                    <div class="img-wrapper">
                        <?php if($sex === "man"): ?>
                            <?php if($result < 18.5): ?>
                                <img src="images-body/slender_man.png" alt="痩せた男性">
                            <?php elseif(18.5 <= $result && $result < 25): ?>
                                <img src="images-body/standard_man.png" alt="標準体重の男性">
                            <?php else: ?>
                                <img src="images-body/obesity_man.png" alt="太った男性">
                            <?php endif; ?>
                        <?php else: ?>
                            <?php if($result < 18.5): ?>
                                <img src="images-body/slender_woman.png" alt="痩せた女性">
                            <?php elseif(18.5 <= $result && $result < 25): ?>
                                <img src="images-body/standard_woman.png" alt="標準体重の女性">
                            <?php else: ?>
                                <img src="images-body/obesity_woman.png" alt="太った女性">
                            <?php endif; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="result-wrapper__advice">
            <h2>ひとことアドバイス</h2>
            <p class="result-wrapper__advice-contents">
                <?php if($result < 18.5): ?>
                    　低体重（やせ）の状態から脱する為には、バランスの取れた食生活と適度な運動が重要です。特に、筋肉量を増やし、体重を健康的に増やすことがポイントです。
                <?php elseif(18.5 <= $result && $result < 25): ?>
                    　引き続き正常範囲（18.5～24.9）に収まるように、バランスの良い食事と適度な運動を心がけましょう。
                <?php elseif(25 <= $result && $result < 30): ?>
                    　食事と運動のバランスを整え、徐々に体重を減らしていきましょう。３食きちんとバランスのとれた食事を摂り、ゆっくりとよく噛んで食べる、間食を控える、毎日適度な運動を心がける、など意識して生活しましょう。
                <?php else: ?>
                    　まずは医師や栄養士に相談し、適切な食事と運動指導を受けることが重要です。食事では、バランスの良い食事を心がけ、高タンパク低脂質を意識し、ゆっくりとよく噛んで食べるようにしましょう。運動では、毎日30分以上の有酸素運動を継続し、筋力トレーニングも取り入れると良いでしょう。また、間食やアルコールを控え、睡眠時間を確保することも重要です。
                <?php endif; ?>
            </p>
        </div>
        <div class="btn-box">
            <button class="btn" onclick="location.href='index.php'">もう一度診断する</button>
        </div>
    </main>
</body>
</html>