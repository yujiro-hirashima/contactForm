<?php require_once '../Encode.php'; ?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>ポストデータ</title>
</head>
<body>
    こんにちは、<?php echo e($_POST['name']) ?>さん！
</body>
</html>