<?php
//Подключили бд
require_once "../database/db_connect.php";
//Вынесли все данные из массива POST для удобства построения SQL запроса
$id = $_POST['id'];

$surname = $_POST['surname'];

$name = $_POST['name'];

$patronymic = $_POST['patronymic'];

$product_description = $_POST['product_description'];

$date_of_receipt_of_the_order = $_POST['date_of_receipt_of_the_order'];

$service_cost = $_POST['service_cost'];

//Функция, которая будет заносить данные в таблицу
mysqli_query($db,"UPDATE `application` 
SET `surname` = '$surname', 
`name` = '$name', 
`patronymic` = '$patronymic', 
`product_description` = '$product_description', 
`date_of_receipt_of_the_order` = '$date_of_receipt_of_the_order',
`service_cost` = '$service_cost',
`status_of_the_application` = 'Activee' 
WHERE `application`.`id` = $id");

header("Location: ../templates/all_applications.php");