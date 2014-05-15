<?php
require_once 'dumpORC.php';
require_once 'dumpOBR.php';
require_once 'dumpTQ1.php';
require_once 'dumpOBX.php';
function dumpORDER($obj) {
	$iterator = $obj->getIterator ();
	while ( $iterator->valid () ) {
		$orders = $iterator->current ();
		foreach ( $orders as $key => $order ) {
			echo "===ORDER" . $key . "===\n";
			dumpORC ( $order ['ORC'] );
			dumpOBR ( $order ['OBR'] );
			foreach ( $order ['TQ1'] as $key2 => $tq1 ) {
				dumpTQ1 ( $tq1 ['TQ1'] );
			}
			if (isset ( $order ['OBX'] )) {
				foreach ( $order ['OBX'] as $key3 => $obx ) {
					dumpOBX ( $obx ['OBX'] );
				}
			}
		}
		$iterator->next ();
	}
}