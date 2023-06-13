<?php
require_once "../database/db_connect.php";


?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create your application</title>
    <link rel="stylesheet" href="../static/style.css">
    <script defer src="#"></script>
</head>
<body>
    <header>
        <a href="main.php">Главная</a>
        <a href="all_applications.php">Заказы</a>
    </header>
    <main>
        <form action="../actions/create_application.php" method="post" class="application">
            <input type="text" placeholder="Фамилия" name="surname">
            <input type="text" placeholder="Имя" name="name">
            <input type="text" placeholder="Отчество" name="patronymic"> 
            <textarea name="product_description"cols="40" rows="10"></textarea>
            <input type="date" placeholder="Дата закза" name="date_of_receipt_of_the_order">
            <input type="number" placeholder="Цена заказа" name="service_cost">
            <button type="submit">Отправить заказ</button>
        </form>
    </main>
</body>
</html>