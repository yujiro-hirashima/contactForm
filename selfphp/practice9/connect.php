<?php 
$dsn = 'mysql:dbname=selfphp; host=127.0.0.1; charset=utf8';
$usr = 'selfusr';
$passwd = 'selfpass';

try{
    $db = new PDO($dsn,$usr,$passwd);
    echo '接続に成功しました。';
}   catch(PharException $e){
    echo "接続エラー：{$e->getMessage()}";
}finally{
    $db = null;
}
?>