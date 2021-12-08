<?php
namespace App;

class Vector{
    public $x = 0.00;
    public $y = 0.00;
    public function Length(){
        $length = sqrt(($this->x)*($this->x)+($this->y)*($this->y));
        return $length;
    }
    public function IsNull(){
        return $this->Length()==0;
    }
    public function IsNormal(Vector $vect){
        if ($this->Length()!=0 and $vect->Length()!=0)
            {
                if ($this->x*$vect->x+$this->y*$vect->y==0)
                    return true;
                else return false;
            }
        else return false;
    }


}
