<?php setcookie('email', $_POST['email'], time() + (60 * 60 * 24 * 90));
      setcookie('name', $_POST['name'], time() + (60 * 60 * 24 * 30)); ?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>クッキー情報</title>
</head>
<body>
    <p>クッキーを保存しました。</p>
</body>
</html>