<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>チェックボックス</title>
</head>
<body>
    <form action="check2.php" method="POST">
        あなたがよく使用するサーバサイド技術は？<br/>
        <input id="php" type="checkbox" name="arch[]" value="PHP" />
        <label for="php">PHP</label>
        <input id="jsp" type="checkbox" name="arch[]" value="JSP&サーブレット" />
        <label for="jsp">JSP&サーブレット</label>
        <input id="asp" type="checkbox" name="arch[]" value="ASP.NET" />
        <label for="asp">ASP.NET</label>

        <input type="submit" value="送信">
    </form>
</body>
</html>