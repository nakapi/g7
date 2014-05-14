<?php
require_once 'dumpOBR.php';
require_once 'dumpORC.php';
require_once 'dumpOBX.php';
function dumpORDER($obj) {
	$iterator = $obj->getIterator ();
	while ( $iterator->valid () ) {
		$orders = $iterator->current ();
		foreach ( $orders as $key => $order ) {
			echo "===ORDER" . $key . "===\n";
			dumpOBR ( $order ['OBR'] );
			dumpORC ( $order ['ORC'] );
			if (isset ( $order ['OBX'] )) {
				foreach ( $order ['OBX'] as $key3 => $obx ) {
					dumpOBX ( $obx ['OBX'] );
				}
			}
		}
		$iterator->next ();
	}
}