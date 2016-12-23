# luhn
Validate and calculate checksums with the Luhn algorithm

# Example

<?php

require('Luhn.php');

$luhn = new Emilfrisk\Luhn\Luhn();

var_dump( $luhn->validate( '9669802549' ) ); //true
var_dump( $luhn->validate( '6708503484' ) ); //true
var_dump( $luhn->validate( '5645884539' ) ); //false

var_dump( $luhn->calculate( '128681375' ) ); //1
var_dump( $luhn->calculate( '623271031' ) ); //6
var_dump( $luhn->calculate( '427972764' ) ); //0

?>
