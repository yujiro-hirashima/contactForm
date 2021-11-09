<?php require_once '../Encode.php'; ?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>クエリデータ</title>
</head>
<body>
    こんにちは、<?php echo e($_GET['l-name'].$_GET['f-name'].$_COOKIE['email']) ?>さん！
</body>
</html>