<?php

$link = mysqli_connect('127.0.0.1', 'root', '', '1mysqli.php');

$sql = "insert into users(name, pass) values ('Sam', '5678')";
// $sql = "select * from users";

$ret = mysqli_query ($link, $sql);

// $res = mysqli_fetch_assoc($ret);

// var_dump($res["name"]);


