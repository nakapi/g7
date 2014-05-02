<?php
require_once 'dumpRXA.php';
require_once 'dumpRXR.php';
function dumpADMINISTRATION($obj) {
	foreach ( $obj ['RXA'] as $key2 => $rxa ) {
		dumpRXA ( $rxa ['RXA'] );
	}
	dumpRXR ( $obj ['RXR'] );
}