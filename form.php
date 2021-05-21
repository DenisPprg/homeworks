<?php

$dsn = 'mysql:dbname=denis;host=192.168.88.84';
$username = 'root';
$password = 'qweqweqwe';
$connection = new PDO($dsn,$username,$password);
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}



$stm = $connection->query("SELECT * FROM user
LEFT JOIN passport ON user.id = passport.user_id");


$list = $stm->fetchAll(PDO::FETCH_ASSOC);

/*include 'table.html.php';*/

if (array_key_exists('firstname', $_POST)){
    $pname = $_POST['firstname'];
    $psex = $_POST['sex'];
    $page = $_POST['age'];
    $pnumbers = $_POST['numbers'];
    $pserial = $_POST['serial'];
    $pdate = $_POST['date'];

    $all = $_POST['firstname'].';'. $_POST['sex'].';'. $_POST['age'].';' .$_POST['numbers'].';'. $_POST['serial'].';'. $_POST['date']. ';'. "\n";
    file_put_contents('users.txt',$all, FILE_APPEND);

$sql = "INSERT INTO `user` (`name`, `age`, `sex`)
VALUES ('". $pname."','". $page."','". $psex."')";
$query = $connection->query($sql);

$userid = $connection->lastInsertId();

    $sql = "INSERT INTO `passport` (`user_id`,`number`, `serial`, `date`)
VALUES ('".$userid."','". $pnumbers."','". $pserial."','". $pdate."')";
$query = $connection->query($sql);


}else{
    $pname = '';
    $psex = '';
    $page = '';
    $pnumbers = '';
    $pserial = '';
    $pdate = '';
}?>

<?php $result = mysqli_query($connection,$stm);?>

<?php
$filex = "users.txt";
$lines = file($filex);
?>

<table class="people_list" ; style="position: absolute; top: 30px;left: 699px;">
<?php for ($i = 0; $i < count($lines); $i++) : ?>

   <?php $line = str_replace(';', ' ', $lines[$i]) . "\n"; ?>
   <?php $peoples = explode(" ", $line); ?>
   <?php $pep = array_chunk($peoples, 8); ?>



<?php foreach ($pep as $key=>$value): ?>
        <tr>
    <td><?php echo $value[0]; ?> </td>
    <td><?php echo $value[1]; ?> </td>
    <td><?php echo $value[2]; ?> </td>
        <td><?php echo $value[3]; ?> </td>
        <td><?php echo $value[4]; ?> </td>
        <td><?php echo $value[5]; ?> </td>
    </tr>
    <?php endforeach; ?>
        <?php endfor; ?>

</table>

<style>
    .people_list {
        width: 20%;
    }
    .people_list td {
        width: 15%;
        border: 2px solid purple;
        padding: 15px 15px;
        color: cyan;
        background-color: black ;
    }
    body{
        background: url("1233.gif");
        color: aliceblue;
    }
</style>









