<?php

include 'interface_operar.php';
class Operaciones implements Operar {
    public function factorial($a){
        if($a==2) {
            return $a;
        } else {
            return $a*$this->factorial($a-1);
        }
    }
    public function potencia($a, $b) {
        if($b==1) {
            return $a;
        }else{
            return $a*$this->potencia($a,$b-1);
        }
    }
}

?>