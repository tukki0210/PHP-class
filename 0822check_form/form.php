<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>入力フォーム</title>
</head>

<body>
    <div class="wrap">
        <h2>idとpassを登録します</h2>
        <form method="POST" action="check.php">
            <label for="id"><span>ID</span></label>
            <br>
            <input type="text" name="id" />
            <br>
            <label for="pass"><span>PASS</span></label>
            <br>
            <input type="text" name="pass" />
            <br>
            <input type="submit" value="送信" />
        </form>
    </div>
</body>
<!-- ここからはJavaScript -->
<script>
    console.log('test')
</script>
</html>