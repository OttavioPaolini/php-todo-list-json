<?php
$todo_js = file_get_contents('todo.json');
$todo_array = json_decode($todo_js, true);

// var_dump($todo_array);

header("Content-Type: application/json");
echo json_encode($todo_array);
