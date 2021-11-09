<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>アップロード処理</title>
</head>
<body>
    <form action="file2.php" method="POST" enctype="multipart/form-data">
      <label for="upfile">ファイルのパス：</label>
      <input type="hidden" value="1000000" />
      <input type="file" id="upfile" name="upfile" size="40" />
      <input type="submit" value="アップロード" />
    </form>
</body>
</html>