<?php 
require_once '../DbManager.php';
require_once '../Encode.php';

try{
    $db = getDb();
    $stt = $db->query('SELECT * FROM book ORDER BY published DESC');
    echo '<ul>';
    while($row = $stt->fetch(PDO::FETCH_OBJ)){
    ?>
    <li><?=e($row->title)?>
        (<?=e($row->publish)?>)</li>
<?php 
    }
    echo '</ul>';
} catch(PDOException $e){
    echo "エラーメッセージ：{$e->getMessage()}";
}
 ?>