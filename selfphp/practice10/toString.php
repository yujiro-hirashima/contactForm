<?php 
require_once 'Person1.php';

$p = new Person('徹','田中');
echo $p->lastName;
echo '<br/>';
echo $p->firstName;
echo '<br/>';
echo $p;