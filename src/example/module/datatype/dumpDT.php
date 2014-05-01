<?php
function dumpDT($field) {
	while ( $field->valid () ) {
		if (mb_strlen($field->current ()->toString ())>0) {
			echo "\t" . $field->current ()->getDate () . "\n";
		} else {
			echo "\n";
		}
		$field->next ();
	}
}