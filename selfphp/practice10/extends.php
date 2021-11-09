<?php 
require_once 'BusinessPerson.php';

$bp = new BusinessPerson('太郎','比嘉');
$bp->work();
$bp->show();