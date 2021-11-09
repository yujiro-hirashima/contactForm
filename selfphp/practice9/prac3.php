
<form action="prac3.php" method="POST">
    <label for="title">書名</label>
    <input type="text" id="title" name="title" size="20"/>
    <input type="submit" value="検索">
</form>

<?php 
if(isset($_POST['title'])){
    require_once '../DbManager.php';
    require_once '../Encode.php';

    try{
        $db = getDb();
        $stt = $db->prepare('SELECT * FROM book where title like :title');
        $stt->bindValue(':title','%'.$_POST['title'].'%');
        $stt->execute();
        echo '<ul>';
        while($row = $stt->fetch(PDO::FETCH_ASSOC)){
?>
          <li><?=e($row['title'])?>(<?=e($row['price'])?>円)</li>
<?php
        }
        echo '</ul>';
    } catch(PDOException $e){
        echo "エラーメッセージ：{$e->getMessage()}";
    }
}
?>