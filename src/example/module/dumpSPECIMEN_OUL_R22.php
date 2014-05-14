<?php
require_once 'dumpSPM.php';
require_once 'dumpORDER_OUL_R22.php';
function dumpSPECIMEN($obj) {
	$iterator = $obj->getIterator ();
	while ( $iterator->valid () ) {
		$orders = $iterator->current ();
		foreach ( $orders as $key => $order ) {
			echo "===SPECIMEN" . $key . "===\n";
			dumpSPM ( $order ['SPM'] );
			foreach ( $order ['ORDER'] as $key3 => $order ) {
				dumpORDER ( $order );
			}
		}
		$iterator->next ();
	}
}