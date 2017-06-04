<?php
require_once 'Task.php';
require_once 'TodoList.php';
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <title>Todo List</title>
</head>
<body>
    <div class="container">
        <?php
        require_once 'templates/create_form.template.php';
        require_once 'init.php';
        require_once 'templates/list.template.php'

        ?>
    </div>
</body>
</html>