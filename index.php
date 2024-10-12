<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet" type="text/css">
    <title>Учёт сотрудников</title>
</head>

<body> 
<?php
require_once 'config.php';

$query = "SELECT * FROM sotr";
$result = mysqli_query($conn, $query);

if (!$result) {
    die("Ошибка запроса: " . mysqli_error($conn));
}
 
$list = array();
while ($row = mysqli_fetch_assoc($result)) {
    $list[] = $row;
}
?>
<h1>Сотрудники организации</h1>
<table>
<thead>
    <th style=width:5%>ID</th>
    <th style=width:15%;>ФИО</th>
    <th>Дата рождения</th>
    <th>Паспорт</th>
    <th>Контактная информация</th>
    <th style=width:15%;>Адрес</th>
    <th>Отдел</th>
    <th>Должность</th>
    <th>Зарплата</th>
    <th>Дата приема на работу</th>
    <th>Статус работы</th>
</thead>
<tbody>
    <?php foreach($list as $item): ?>
        <tr> 
            <td> <?php echo $item['ID'];?></td>
            <td> <?php echo $item['FIO'];?></td>
            <td> <?php echo $item['DataRozhdenia'];?></td>
            <td> <?php echo $item['Pasport'];?></td>
            <td> <?php echo $item['KontaktnayaInfa'];?></td>
            <td> <?php echo $item['Adres'];?></td>
            <td> <?php echo $item['Otdel'];?></td>
            <td> <?php echo $item['Dolzhnost'];?></td>
            <td> <?php echo $item['Zarplata'];?></td>
            <td> <?php echo $item['DataPrinatia'];?></td>
            <td> <?php echo $item['Status'];?></td>
        </tr>
    <?php endforeach; ?>
</tbody>
</table>
</body>
</html>    