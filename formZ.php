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

<?php

echo "<table class='people_list';><tr><th>Name</th><th>Age</th><th>Sex</th><!--<th>Number</th><th>Serial</th><th>Date</th>--><th>Passport</th></tr>";
foreach ($list as $list_row) {
    echo "<tr>";
    echo "<td>" . $list_row["name"]  . "</td>";
    echo "<td>" . $list_row["age"]    . "</td>";
    echo "<td>" . $list_row["sex"]   . "</td>";
    echo "<td>";
    if ($list_row['serial']>0){
        echo 'Есть';
    }else{
        echo 'Нет';
    };
    echo "</td>";
    /*    echo "<td>" . $list_row["number"]    . "</td>";
    echo "<td>" . $list_row["serial"] . "</td>";
    echo "<td>" . $list_row["date"]   . "</td>";*/
    echo "</tr>";
}
echo "</table>";
?>


<style>

    table {
        position: absolute; top: 30px; left: 699px;

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
    .people_list {
        width: 20%;
    }
</style>
