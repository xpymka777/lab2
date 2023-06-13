<?php
  //подключили бд
  require_once "../database/db_connect.php";
  //производим выборку всех данных из таблицы с заказами, чтобы дальше их разместить на страницу
  $applications = mysqli_query($db,"SELECT * FROM application");
  //
  $applications = mysqli_fetch_all($applications);
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All applications</title>
    <link rel="stylesheet" href="../static/style.css">
    <script defer src="#"></script>
</head>
<body>
    <header>
        <a href="new_application.php">Сделать заказ</a>
        <a href="main.php">Главная</a>
    </header>
    <body>
        <!-- здесь будет что-то вроде как типо заказы которые имеются -->
        <table>
            <tr>
                <th>Фамилия</th>
                <th>Имя</th>   
                <th>Отчество</th>
                <th>Описание</th>
                <th>Дата составления заявки</th>
                <th>Цена</th>
                <th>Статус</th>
            </tr>
            <?php
                foreach($applications as $application){
                    ?>
                    <tr>
                        <td><?= $application[1]; ?></td>
                        <td><?= $application[2]; ?></td>
                        <td><?= $application[3]; ?></td>
                        <td><?= $application[4]; ?></td>
                        <td><?= $application[5]; ?></td>
                        <td><?= $application[6]; ?></td>
                        <td><?= $application[7]; ?></td>
                        <td><a href="../templates/update_application.php?id=<?= $application[0]; ?>">Изменить</a></td>
                        <td><a style="color:red" href="../actions/delete_application.php?id=<?= $application[0]; ?>">Удалить</a></td>
                    </tr>
                    <?php
                    }
                ?>
        </table>
    </body>
</body>
</html>