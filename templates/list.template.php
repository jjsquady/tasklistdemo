<h1>Lista de Tarefas</h1>
<?php
echo "<ul class='list-group'>";
foreach ($list->getTodoList() as $todo) {
    require 'task.template.php';
}
echo "</ul>"
?>