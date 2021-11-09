<?php 
require_once 'Person1.php';

$p = new Person('ゆじろ','ひらし');

echo "{$p->lastName}{$p->firstName}";

$p->show();

$p->lastName = "Hirashima";
$p->firstName = "Yujiro";

$p->show();
