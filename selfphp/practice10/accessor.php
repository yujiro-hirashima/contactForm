<?php 
require_once 'TriangleFigure.php';

$tri = new TriangleFigure();
$tri->setBase(10);
$tri->setHeight(5);
echo "三角形の面積：{$tri->getArea()}";