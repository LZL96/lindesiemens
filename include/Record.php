<?php

class Record {
    public $operator_name;
    public $description;
    public $points;

    public function __construct($operator_name="", $description="", $points="") {
        $this->operator_name = $operator_name;
        $this->description = $description;
        $this->points = $points;
    }

}