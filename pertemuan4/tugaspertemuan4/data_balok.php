<?php 
		/**
		 * Task 2
		 * Panggil class_balok dan Buatlah minimal 4 object yang menampilkan:
		 * Luas, Keliling dan Volume
		 * p = 29, l = 16, t = 7
		 */
		require_once 'class_balok.php';

		$balok1 = new Balok(11,12,13);
		
	
		echo '<br>Luas Balok = ' . $balok1->getLuas() . 'cm';
		echo '<br>Keliling Balok = ' . $balok1->getKeliling() . 'cm';
		echo '<br>Volume Balok = ' . $balok1->getVolume().'cm';
		
?>