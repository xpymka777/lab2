<?php
require_once '../database/db_connect.php';

//Принимает id изменяемого заказа, который передаём как GET параметр при клике на ссылку изменить
$application_id = $_GET['id'];
//Выбираем из таблицы ту запись, id которой передали с помощью GEt
$application = mysqli_query($db,"SELECT * FROM `application` where id = $application_id");
//Преобразуем то, что нам придёт в ответ,чтобы выводить по ключам, а не по индексам массива
$application = mysqli_fetch_assoc($application)
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update your application</title>
    <link rel="stylesheet" href="../static/style.css">
</head>
<body>
    <main>
    <form action="../actions/update_application.php" method="post" class="application">
            <input type="hidden" name="id" value="<?= $application['id'] ?>">
            <input type="text" placeholder="Фамилия" name="surname" value="<?= $application['surname'] ?>">
            <input type="text" placeholder="Имя" name="name" value="<?= $application['name'] ?>">
            <input type="text" placeholder="Отчество" name="patronymic" value="<?= $application['patronymic'] ?>"> 
            <textarea name="product_description"cols="40" rows="10"><?= $application['product_description'] ?></textarea>
            <input type="date" placeholder="Дата закза" name="date_of_receipt_of_the_order" value="<?= $application['date_of_receipt_of_the_order'] ?>">
            <input type="number" placeholder="Цена заказа" name="service_cost" value="<?= $application['service_cost'] ?>">
            <button type="submit">Обновить заказ</button>
        </form>
    </main>
</body>
</html>