<?php
function dumpString($field) {
	while ( $field->valid () ) {
		if ($field->current ()->toString ()) {
			echo "\t" . $field->current ()->toString () . "\n";
		} else {
			echo "\n";
		}
		$field->next ();
	}
}