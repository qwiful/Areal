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

    $host = '127.0.0.1';
    $dbname = 'sotrudniki';
    $username = 'root';
    $password = '';

            
    //добавление нового сотрудника
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['FIO'])) {
    $FIO = $_POST['FIO'];
    $DataRozhdenia = $_POST['DataRozhdenia'];
    $Pasport = $_POST['Pasport'];
    $KontaktnayaInfa = $_POST['KontaktnayaInfa'];
    $Adres = $_POST['Adres'];
    $Otdel = $_POST['Otdel'];
    $Dolzhnost = $_POST['Dolzhnost'];
    $Zarplata = $_POST['Zarplata'];
    $DataPrinatia = $_POST['DataPrinatia'];
    $Statusr = $_POST['Statusr'];
    try {
        $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
        $sql = "INSERT INTO Sotr (FIO, DataRozhdenia, Pasport, KontaktnayaInfa, Adres, Otdel, Dolzhnost, Zarplata, DataPrinatia, Statusr)
                VALUES (:FIO, :DataRozhdenia, :Pasport, :KontaktnayaInfa, :Adres, :Otdel, :Dolzhnost, :Zarplata, :DataPrinatia, :Statusr)";
    
            $stmt = $pdo->prepare($sql);
            $stmt->execute([
            ':FIO' => $FIO,
            ':DataRozhdenia' => $DataRozhdenia,
            ':Pasport' => $Pasport,
            ':KontaktnayaInfa' => $KontaktnayaInfa,
            ':Adres' => $Adres,
            ':Otdel' => $Otdel,
            ':Dolzhnost' => $Dolzhnost,
            ':Zarplata' => $Zarplata,
            ':DataPrinatia' => $DataPrinatia,
            ':Statusr' => $Statusr
        ]);
    
        header("Location: " . $_SERVER['PHP_SELF']);
        exit();
    } catch (PDOException $e) {
        echo "Ошибка: " . $e->getMessage();
    }
}


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
                <td> <?php echo htmlspecialchars($item['Statusr']);?></td>
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


    <h3>Добавить нового сотрудника:</h3>

    <form method="POST" action="">
    <input type="text" name="FIO" placeholder="ФИО" required><br>
    <input type="date" name="DataRozhdenia" placeholder="Дата рождения" required><br>
    <input type="text" name="Pasport" placeholder="Паспорт" required><br>
    <input type="text" name="KontaktnayaInfa" placeholder="+7(___)___-__-__" required><br>
    <input type="text" name="Adres" placeholder="Адрес проживания" required><br>
    <input type="text" name="Otdel" placeholder="Отдел" required><br>
    <input type="text" name="Dolzhnost" placeholder="Должность" required><br>
    <input type="number" name="Zarplata" placeholder="Зарплата" required><br>
    <input type="date" name="DataPrinatia" placeholder="Дата принятия на работу" required><br>
    <input type="text" name="Statusr" placeholder="Статус работы" required>
    <button type="submit">Добавить сотрудника</button>
    </form>
    </body>
    </html>    