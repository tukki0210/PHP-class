<?php
session_start();
// 乱数を作りトークンとして扱う
$token = uniqid(bin2hex(random_bytes(13), true));
// $token = "token"
// セッション変数に覚えさせる
$_SESSION['token'] = $token;
?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>入力フォーム</title>
</head>

<body>
    <form action="register.php" method="post">
        <!-- hiddenのフォームに埋め込む -->
        <input type="hidden" name="token" value="<?php print $token; ?>">
        <input type="text" name="memo">
        <input type="submit" value="登録">
    </form>
</body>

</html>