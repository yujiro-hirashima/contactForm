<?php 
header('Content-Type: application/octet-stream');
header('Content-Disposition: attachment; filename = "flower.jpg"');
echo file_get_contents('../chap08/doc/flower.jpg');
?>