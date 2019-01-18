<?php

class Record {

    public $id;
    public $description;
    public $points;

    public function __construct($id="", $description="", $points="") {
        $this->id = $id;
        $this->description = $description;
        $this->points = $points;
    }

}