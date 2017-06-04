<?php

class Task {

    protected $title;

    protected $description;

    protected $date;

    function __construct($title, $description, $date)
    {
        $this->title = $title;

        $this->description = $description;

        $this->date = $date;
    }

    public function toJson()
    {
        return json_encode(get_object_vars($this));
    }

    public function __get($name)
    {
        return $this->{$name};
    }

    public function __toString()
    {
        return json_encode(get_object_vars($this));
    }
}