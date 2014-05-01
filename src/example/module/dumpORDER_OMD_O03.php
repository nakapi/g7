<?php
require_once 'dumpORC.php';
require_once 'dumpTQ1.php';
require_once 'dumpODS.php';
function dumpORDER($obj) {
	$iterator = $obj->getIterator ();
	while ( $iterator->valid () ) {
		$orders = $iterator->current ();
		foreach ( $orders as $key => $order ) {
			echo "===ORDER" .$key. "===\n";
			dumpORC ( $order ['ORC'] );
			foreach ( $order ['TQ1'] as $key2 => $tq1 ) {
				dumpTQ1 ( $tq1['TQ1'] );
			}
			foreach ( $order ['ODS'] as $key3 => $ods ) {
				dumpODS ( $ods['ODS'] );
			}
		}
		$iterator->next ();
	}
}