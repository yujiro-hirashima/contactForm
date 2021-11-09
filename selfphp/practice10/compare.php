<?php 
require_once 'Person1.php';

$p1 = new Person('リオ','山田');
//オブジェクト変数を参照渡しした場合
$p2 = $p1;
var_dump($p1 == $p2);
var_dump($p1 === $p2);
//オブジェクト変数を値渡し（コピー）した場合
$p3 = clone $p1;
var_dump($p1 == $p3);
var_dump($p1 === $p3);
