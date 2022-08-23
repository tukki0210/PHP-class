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

        <!-- 標準：フォームのpostで移動 -->
        <form action="register.php" method="post">
            <label for="id"><span>ID</span></label>
            <br>
            <input type="text" name="id" value="<?= $_POST['id']?>"/>
            <br>
            <label for="pass"><span>PASS</span></label>
            <br>
            <input type="text" name="pass" value="<?= $_POST['pass']?>"/>
            <br>
            <input type="submit" value="登録する">
        </form>
</body>

</html>