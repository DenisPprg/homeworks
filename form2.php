<?php
$filex = "upload/1.txt";
$lines = file($filex);
?>

<table class="people_list" ; style="position: absolute; top: 30px;left: 699px;">
    <?php for ($i = 0; $i < count($lines); $i++) : ?>

        <?php $line = str_replace(';', ' ', $lines[$i]) . "\n"; ?>
        <?php $peoples = explode(" ", $line); ?>
        <?php $pep = array_chunk($peoples, 4); ?>

        <?php foreach ($pep as $key=>$value): ?>
            <tr>
                <td><?php echo $value[0]; ?> </td>
                <td><?php echo $value[1]; ?> </td>
                <td><?php echo $value[2]; ?> </td>
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
