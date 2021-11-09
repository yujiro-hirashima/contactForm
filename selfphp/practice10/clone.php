<?php 
require_once 'Person1.php';

$p1 = new Person('リオ','山田');
$p2 = clone $p1; //オブジェクトを代入
$p2->firstName = '奈美';
$p2->lastName  = '掛谷';  //代入先の変数に変更
print_r($p1);
echo'<br/>';
Print_r($p2);