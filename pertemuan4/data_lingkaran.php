<?php
   require_once 'class_lingkaran.php';

   echo "Nilai PHI " . Lingkaran::PHI;

   $lingkar1 = new Lingkaran(7);
   $lingkar2 = new Lingkaran(68); 
 
   echo '<br>Luas Lingkaran 1 = ' . $lingkar1->getluas() . ' cm';
   echo '<br>Keliling Lingkaran 1 = ' . $lingkar1->getkel() . ' cm';
   echo '<br>Luas Lingkaran 2 = ' . $lingkar2->getluas() . ' cm';
   echo '<br>Keliling Lingkaran 2 = ' . $lingkar2->getkel() . ' cm';


?>