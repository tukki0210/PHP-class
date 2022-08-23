<?php
// セッション変数を利用するためにセッションを開始
session_start();
// セッション変数にPOSTメソッドで受け取った値を覚えさせる
$_SESSION['id'] = $_POST['id'];
$_SESSION['pass'] = $_POST['pass'];
?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>確認フォーム</title>
</head>

<body>
    <div class="wrap">
        <h2>確認</h2>
        <!-- POSTで受け取った値を表示する -->
        <p>IDは<?= htmlspecialchars($_POST['id']); ?>です。</p>
        <p>PASSは<?= htmlspecialchars($_POST['pass']); ?>です。</p>
        <p>登録してよろしいですか。</p>
        <!-- JavaScriptを使ったページの移動 -->
        <button type="button" onclick="location.href='form.php'">戻る</button>
        <button type="button" onclick="location.href='register.php'">登録する</button>
    </div>
</body>

</html>