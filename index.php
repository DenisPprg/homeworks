<?php



$filex = "people.txt";
$lines = file($filex);
//var_dump($lines);
?>

<table class="people_list">
<?php for ($i = 0; $i < count($lines); $i++) : ?>
    <tr>
    <?php $line = str_replace(';', ' ', $lines[$i]) . "\n"; ?>
   <?php $peoples = explode(" ", $line); ?>
   <?php $pep = array_chunk($peoples, 4); ?>

        <tr>
<?php foreach ($pep as $key=>$value): ?>
        <td><?php echo $value[0]; ?> </td>
    <td><?php echo $value[1]; ?> </td>
    <td><?php echo $value[2]; ?> </td>
    <td><?php echo $value[3]; ?> </td>
    <?php endforeach; ?>
        <?php endfor; ?>
    </tr>


</table>

<style>
    .people_list {
        width: 10%;
    }
    .people_list td {
        width: 15%;
        border: 1px solid #ddd;
        padding: 7px 8px;
    }
</style>

