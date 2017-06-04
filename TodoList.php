<?php

require_once 'Task.php';

class TodoList {

    /**
     * @var array
     */
    private $todos;

    function __construct($todos = [])
    {
        $this->todos = $todos;
    }

    public function add(Task $todo)
    {
        $this->todos[] = $todo;
    }

    public function revome(Task $todo)
    {
        if (in_array($todo, $this->todos)) {
            $index = array_search($todo, $this->todos);
            unset($this->todos[$index]);
        }
    }

    public function getTodoList()
    {
        return $this->todos;
    }

    public function saveData()
    {
        file_put_contents('data.db', serialize($this->todos));
    }
}