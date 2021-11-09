<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ENV</title>
</head>
<body>
    <table border="5" style="background-color: lightgreen;">
<?php 
foreach($_ENV as $key => $value){
    echo "<tr>";
    echo "<td>.$key.</td>";
    echo "<td>.$value.</td>";
    echo "</tr>";
}
?>
    </table>
    
</body>
</html>