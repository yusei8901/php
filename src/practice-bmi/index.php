<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BMI診断</title>
    <link rel="stylesheet" href="css/sanitize.css">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/index.css">
</head>
<body>
    <header class="header">
        <a href="index.php" class="header-logo__link">
            <h1>BMI診断</h1>
        </a>
    </header>
    <main class="form-wrapper">
        <p class="form-message">あなたの身長と体重からBMIを計算し、肥満度と理想体重を診断します。</p>
        <form class="form" action="result.php" method="post">
            <label class="form-box">
                <p class="form-text">性別：</p>
                <select class="form-input-sex" name="sex" required>
                    <option value="" hidden disabled selected>性別を選んでください</option>
                    <option value="man">男性</option>
                    <option value="woman">女性</option>
                </select>
            </label>
            <label class="form-box">
                <p class="form-text">身長：</p>
                <input class="form-input" type="number" name="height" step="0.1" min="0" max="300" required>
                <p class="form-text">(cm)</p>
            </label>
            <label class="form-box">
                <p class="form-text">体重：</p>
                <input class="form-input" type="number" name="weight" step="0.1" min="0" max="300" required>
                <p class="form-text">(kg)</p>
            </label>
            <button class="form-button" type="submit">診断する</button>
        </form>
    </main>
</body>
</html>