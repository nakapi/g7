<?php
function dumpSI($field) {
	while ( $field->valid () ) {
		if ($field->current ()->toString ()) {
			echo "\t" . $field->current ()->getSequenceId () . "\n";
		} else {
			echo "\n";
		}
		$field->next ();
	}
}