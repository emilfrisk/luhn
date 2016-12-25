<?php
/**
 * @version 1.0
 * @author Emil Frisk
*/

namespace Emilfrisk\Luhn;

class Luhn {

	public function validate( $input ) {
	
		for( $sum = 0, $i=0, $l = strlen($input) - 1; $l >= 0; $i++, $l-- ) {
			
			$t = $input[$l]  * ( $i % 2 == 0 ? 1 : 2 ) ;	
			$t = $t > 9 ? $t - 9 : $t;
			
			$sum += $t;
				
		}

		return $sum % 10 == 0 ? true : false;

	}
	
	public function calculate( $input ) {
			
		for( $sum = 0, $i=0, $l = strlen($input) - 1; $l >= 0; $i++, $l-- ) {
			
			$t = $input[$l]  * ( $i % 2 == 0 ? 2 : 1 ) ;	
			$t = $t > 9 ? $t - 9 : $t;
			
			$sum += $t;
				
		}
		
		$dif = ceil($sum / 10) * 10 - $sum;
		
		return $dif == 10 ? 0 : $dif;
		
		
	}
	
	public function random( $length = 10 ) {
	
		$output = '';
		
		for( $i = 0; $i < $length - 1; $i++ ) {
		
			$output .= rand( 0, 9 );
		
		}
		
		return $output . $this->calculate( $output );
	 
	}
		
}
?>
