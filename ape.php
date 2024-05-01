<?php

require_once 'animal.php';

class Ape extends Animal {
    public function __construct($name) {
        parent::__construct($name); // buat manggil constructor dari animal
        $this->legs = 2; // buat nimpa nilai jadi 2
    }

    public function yell() {
        return "Auoooo";
    }
}

?>