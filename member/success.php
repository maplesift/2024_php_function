<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>success</title>
</head>
<body>
    <h1> 編輯區</h1>
    <?php
    include "../function.php";
    $rows=all("member")
    
// $dsn="mysql:host=localhost;charset=utf8;dbname=crud";
// $pdo=new PDO($dsn,'root','');

// $rows=$pdo->query("select * from member")->fetchAll(PDO::FETCH_ASSOC);

?>
<div>
        <?php
        if (isset($_GET['status'])) {
            if ($_GET['status'] == 1) {
                echo "<h2>更新成功</h2>";
            } else {
                echo "<h2>更新失敗</h2>";
            }
        }
        ?>
</div>
<table>
    <tr>
        <td>id</td>
        <td>acc</td>
        <td>pw</td>
        <td>email</td>
        <td>tel</td>
        <td>操作</td>
    </tr>
    <?php
foreach($rows as  $row){

?>
    <tr>
        <td><?=$row['id'];?></td>
        <td><?=$row['acc'];?></td>
        <td><?=$row['pw'];?></td>
        <td><?=$row['email'];?></td>
        <td><?=$row['tel'];?></td>
        <td>
            <a href="edit_form.php?id=<?=$row['id'];?>">編輯</a>
            <a href="del.php?id=<?=$row['id'];?>">刪除</a>
        </td>
    </tr>
    <?php

}
?>
</table>
</body>
</html>