<?php
require_once 'dumpPID.php';
require_once 'dumpPV1.php';
require_once 'dumpORDER_ORU_R01.php';
function dumpRESULT($obj) {
	$iterator = $obj->getIterator ();
	while ( $iterator->valid () ) {
		$orders = $iterator->current ();
		foreach ( $orders as $key => $order ) {
			echo "===RESULT" . $key . "===\n";
			dumpPID ( $order ['PID'] );
			dumpPV1 ( $order ['PV1'] );
			dumpORDER ( $order ['ORDER'] );
		}
		$iterator->next ();
	}
}