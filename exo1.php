<?php

class Nim {
    public $allumette = 13;

    public function __construct($allumette){
        $this->allumette=$allumette;
    }

    function Enlever(){
        return 'j\en enlève '.$this->allumette.'<br>';
    }
}


//$une = new uneAllumette ('uneAllumette');
//$deux = new deuxAllumette ('deuxAllumette');
//$trois = new troisAllumette ('troisAllumette');
//
//
//echo $une->present();
//echo $deux->present();
//echo $trois->present();