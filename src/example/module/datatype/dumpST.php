<?php
function dumpST($field) {
	while ( $field->valid () ) {
		if ($field->current ()->toString ()) {
			echo "\t" . $field->current ()->getStringData () . "\n";
		} else {
			echo "\n";
		}
		$field->next ();
	}
}