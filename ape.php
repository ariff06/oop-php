<?php

class ape extends animal {
    public function __construct() {
        $this->legs = 2;
    }

    public $yell;

    public function yell() {
        return $this -> yell = "Auooo";
    }
}

?>