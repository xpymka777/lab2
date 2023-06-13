<?php

require_once "../database/db_connect.php";

$id = $_GET['id'];

mysqli_query($db,"DELETE FROM application WHERE `application`.`id` = $id");

header("Location: ../templates/all_applications.php");