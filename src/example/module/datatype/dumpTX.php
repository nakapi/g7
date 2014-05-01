<?php
function dumpTX($field) {
	while ( $field->valid () ) {
		if ($field->current ()->toString ()) {
			echo "\t" . $field->current ()->getText () . "\n";
		} else {
			echo "\n";
		}
		$field->next ();
	}
}