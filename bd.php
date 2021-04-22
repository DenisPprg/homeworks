<?php

$dsn = 'mysql:dbname=denis;host=192.168.88.84';
$username = 'root';
$password = 'qweqweqwe';
$connection = new PDO($dsn,$username,$password);

/*$sql = "INSERT INTO `users` (`Name`,`Age`,`Gender`) VALUES ('Mikola', 30, 'Male')";
$connection->exec($sql);*/

/*$sql = "UPDATE `users` SET `Name` = 'Nikolai' WHERE `ID` = 22";
$connection->exec($sql);*/

/*$sql = "DELETE FROM `users` WHERE `ID` = 20";
$connection->exec($sql);*/

$stm = $connection->query("SELECT * FROM users");
$stm->execute();
$list = $stm->fetchAll(PDO::FETCH_ASSOC);


/*foreach ($list as $item){
    echo 'Name: '. $item['Name']. ', age:'. $item['Age']. ', Gender:'. $item['Gender']. "<br />\n";
}*/

include 'table.html.php';

