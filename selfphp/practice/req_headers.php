<?php require_once '../Encode.php'; ?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ヘッダ情報</title>
</head>
<body>
    <table border="1">
    <?php 
    // $_SERVERのキー/値を順に取得
    foreach($_SERVER as $key => $value){
        // キー($key)が「HTTP」で始まる場合のみ、その値を出力
        if (mb_strpos($key,'HTTP_') === 0){
    ?>
      <tr valign="top">
          <th><?=e($key) ?></th>
          <th><?=e($value) ?></th>
      </tr>
    <?php
        }
    }
    ?>
    </table>
</body>
</html>