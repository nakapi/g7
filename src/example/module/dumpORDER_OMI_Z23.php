<?php
require_once 'dumpORC.php';
require_once 'dumpTQ1.php';
require_once 'dumpOBR.php';
require_once 'dumpOBX.php';
require_once 'dumpZE1.php';
require_once 'dumpZE2.php';
require_once 'dumpIPC.php';
function dumpORDER($obj) {
	$iterator = $obj->getIterator ();
	while ( $iterator->valid () ) {
		$orders = $iterator->current ();
		foreach ( $orders as $key => $order ) {
			echo "===ORDER" . $key . "===\n";
			dumpORC ( $order ['ORC'] );
			foreach ( $order ['TQ1'] as $key2 => $tq1 ) {
				dumpTQ1 ( $tq1 ['TQ1'] );
			}
			dumpOBR ( $order ['OBR'] );
			if (isset ( $order ['OBX'] )) {
				foreach ( $order ['OBX'] as $key3 => $obx ) {
					dumpOBX ( $obx ['OBX'] );
				}
			}
			if (isset ( $order ['ZE1'] )) {
				foreach ( $order ['ZE1'] as $key3 => $ze1 ) {
					dumpZE1 ( $ze1 ['ZE1'] );
				}
			}
			if (isset ( $order ['ZE2'] )) {
				foreach ( $order ['ZE2'] as $key3 => $ze2 ) {
					dumpZE2 ( $ze2 ['ZE2'] );
				}
			}
			if (isset ( $order ['IPC'] )) {
				foreach ( $order ['IPC'] as $key3 => $ipc ) {
					dumpIPC ( $ipc ['IPC'] );
				}
			}
		}
		$iterator->next ();
	}
}