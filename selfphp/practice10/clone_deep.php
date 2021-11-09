<?php 
require_once 'Person1.php';
require_once 'FriendList.php';

//FriendListオブジェクトにPersonオブジェクトをセット
$list = new FriendList();
$list->add(new Person('太郎','山田'));
$list->add(new Person('奈美','掛谷'));
$list->add(new Person('健','高江'));

//FriendListオブジェクトの複製を生成
$list2 = clone $list;
var_dump($list2(1) === $list(1));
echo $list(0).'<br>';
echo $list2(2).'<br>';

$list->add(new Person('jobs','steve'));
$list2->add(new Person('jobs','steve2'));


echo $list(3).'<br/>';
echo $list2(3).'<br/>';
print_r($list).'<br/>';
print_r($list2).'<br/>';
