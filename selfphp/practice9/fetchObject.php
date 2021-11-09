<?php 
require_once '../DbManager.php';
require_once 'Book.php';

$db = getDb();
// isbn列の値をキーに書籍情報を取得
$stt = $db->query("SELECT * FROM book");

// 取得した書籍情報をBookクラスにフェッチ（引数は値引き率）

foreach($stt as $row){
    $row = $stt->fetchObject('Book',[0.1]);
    echo"{$row->title}：{$row->discount()}円";
    echo"<br/>";
};


$stt2 = $db->query("SELECT title AS name, publish AS name FROM book WHERE isbn='978-4-7981-4102-2'");
print_r ($stt2->fetch(PDO::FETCH_ASSOC));

echo "<br/><br/>";

$stt3 = $db->query("SELECT title AS name, publish AS name FROM book WHERE isbn='978-4-7981-4102-2'");
print_r ($stt3->fetch(PDO::FETCH_NAMED));

