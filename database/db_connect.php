<?php

//db connect
$db = mysqli_connect('localhost','root','','cleaning');

if(!$db){
    die ("Error to coonect databse");
}
