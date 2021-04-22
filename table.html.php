<html>
<body>
<table border="2" cellpadding="5">
    <tr>
        <th>Name</th>
        <th>Age</th>
        <th>Gender</th>
    </tr>

    <?php foreach ($list as $item): ?>
    <tr>
        <td>
            <?php echo $item['Name'] ?>
        </td>
        <td>
            <?php echo $item['Age'] ?>
        </td>
        <td>
            <?php echo $item['Gender'] ?>
        </td>
    </tr>
    <?php endforeach ?>
</table>
</body>
</html>