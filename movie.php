<?php 

class Movie {
    public $titolo;
    public $genere;
    public $duration;
    public $locandina;


    function __construct($titolo,$genere,$duration,$locandina) {
        $this->titolo = $titolo;
        $this->genere = $genere;
        $this->duration = $duration;
        $this->locandina = $locandina;
        
    }

 
}
