<?php 
require_once 'MyClass2.php';

$cls = new MyClass2();
//MyClass2オブジェクトのプロパティをリスト表示
foreach ($cls as $key => $value){
    echo "{$key}:{$value}<br/>";
}
echo '<hr />';
//MyClass2オブジェクトのプロパティをリスト表示（showProrertyメソッド経由）
$cls->showProperty();