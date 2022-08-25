<?php
// セッション変数を利用するためにセッションを開始
session_start();
?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>登録画面</title>
</head>

<body>
    <div class="wrap">
        <h2>登録完了しました。</h2>
        <!-- 保存しているセッション変数の呼び出し -->
        <p>IDは<?= htmlspecialchars($_SESSION['id']); ?>です。</p>
        <p>Passは<?= htmlspecialchars($_SESSION['pass']); ?>です。</p>

        <button type="button" onclick="location.href='form.php'">トップに戻る</button>
    </div>
</body>

</html>