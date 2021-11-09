<?php 
if(!empty($_POST)){
    echo "<pre>";
    var_dump($_POST) ;
    echo "</pre>";
}

$pageFlag = 0;

if(!empty($_POST['btn_confirm'])){
    $pageFlag = 1;
}
if(!empty($_POST['btn_submit'])){
    $pageFlag = 2;
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>phpForm</title>
</head>
<body>

<?php if($pageFlag === 0): ?>

<form action="input.php" method="POST">
<span>氏名</span>
<input type="text" name="your_name">
<br>
<span>メールアドレス</span>
<input type="email" name="email">
<br>
<input type="submit" name="btn_confirm" value="確認する">
</form>

<?php endif; ?>

<?php if($pageFlag === 1): ?>

<form action="input.php" method="POST">
<span>氏名</span>
<?php echo $_POST['your_name']; ?>
<br>
<span>メールアドレス</span>
<?php echo $_POST['email']; ?>
<br>
<input type="submit" name="btn_submit" value="送信する">
<input type="hidden" name="your_name" value="<?php echo $_POST['your_name']; ?>">
<input type="hidden" name="email" value="<?php echo $_POST['email']; ?>">

</form>

<?php endif; ?>

<?php if($pageFlag === 2): ?>
<p>送信しました。</p>
<?php endif; ?>




    
</body>
</html>