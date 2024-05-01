<?php

require_once 'animal.php';

class Frog extends Animal {
    public function jump() {
        return "Hop Hop"; // nambahin atribut Jump, dengan suara Hop Hop
    }
}

?>