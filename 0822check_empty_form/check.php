<?php
// セッション変数を利用するためにセッションを開始
session_start();
// セッション変数にPOSTメソッドで受け取った値を覚えさせる
$_SESSION['id'] = $_POST['id'];
$_SESSION['pass'] = $_POST['pass'];

// idまたはpassが空っぽだったら
// || or演算 P110
// === 厳密な等価 P103
// ==  ゆるい等価 P102
if ($_POST['id'] === '' || $_POST['pass'] === '') {
    // 前のページへリダイレクトさせる。（P.374）

    // P377
    // $_SERVER['HTTP_HOST']：サーバーのホスト名（localhostなど）
    // $_SERVER['PHP_SELF']：実行中のスクリプト（このPHPファイル）のパス
    // .dirname（パス名）：指定したパスの一つ親のパスを返す

    // URLは学校の環境と家の環境で違うので、$_SERVER[]を使い、動いてる環境のURLを登録させる
    header('location: http://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']) . '/form.php');
    // リダイレクトしたあと、このファイル(check.php)を停止させる。
    exit();
} else {
    // 一度PHPを終了させる
?>

    <!-- ifのelse内で表示するｈｔｍｌ -->
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
    <!-- phpのelse文の終了を表す -->
<?php }; ?>