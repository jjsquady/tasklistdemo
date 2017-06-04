<?php

if ($_POST && isset($_POST['title'])) {
    $todo = new Task($_POST['title'], $_POST['description'], $_POST['date']);
    $data = file_get_contents('data.db');
    $list = new TodoList(unserialize($data));
    $list->add($todo);
    $list->saveData();
    unset($_POST);
    header("Location: ".$_SERVER['PHP_SELF']);
    exit;
}else {
    $data = file_get_contents('data.db');
    $list = new TodoList(unserialize($data));
}

if($_POST && isset($_POST['todo'])) {
    $todo = json_decode($_POST['todo']);
    $list->revome(new Task($todo->title, $todo->description, $todo->date));
    $list->saveData();
    unset($_POST);
    header("Location: ".$_SERVER['PHP_SELF']);
    exit;
}