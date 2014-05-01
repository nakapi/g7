<?php
require_once 'dumpPRB.php';
require_once 'dumpZPR.php';
require_once 'dumpZI1.php';
require_once 'dumpORC.php';
function dumpPROBLEM($obj) {
	$iterator = $obj->getIterator ();
	while ( $iterator->valid () ) {
		$problems = $iterator->current ();
		foreach ( $problems as $key => $problem ) {
			echo "===PROBLEM" .$key. "===\n";
			dumpPRB ( $problem ['PRB'] );
			dumpZPR ( $problem ['ZPR'] );
			foreach ( $problem ['ZI1'] as $key2 => $zi1 ) {
				dumpZI1 ( $zi1['ZI1'] );
			}
			foreach ( $problem ['ORC'] as $key3 => $orc ) {
				dumpORC ( $orc['ORC'] );
			}
		}
		$iterator->next ();
	}
}