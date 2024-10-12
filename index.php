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

    //запрос для фильта по отделу и должности
    $FOtdel = isset($_GET['FOtdel']) ?$_GET['FOtdel'] : '';
    $FDolzhnost = isset($_GET['FDolzhnost']) ? $_GET['FDolzhnost'] : '';

    $query = "SELECT * FROM sotr WHERE 1=1";
    if ($FOtdel) {
        $query .= " AND Otdel LIKE '%$FOtdel%'";
    }
    if ($FDolzhnost) {
        $query .= " AND Dolzhnost LIKE '%$FDolzhnost%'";
    }

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
                <td> <?php echo htmlspecialchars($item['ID']);?></td>
                <td> <?php echo htmlspecialchars($item['FIO']);?></td>
                <td> <?php echo htmlspecialchars($item['DataRozhdenia']);?></td>
                <td> <?php echo htmlspecialchars($item['Pasport']);?></td>
                <td> <?php echo htmlspecialchars($item['KontaktnayaInfa']);?></td>
                <td> <?php echo htmlspecialchars($item['Adres']);?></td>
                <td> <?php echo htmlspecialchars($item['Otdel']);?></td>
                <td> <?php echo htmlspecialchars($item['Dolzhnost']);?></td>
                <td> <?php echo htmlspecialchars($item['Zarplata']);?></td>
                <td> <?php echo htmlspecialchars($item['DataPrinatia']);?></td>
                <td> <?php echo htmlspecialchars($item['Status']);?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
    </table>
    <h3> Фильтрация по должности или отделу: </h3>
    <form class = "filtr" method="GET" action="">

    <label   class = "filtr" for="Otdel">Отдел:</label>
    <input type="text" id="Otdel" name="FOtdel" value="<?php echo htmlspecialchars($FOtdel); ?>">

    <label  class = "filtr" for="Dolzhnost">Должность:</label>
    <input type="text" id="Dolzhnost" name="FDolzhnost" value="<?php echo htmlspecialchars($FDolzhnost); ?>">

    <button type="submit">Найти</button>
    </form>
    </body>
    </html>    