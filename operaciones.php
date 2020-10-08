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
    public function factorial1($a) {
        $resultado = 1;
        for($i=$a; $i>=1; $i--) {
            $resultado = $i*$resultado;
        }
        return $resultado;
    }
    public function potencia($a, $b) {
        if($b==1) {
            return $a;
        }else{
            return $a*$this->potencia($a,$b-1);
        }
    }
    public function sumatorio($a) {
        if($a==1) {
            return $a;
        }else {
            return $a+$this->sumatorio($a-1);
        }
    }
    public function sumatorio1($a) {
        $resultado = 0;
        for($i=$a; $i>=1; $i--) {
            $resultado = $resultado + $i;
        }
        return $resultado;
    }
    public function sumatorio2($a) {
        return ($a*($a+1)/2);
    }
}

?>