<?php
require_once 'dumpORC.php';
require_once 'dumpRXE.php';
require_once 'dumpTQ1.php';
require_once 'dumpRXR.php';
function dumpORDER($obj) {
	$iterator = $obj->getIterator ();
	while ( $iterator->valid () ) {
		$orders = $iterator->current ();
		foreach ( $orders as $key => $order ) {
			echo "===ORDER" .$key. "===\n";
			dumpORC ( $order ['ORC'] );
			dumpRXE ( $order ['RXE'] );
			foreach ( $order ['TQ1'] as $key2 => $tq1 ) {
				dumpTQ1 ( $tq1['TQ1'] );
			}
			foreach ( $order ['RXR'] as $key3 => $rxr ) {
				dumpRXR ( $rxr['RXR'] );
			}
		}
		$iterator->next ();
	}
}