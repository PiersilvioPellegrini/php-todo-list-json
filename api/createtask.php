<?php

$tasks = file_get_contents("../tasks.json");

$tasks = json_decode($tasks, true);

$newTask = [
    "newtask" => $_POST["newtask"],
];

$tasks[] = $newTask;
$tasksjson = json_encode($tasks, JSON_PRETTY_PRINT);

file_put_contents("../tasks.json", $tasksjson);

header("Content-Type: application/json");
echo json_encode($newTask);

?>