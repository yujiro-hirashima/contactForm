<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>画像のアップロード</title>
</head>
<body>
    <form action="bindValue_process.php" method="POST" enctype="multipart/form-data">
    <label for="photo">アップロードする画像：</label>
    <input type="file" id="photo" name="photo" size="50"/>
    <input type="submit" value="アップロード"/>
    </form>
</body>
</html>