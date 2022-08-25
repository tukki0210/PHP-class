<?php session_start(); ?>

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
            <label id="ID" for="id"><span>ID</span></label>
            <br>
            <input type="text" name="id" value="<?=$_SESSION['id'] ?? '' ?>" required/>
            <br>
            <label for="pass"><span>PASS</span></label>
            <br>
            <input type="text" name="pass" value="<?=$_SESSION['pass'] ?? '' ?>" required/>
            <br>
            <input id="btn" type="submit" value="送信" />
        </form>
    </div>
    <script>

        const ID = document.getElementById
        const btn = document.getElementById('btn');

        // btn.disabled = true;


    </script>
</body>

</html>