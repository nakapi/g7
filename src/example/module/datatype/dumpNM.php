<?php
function dumpNM($field) {
	while ( $field->valid () ) {
		if ($field->current ()->toString ()) {
			echo "\t" . $field->current ()->getNumeric () . "\n";
		} else {
			echo "\n";
		}
		$field->next ();
	}
}