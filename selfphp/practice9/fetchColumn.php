<?php 
require_once '../DbManager.php';

$db = getDb();
$stt = $db->query('SELECT COUNT(*) FROM book');
echo "件数：{$stt->fetchColumn()}件";echo'<br/>';
$stt = $db->query('SELECT * FROM book ORDER BY price ASC');
echo "{$stt->fetchColumn(1)}";echo'<br/>';
print_r ($stt->fetchColumn(1));
?>