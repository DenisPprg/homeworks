<!--<html>
<body>
<!--<table border="2" cellpadding="5">
    <tr>
        <th>Name</th>
        <th>Age</th>
        <th>Sex</th>
        <th>Number</th>
        <th>Serial</th>
        <th>Date</th>
    </tr>

    <?php /*/*foreach ($list as $item): */*/?>
    <tr>
        <td>
            <?php /*/*echo $item['name'] */*/?>
        </td>
        <td>
            <?php /*/*echo $item['age'] */*/?>
        </td>
        <td>
            <?php /*/*echo $item['sex'] */*/?>
        </td>
        <td>
            <?php /*/*echo $item['number'] */*/?>
        </td>
        <td>
            <?php /*/*echo $item['serial'] */*/?>
        </td>
        <td>
            <?php /*/*echo $item['date'] */*/?>
        </td>
    </tr>
    <?php /*/*endforeach */*/?>
</table>-->
<?php
/*$filex = "users.txt";
$lines = file($filex);
*/?>
<table class="people_list" ; style="position: absolute; top: 30px;left: 699px;">
    <?php /*for ($i = 0; $i < count($lines); $i++) : */?>

        <?php /*$line = str_replace(';', ' ', $lines[$i]) . "\n"; */?>
        <?php /*$peoples = explode(" ", $line); */?>
        <?php /*$pep = array_chunk($peoples, 8); */?>



        <?php /*foreach ($pep as $key=>$value): */?>
            <tr>
                <td><?php /*echo $value[0]; */?> </td>
                <td><?php /*echo $value[1]; */?> </td>
                <td><?php /*echo $value[2]; */?> </td>
                <td><?php /*echo $value[3]; */?> </td>
                <td><?php /*echo $value[4]; */?> </td>
                <td><?php /*echo $value[5]; */?> </td>
            </tr>
        <?php /*endforeach; */?>
    <?php /*endfor; */?>

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

</body>
</html>-->