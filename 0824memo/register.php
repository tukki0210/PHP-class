<?php
    require_once "../../selfphp/DbManager.php";
    require_once "../../selfphp/Encode.php";

    try {
        // DBに接続する
        $db = getDb();
    
        // DB接続のコードはパターン化されているので、使いまわしても大丈夫
        // 変にアレンジするとセキュリティの問題が起こるかも
    
        // $sttという変数名を定義（別にどんな名前でもいい、Statmentの略？)
        // insert into table名（列名） values(:列名)
        // :列名　プレースホルダー
        // プレースホルダーはそのあとのbindValue()のところで当てはめる
        //プレースホルダーの名前はなんでもよい、bindValue()で対応していたらOK
        $stt = $db->prepare('INSERT INTO memo(memo) VALUES(:test)');
    
        // 穴あきのSQL文にフォームの文字をいれて完成させていく
        $stt->bindValue(':test', $_POST['memo']);
    
        // SQLの実行
        $stt->execute();

    } catch (PDOException $e) {
        die("エラーメッセージ：{$e->getMessage()}");
    }
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>登録</title>
</head>
<body>
    <h2>登録完了しました</h2>
    <p>トークンの値</p>
    <?php session_start(); ?>
    <?= $_SESSION['token']; ?>
    <p>隠しフィールドの値</p>
    <?= $_POST['token']; ?>
</body>
</html>