<?php 
require_once 'MyMail.php';

$m = new MyMail();
$m->From('admin@example.com');
echo $m->From;