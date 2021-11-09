<?php 
require_once '../DbManager.php';

try{
    $db = getDb();
    //例外処理を有効加
    $stt = $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //トランザクションを開始
    $db->beginTransaction();
    $db->exec("INSERT INTO book(isbn, title, price, publish, published)
     VALUES('978-4-7981-2151-2','独習PHP 第2版', 3200, '翔泳社','2010-04-12')");
     // ここで主キー制約違反が発生する
     $db->exec("INSERT INTO book(isbn, title, price, publish, published)
     VALUES('978-4-7981-2151-3','ひとりで学ぶPHP', 3500, '翔泳社','2016-06-01')");
     //全てが成功したら、トランザクションをコミット
     $db->commit();
} catch(PDOException $e){
    echo "エラーメッセージ：{$e->getMessage()}";
}