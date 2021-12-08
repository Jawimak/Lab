<?php
namespace App;

require_once('Vector.php');


class Point{
    public $x = 0;
    public $y = 0;
    public function ChangeX($change){
        $x = $this->x+$change;
        $this->x = $x;
    }
    public function ChangeY($change){
        $y = $this->y+$change;
        $this->y = $y;
    }
    public function ChangeByVector(Vector $vect){
        $x = $this->x+$vect->x;
        $y = $this->y+$vect->y;
        $this->y = $y;
        $this->x = $x;
    }

}
