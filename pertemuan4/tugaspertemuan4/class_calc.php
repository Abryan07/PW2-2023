<?php

    class Calculator {
        private $Bilangan1;
        private $Bilangan2;
    
    
        public function __construct($Bilangan1, $Bilangan2) {
		        $this->angka1=$Bilangan1;
                $this->angka2=$Bilangan2;
        }
        public function getPertambahan() {
            return $this->angka1+$this->angka2;
		}
    
        public function getPengurangan() {
            return $this->angka1-$this->angka2;
        }
    
        public function getPerkalian() {
            return $this->angka1*$this->angka2;
        }
        public function getPembagian() {
            return $this->angka1/$this->angka2;
        }
    }
        
		$Calculator1 = new Calculator(10,5);
		
	
		echo '<br>Hasilnya = ' . $Calculator1->getPertambahan();
		echo '<br>Hasilnya = ' . $Calculator1->getPengurangan();
		echo '<br>Hasilnya = ' . $Calculator1->getPerkalian();
        echo '<br>Hasilnya = ' . $Calculator1->getPembagian();

?>
