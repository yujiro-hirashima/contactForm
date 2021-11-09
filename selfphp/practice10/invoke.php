<?php 
require_once 'Person1.php';
require_once 'FriendList.php';

//FriendListオブジェクトにPersonオブジェクトをセット
$list = new FriendList();
$list->add(new Person('太郎','山田'));
$list->add(new Person('奈美','掛谷'));
$list->add(new Person('健','高江'));

//オブジェクトを関数の形式で呼び出し
echo $list(0);
echo $list(1);
echo $list(2);