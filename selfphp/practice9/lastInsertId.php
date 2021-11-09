<?php 
require_once '../DbManager.php';

try{
    //でーだベースへの接続を確立
    $db = getDb();
    //　memberテーブルに対して新規にレコードを挿入
    $db->exec("INSERT INTO member (nam,sex,old,enter,memo) VALUES ('山田次郎','男',18,'2016-09-30','')");
    //　直近のINSERT命令で取得したオートインクリメント値を取得
    echo "直近のID値：{$db->lastInsertId()}";
} catch(PDOException $e){
    echo "エラーメッセージ：{$e->getMessage()}";
}
?>