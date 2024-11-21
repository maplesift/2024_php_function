<!-- 帳密確認頁面  -->
<?php 

$dsn="mysql:host=localhost;charset=utf8;dbname=CRUD";
$pdo=new PDO($dsn,'root','');

// if(!isset($_POST['acc'])){
//     header("location:login2.php");
//     exit();
// }

$acc=$_POST['acc'];
$pw=$_POST['pw'];
// 在資料庫確認帳密 如果有一樣才成功(>=1)
$sql="select count(id) from`member` where `acc`='$acc' && `pw`='$pw'";

$row=$pdo->query($sql)->fetchColumn();
// print_r($row);
if($row>=1){
    
    //$_SESSION['login']=$acc;
    // echo "<br><a href='success.php'>到編輯區</a>";
    header("location:success.php");
}else{
    header("location:login2.php?err=1");

}
?>