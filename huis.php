<?php


 
class Huis {
    public $verdiepingen;
    public $kamers;
    public $volume;
    public $prijs;

    public function __construct($verdiepingen, $kamers, $volume) {
        $this->verdiepingen = $verdiepingen;
        $this->kamers = $kamers;
        $this->volume = $volume;
        $this->berekenPrijs();
    }
    
    private function berekenPrijs() {
        // Hier kun je je eigen formule voor de prijsberekening aanpassen
        $this->prijs = $this->verdiepingen * $this->kamers * $this->volume * 500; 
    }
}


?>

