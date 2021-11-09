<?php 
require_once '../Encode.php';
session_start(); ?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>セッション情報</title>
</head>
<body>
    <form action="session2.php" method="POST">
        <label for="email">メールアドレス:</label>
        <input type="text" id="email" name="email" size="40"
          value="<?=e($_SESSION['email'] ?? ''); ?>" />
        <br/>
        <label for="name">名前:</label>
        <input type="text" id="name" name="name" size="40"
          value="<?=e($_SESSION['name'] ?? ''); ?>" />
        <br/>
        <input type="submit" value="送信">
    </form>
</body>
</html>