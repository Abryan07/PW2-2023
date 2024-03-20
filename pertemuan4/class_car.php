<?php  

   class Car {
       // property 
    public $brand;
    public $color;
     
    // method
    function getBrand() {
        return $this->brand;
    }
}
  
// Object
   $Xenia = new Car();
   $Poce = new Car();
   

   // Setter
  $Xenia->brand = "Xenia";
  $Poce->brand = "Poce";

  // Echo
  echo $Xenia->getBrand();
  echo '<br>';
  echo $Poce    ->getBrand();
?>