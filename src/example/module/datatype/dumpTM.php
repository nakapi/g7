<?php
function dumpTM($field) {
	while ( $field->valid () ) {
		if ($field->current ()->toString ()) {
			echo "\t" . $field->current ()->getTime () . "\n";
		} else {
			echo "\n";
		}
		$field->next ();
	}
}