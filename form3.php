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

  /*  $sql = "INSERT INTO `user` (`name`, `age`, `sex`)
VALUES ('". $pname."','". $page."','". $psex."')";
    $query = $connection->query($sql);

    $userid = $connection->lastInsertId();

    $sql = "INSERT INTO `passport` (`user_id`,`number`, `serial`, `date`)
VALUES ('".$userid."','". $pnumbers."','". $pserial."','". $pdate."')";
    $query = $connection->query($sql);*/


}else{
    $pname = '';
    $psex = '';
    $page = '';
    $pnumbers = '';
    $pserial = '';
    $pdate = '';
}

?>

/*
$filex = "users.txt";
$lines = file($filex);

var_dump($sql);*/

<table border="3" class="people_list" style="position: absolute; top: 30px;left: 699px;">
    <tr>
        <th>name1</th>
        <th>name2</th>
        <th>name3</th>
    </tr>
    <?php   $sql = "INSERT INTO `user` (`name`, `age`, `sex`)
VALUES ('". $pname."','". $page."','". $psex."')";
    $query = $connection->query($sql);

    $userid = $connection->lastInsertId();

    $sql = "INSERT INTO `passport` (`user_id`,`number`, `serial`, `date`)
VALUES ('".$userid."','". $pnumbers."','". $pserial."','". $pdate."')";
    $query = $connection->query($sql);
    while($result = $sql->fetch_assoc($sql)): ?>
        <tr>
            <td><?php echo $pname;?></td>
            <td><?php echo $page;?></td>
            <td><?php echo $psex;?></td>
        </tr>
    <?php endwhile ?>
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







