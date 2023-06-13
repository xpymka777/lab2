<?php
//Подключили бд
require_once "../database/db_connect.php";
//Вынесли все данные из массива POST для удобства построения SQL запроса
$surname = $_POST['surname'];

$name = $_POST['name'];

$patronymic = $_POST['patronymic'];

$product_description = $_POST['product_description'];

$date_of_receipt_of_the_order = $_POST['date_of_receipt_of_the_order'];

$service_cost = $_POST['service_cost'];

//Функция, которая будет заносить данные в таблицу

$insert = mysqli_query($db,
"INSERT INTO `application` (`id`, `surname`, `name`, `patronymic`, `product_description`, 
`date_of_receipt_of_the_order`, `service_cost`, `status_of_the_application`) 
VALUES (NULL, '$surname', '$name ', '$patronymic', '$product_description', '$date_of_receipt_of_the_order', '$service_cost', 'Active') ");

header("Location: ../templates/all_applications.php");
