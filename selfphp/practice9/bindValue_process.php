<?php 
require_once '../DbManager.php';

try{
    //データベースへの接続を確立
    $db = getDb();
    //INSERT命令を準備
    $stt = $db->prepare('INSERT INTO photo(type,data) VALUES(:type, :data)');
    //プレイスホルダにアップロードファイルの情報をセット
    $file = fopen($_FILES['photo']['tmp_name'],'rb');
    $stt->bindValue(':type',$_FILES['photo']['type'], PDO::PARAM_STR);
    $stt->bindValue(':data',$file,PDO::PARAM_LOB);
    //INSERT命令を実行
    $stt->execute();
    echo '写真のアップロードに成功しました。';
} catch(PDOException $e){
    echo "エラーメッセージ：{$e->getMessage()}";
}